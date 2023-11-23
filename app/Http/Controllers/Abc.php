<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\User;


use App\Models\School_subject;
use App\Models\Chapter_video;
use App\Models\Chapter;
use App\Models\School_assesment;
use App\Models\School_note;
use App\Models\School_video_play_back;
use App\Models\School_assesment_result;
use App\Models\School_test;
use App\Models\School_test_master;
use App\Models\School_student;
use App\Models\School_test_result;
use App\Models\School_mini_project;
use App\Models\School_project_task;
use App\Models\School_project_process;
use App\Models\School_qna;
use App\Models\Teacher;
use App\Models\School_message;
use App\Models\School_forum_question;
use App\Models\School_forum_answer;

use App\Models\Marker;


use FFMpeg\Format\Video\X264;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Exporters\HLSVideoFilters;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\Exporters\HLSExporter;

class Abc extends Controller
{
    //    ========================== school students ======================



    public function all_subjects()
    {

        $student = School_student::where('auth_id', session('rexkod_user_id'))->first();
        $subjects = School_subject::where('class_id', $student->class_id)->get();
        $tests = [];
        foreach ($subjects as $subject) {
            $latestTest = School_test::where('subject_id', $subject->id)
                ->latest()
                ->first();
            $tests[] = $latestTest;
        }
        // dd($tests);

        return view('school_student.all_subjects', ['subjects' => $subjects, 'tests' => $tests]);
    }

    public function subject_live_stream($subject_id, $tab_id)
    {

        $subject = School_subject::where('id', $subject_id)->first();
        $chapters = Chapter::where('subject', $subject_id)->get();
        $videos = Chapter_video::whereHas('chapter', function ($query) use ($subject_id) {
            $query->where('subject', $subject_id);
        })->get();

        $assesments = School_assesment::with('class', 'subject', 'chapter', 'video')->where('subject_id', $subject_id)->get();

        $Video_play_back = School_video_play_back::where('user_id', session('rexkod_user_id'))
            ->where('subject_id', $subject_id)
            ->latest('updated_at')
            ->first();
        // Now, $video_play_back contains the last updated record with the specified course_id
        if ($Video_play_back) {
            $video_details = Chapter_video::where('id', $Video_play_back->video_id)->first();
            $timestamp = $Video_play_back->video_time_stamp;
        } else {
            $chapter = Chapter::where('subject', $subject_id)->first();
            $video_details = Chapter_video::where('chapter_id', $chapter->id)->first();
            $timestamp = 0;
        }

        $test = School_test::where('subject_id', $subject_id)
            ->latest()
            ->first();
        $test_result = School_test_result::where('test_id', $test->id)
            ->where('user_id', session('rexkod_user_id'))
            ->latest()
            ->first();

        $mini_projects = School_mini_project::where('subject_id', $subject_id)->get();

        $assesments_result = School_assesment_result::where('user_id', session('rexkod_user_id'))->distinct()
            ->pluck('video_id');
        $assesments_given = Chapter_video::whereIn('id', $assesments_result)
            ->select('id', 'video_name') // Adjust the columns you want to select
            ->get();

        $notes = School_note::where('student_id', session('rexkod_user_id'))->where('subject_id', $subject_id)->get();

        $teacher = Teacher::whereJsonContains('class_and_subject', ['subject_id' => $subject_id])->with('user')->first();
        // dd($teachers);
        $sent_messages = School_message::where('sender_id', Session::get('rexkod_user_id'))->where('receiver_id', $teacher->auth_id)->get();
        $received_messages = School_message::where('sender_id', $teacher->auth_id)->where('receiver_id', Session::get('rexkod_user_id'))->get();

        $data = [
            'subject_id' => $subject_id,
            'subject' => $subject,
            'id' => $tab_id,
            'videos' => $videos,
            'chapters' => $chapters,
            'assesments' => $assesments,
            'mini_projects' => $mini_projects,
            'assesments_given' => $assesments_given,
            'notes' => $notes,
            'teacher' => $teacher,
            'sent_messages' => $sent_messages,
            'received_messages' => $received_messages,
        ];
        return view('school_student/subject_live_stream', ['data' => $data, 'video_details' => $video_details, 'video_timestamp' => $timestamp, 'test' => $test, 'test_result' => $test_result]);
    }


    public function save_video_timestamp_school(Request $req)
    {
        $timestamp = School_video_play_back::where('user_id', session('rexkod_user_id'))
            ->where('video_id', $req->videoId)
            ->where('subject_id', $req->subjectId)
            ->first();
        if ($timestamp) {
            $timestamp->video_time_stamp = $req->timestamp;
            $timestamp->status = 0;
            // $timestamp->updated_at = Carbon::now();
            $timestamp->save();
        } else {
            $video = new School_video_play_back();
            $video->user_id = session('rexkod_user_id');
            $video->subject_id  = $req->subjectId;
            $video->video_id = $req->videoId;
            $video->video_time_stamp = $req->timestamp;
            $video->save();
        }
        return $timestamp;
    }

    // if video completes
    public function update_video_status_school(Request $req)
    {
        $timestamp = School_video_play_back::where('user_id', session('rexkod_user_id'))
            ->where('video_id', $req->videoId)
            ->first();

        if ($timestamp) {
            $timestamp->video_time_stamp = $req->timestamp;
            $timestamp->status = 1;
            // $timestamp->updated_at = Carbon::now();
            $timestamp->save();
        }
        return $timestamp;
    }

    public function take_assesment_school($subject_id, $chapter_id, $video_id)
    {
        # code...
        // $assesment = Assesment::where('subject_id', $subject)->where('section_name', $section)->where('video', $video)->get();

        $assesment = School_assesment::where('subject_id', $subject_id)->where('chapter_id', $chapter_id)->where('video_id', $video_id)->inRandomOrder()
            ->take(5)
            ->get();

        $data = [
            'subject_id' => $subject_id,
            'chapter_id' => $chapter_id,
            'video_id' => $video_id,
            'assesment' => $assesment,
        ];
        // dd($assesment);
        return view('school_student/take_assesment', ['data' => $data]);
    }
    public function assesment_submit_school(Request $req, $subject, $chapter, $video)
    {
        // dd($req->questions);
        $result = new School_assesment_result();
        $result->user_id = session('rexkod_user_id');

        $assesments = School_assesment::where('subject_id', $subject)->where('chapter_id', $chapter)->where('video_id', $video)->get();

        $count = 1;
        $score = 0;
        foreach ($assesments as $assesment) {
            if (in_array($assesment->id, $req->questions)) {
                $answer_selected[] = $req->{'que_' . $count . '_selected'};
                if ($assesment->answer == $req->{'que_' . $count . '_selected'}) {
                    $score++;
                }
                $questions[] = $assesment->id;
                $count++;
            }
        }
        $new_answer = implode(',', $answer_selected);
        $new_questions = implode(',', $questions);
        // dd($new_answer);
        $result->user_answer =    $new_answer;

        $result->score = $score;

        $result->questions = $new_questions;
        $result->subject_id = $subject;
        $result->chapter_id = $chapter;
        $result->video_id = $video;

        if ($result->save()) {
            session()->put('success', "Assesment submitted successfully !!");
            return redirect('assesment_result_school/' . $result->id);
        } else {
            session()->put('failed', 'Failed, Try again!');
            return redirect()->back();
        }
        // return redirect('assesment_result/'.$result->id);
    }
    public function assesment_result_school($id)
    {

        $result = School_assesment_result::where('id', $id)->first();

        $data = [
            'result' => $result,
        ];
        return view('school_student/assesment_result', ['data' => $data]);
    }


    public function take_school_test($subject_id, $id)
    {

        $all_quiz = School_test::where('id', $id)->first();
        $question_id = explode(',', $all_quiz->questions);
        $total_count = count($question_id);
        // Retrieve all the questions from the testmaster table with matching IDs
        $quiz_masters = School_test_master::whereIn('id', $question_id)->get();

        $data = [
            'subject_id' => $subject_id,
            'all_quiz' => $all_quiz,
        ];
        return view('school_student/take_test', ['data' => $data, 'question_id' => $question_id, 'total_count' => $total_count, 'quiz_masters' => $quiz_masters]);
    }

    public function school_test_submit(Request $req, $id)
    {
        $result = new School_test_result();


        $test = School_test::where('id', $id)->first();
        $all_questions = explode(',', $test->questions);
        $count = 1;

        foreach ($all_questions as $question) {
            $answer_selected[] = $req->{'que_' . $count . '_selected'};
            $count++;
        }
        $new_answer = implode(',', $answer_selected);
        $count2 = 1;
        $score = 0;
        foreach ($all_questions as $question) {
            $test_master = School_test_master::where('id', $question)->first();
            $test_answer = $test_master->answer;
            if ($test_answer == $req->{'que_' . $count2 . '_selected'}) {
                $score++;
                $count2++;
            }
        }
        $questionsArray = explode(",", $test->questions);
        $totalQuestions = count($questionsArray);

        if ($score != 0) {
            $score_percentage = ($score / $totalQuestions) * 100;
        } else {
            $score_percentage = 0;
        }
        $result->user_answer =    $new_answer;
        $result->test_id = $id;
        $result->questions = $test->questions;
        $result->score = $score;
        $result->score_percentage = $score_percentage;
        $result->user_id = session('rexkod_user_id');
        $result->save();

        if ($result->save()) {
            session()->put('success', "Test submitted successfully !!");
            return redirect('view_school_test_score/' . $id . '/' . $req->subject_id);
        } else {
            session()->put('failed', 'Failed, Try again!');
            return redirect()->back();
        }
        // return redirect('view_test_score/'.$id .'/'.$req->course_id);
    }
    public function view_school_test_score($id, $subject_id)
    {
        $subject = School_subject::where('id', $subject_id)->first();
        $result = School_test_result::where('test_id', $id)
            ->where('user_id', session('rexkod_user_id'))
            ->latest()->first();
        $data = [
            'subject' => $subject,
            'result' => $result,
        ];

        return view('school_student/view_test_score', ['data' => $data]);
    }

    public function view_subject_certificate($subject_id, $test_id)
    {
        return view('school_student.view_certificate', [
            'subject' => School_subject::where('id', $subject_id)->first(),
            'test_result' => $test_id,
        ]);
    }

    public function view_school_project($project_id)
    {
        # code...
        $project_task = School_project_task::where('project_id', $project_id)->get();
        $mini_project = School_mini_project::where('id', $project_id)->first();
        $data = [
            'project' => $mini_project,
            'project_task' => $project_task,
            'project_id' => $project_id,
        ];
        return view('school_student/view_project', ['data' => $data]);
    }

    public function start_school_project($id, $lab_code)
    {
        $project_task = School_project_task::where('id', $id)->first();
        $project_process = new School_project_process();
        $project_process->student_id = session('rexkod_user_id');
        $project_process->project_id  = $project_task->project_id;
        $project_process->task_id  = $id;
        $project_process->status  = 1;
        $project_process->save();
        $data = [
            'project_task' => $project_task,
            'code' => $lab_code,
            'project_process_id' => $project_process->id,
        ];

        return  view('school_student.project_lab', ['data' => $data]);
    }

    public function update_school_project_task_status($id)
    {
        School_project_process::where('id', $id)
            ->update(['status' => 2]);
        $project_process = School_project_process::where('id', $id)->first();

        return redirect('view_school_project/' . $project_process->project_id);
    }

    public function continue_school_project_task($id, $lab_code)
    {
        $project_task = School_project_task::where('id', $id)->first();
        $project_process = School_project_process::where('student_id', session('rexkod_user_id'))
            ->where('project_id', $project_task->project_id)
            ->where('task_id', $id)->first();
        $data = [
            'project_task' => $project_task,
            'code' => $lab_code,
            'project_process_id' => $project_process->id,
        ];

        return  view('school_student.project_lab', ['data' => $data]);
    }

    public function save_school_notes(Request $req)
    {
        # code...
        $note = new School_note();

        $note->student_id = Session::get('rexkod_user_id');
        $note->subject_id = $req->subject_id;
        $note->note = $req->note;

        $note->save();
        // session()->put('success', 'Message sent successfully');

        return redirect('subject_live_stream/' . $req->subject_id . '/1');
    }

    public function school_qna_view()
    {
        # code...
        $subjects = School_subject::get();
        $data = [
            'subjects' => $subjects,
        ];
        return view('school_student/qna', ['data' => $data]);
    }
    public function school_qna(Request $req)
    {
        # code...
        $qna = new School_qna();

        $qna->subject_id = $req->subject;
        $qna->question = $req->question;
        $qna->q_created_by = session('rexkod_user_id');

        $qna->save();
        session()->put('success', "Question Sent");
        return redirect('school_qna');
    }


    public function school_qna_single($id)
    {
        $qna = School_qna::where('id', $id)->first();
        $data = [
            'qna' => $qna,
        ];
        return view('school_student.qna_single', ['data' => $data]);
    }
    public function school_send_message(Request $req)
    {
        # code...
        // $message = new Message();

        $qna = School_qna::where('question', $req->message)->first();
        if ($qna) {
            // dd($qna->answer);
            $message = new School_message();
            $message->sender_id = Session::get('rexkod_user_id');
            $message->receiver_id = $req->receiver_id;
            $message->message = $qna->question;
            $message->save();

            if ($qna->answer) {
                $message = new School_message();
                $message->sender_id = $qna->a_created_by;
                $message->receiver_id = Session::get('rexkod_user_id');
                $message->message = $qna->answer;
                $message->save();
            }
        } else {
            $message = new School_message();
            $message->sender_id = Session::get('rexkod_user_id');
            $message->receiver_id = $req->receiver_id;
            $message->message = $req->message;
            $message->save();
        }

        // session()->put('success', 'Message sent successfully');

        return redirect('subject_live_stream/' . $req->subject_id . '/2');
    }

    public function school_forums()
    {
        return view('school_student.forums', [
            'forum_questions' => School_forum_question::get(),
        ]);
    }

    public function school_create_forum(Request $request)
    {
        $forumQuestion = new School_forum_question();
        $forumQuestion->student_id = Session::get('rexkod_user_id');
        $forumQuestion->question = $request->question;
        $forumQuestion->created_at = date('Y-m-d H:i:s');
        if ($forumQuestion->save()) {
            session()->put('success', "Your Question submitted successfully");
            return redirect('school_forums');
        } else {
            session()->put('failed', 'Your Question not submitted, Try again!');
            return redirect()->back();
        }
    }


    public function view_school_forum($question_id)
    {
        return view('school_student.view_forum', [
            'forum_question' => School_forum_question::where('id', $question_id)->first(),
            'forum_answers' => School_forum_answer::where('forum_question_id', $question_id)->orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function add_school_forum()
    {
        return view('school_student.add_forum', []);
    }

    public function create_school_forum(Request $request)
    {
        $forumQuestion = new School_forum_question();
        $forumQuestion->student_id = Session::get('rexkod_user_id');
        $forumQuestion->question = $request->question;
        $forumQuestion->created_at = date('Y-m-d H:i:s');
        if ($forumQuestion->save()) {
            session()->put('success', "Your Question submitted successfully");
            return redirect('school_forums');
        } else {
            session()->put('failed', 'Your Question not submitted, Try again!');
            return redirect()->back();
        }
    }
    public function answer_school_forum($question_id)
    {
        return view('school_student.answer_forum', [
            'forum_question' => School_forum_question::where('id', $question_id)->first(),
        ]);
    }
    public function create_school_forum_answer(Request $request)
    {
        $forumAnswer = new School_forum_answer();
        $forumAnswer->forum_question_id = $request->forum_question_id;
        $forumAnswer->student_id = Session::get('rexkod_user_id');
        $forumAnswer->answer = $request->answer;
        $forumAnswer->created_at = date('Y-m-d H:i:s');
        if ($forumAnswer->save()) {
            session()->put('success', "Your answer submitted successfully");
            return redirect("view_school_forum/" . $request->forum_question_id);
        } else {
            session()->put('failed', 'Your answer not submitted, Try again!');
            return redirect()->back();
        }
    }




    // ========== apis =============

    public function get_subjects($classId)
    {

        $subjects = School_subject::where('class_id', $classId)->get();

        return $subjects;
    }

    public function login(Request $req)
    {
        if (is_numeric($req->email)) {
            $user = User::where('id', $req->email)->first();
            if ($user && $user->type == 'school_student' && Hash::check($req->password, $user->password)) {
                $student = School_student::where('auth_id', $user->id)->first();
                $data = [
                    'student' => $student,
                    'user' => $user,
                ];
                return $data;
            } else {
                return ["msg" => "Invalid credentials"];
            }
        } else {
            $user = User::where('email', $req->email)->first();
            $data = [
                'user' => $user,
            ];
            return $data;

            // if($user && $user->type == 'admin' && Hash::check($req->password, $user->password)) {
            //     $data = [
            //         'user' => $user,
            //     ];
            //     return $data;

            // } elseif($user && $user->type == 'parent' && Hash::check($req->password, $user->password)) {
            //     $date = date('Y-m-d H:i:s');
            //     $req->session()->put('user', $user);
            //     Session::put('rexkod_user_id', $user->id);
            //     Session::put('rexkod_user_name', $user->name);
            //     Session::put('rexkod_user_email', $user->email);
            //     Session::put('rexkod_user_phone', $user->phone);
            //     Session::put('rexkod_user_type', $user->type);
            //     // dd(session('rexkod_user_name'));

            //     return redirect('/parents/index');


            //     // sub admin -- school
            // } elseif($user && $user->type == 'sub_admin' && Hash::check($req->password, $user->password)) {
            //     $date = date('Y-m-d H:i:s');
            //     $req->session()->put('user', $user);
            //     Session::put('rexkod_admin_id', $user->id);
            //     Session::put('rexkod_admin_name', $user->name);
            //     Session::put('rexkod_admin_email', $user->email);
            //     Session::put('rexkod_admin_phone', $user->phone);
            //     Session::put('rexkod_admin_type', $user->type);
            //     // dd(session('rexkod_user_name'));

            //     return redirect('/admin/index');


            // } elseif($user && $user->type == 'teacher' && Hash::check($req->password, $user->password)) {
            //     // dd($user->type);
            //     $date = date('Y-m-d H:i:s');
            //     $req->session()->put('trainer', $user);
            //     Session::put('rexkod_trainer_id', $user->id);
            //     Session::put('rexkod_trainer_name', $user->name);
            //     Session::put('rexkod_trainer_type', $user->type);
            //     // dd(session('rexkod_user_name'));
            //     return redirect('/trainer/index');

            // } else {
            //     session()->put('failed', 'Invalid Credentials');
            //     return redirect('/login');
            // }
        }
    }

    //  public function register(Request $req)
    // {

    //     $auth=new User();

    //     $result = User::where('email', $req->email)->first();
    //     if($result) {
    //         return ["msg"=>"Email already exists"];
    //     } else {

    //         if($req->has('is_parent')){
    //             $auth->name = $req->name;
    //             $auth->phone = $req->phone;
    //             $auth->email = $req->email;
    //             $auth->type = 'parent';
    //             $auth->password=Hash::make($req->password);

    //             $length = 6;
    //             $min = pow(10, $length - 1);
    //             $max = pow(10, $length) - 1;
    //             $rand_number = mt_rand($min, $max);
    //             $auth->parent_code = $rand_number;

    //             $auth->save();
    //             $user = User::where('email', $req->email)->first();

    //             $date = date('Y-m-d H:i:s');
    //             $req->session()->put('user', $user);
    //             Session::put('rexkod_user_id', $user->id);

    //             Session::put('rexkod_user_name', $user->name);
    //             Session::put('rexkod_user_email', $user->email);
    //             Session::put('rexkod_user_phone', $user->phone);

    //             return redirect('/parents/index');
    //         }else{


    //         $auth->name = $req->name;
    //         $auth->phone = $req->phone;
    //         $auth->email = $req->email;
    //         $auth->type = 'student';
    //         $auth->password=Hash::make($req->password);

    //         $auth->save();
    //         $user = User::where('email', $req->email)->first();

    //         $student=new Student();
    //         $student->student_id= $user->id;
    //         $student->f_name= $req->name;
    //         $student->phone_no= $req->phone;
    //         $student->email= $req->email;
    //         $student->save();


    //         $date = date('Y-m-d H:i:s');
    //         $req->session()->put('user', $user);
    //         Session::put('rexkod_user_id', $user->id);
    //         Session::put('rexkod_user_type', $user->type);
    //         Session::put('rexkod_user_name', $user->name);
    //         Session::put('rexkod_user_email', $user->email);
    //         Session::put('rexkod_user_phone', $user->phone);

    //         return redirect('/index');
    //         }




    //         // return redirect('/index');
    //     }

    // }

    public function submitSchoolQna(Request $req)
    {
        # code...
        $qna = new School_qna();

        $qna->subject_id = $req->subject;
        $qna->question = $req->question;
        $qna->q_created_by = $req->userId;

        if ($qna->save()) {
            return ["msg" => "Question submitted"];
        } else {
            return ["msg" => "Question could not submitted"];
        }
    }

    public function submitSchoolForum(Request $req)
    {
        $forumQuestion = new School_forum_question();
        $forumQuestion->student_id = $req->userId;
        $forumQuestion->question = $req->question;
        $forumQuestion->created_at = date('Y-m-d H:i:s');
        if ($forumQuestion->save()) {
            return ["msg" => "Question submitted"];
        } else {
            return ["msg" => "Question could not submitted"];
        }
    }
    public function search_school_questions($data)
    {
        $questions = DB::table('school_qnas')
            ->where('question', 'like', $data . '%')
            ->get();

        return $questions;
    }
    public function get_school_qna_single($qna_id)
    {
        $qna = School_qna::where('id', $qna_id)->first();
        return $qna;
    }

    public function school_search_forum_questions($data)
    {

        $questions = DB::table('school_forum_questions')
            ->where('question', 'like', $data . '%')
            ->get();
        return $questions;
    }

    public function get_school_forum_single($question_id)
    {
        return  [
            'forum_question' => School_forum_question::where('id', $question_id)->first(),
            'forum_answers' => School_forum_answer::where('forum_question_id', $question_id)->with('student')->orderBy('created_at', 'desc')->get(),
        ];
    }

    public function submitSchoolForumAnswer(Request $request, $question_id)
    {
        $forumAnswer = new School_forum_answer();
        $forumAnswer->forum_question_id = $question_id;
        $forumAnswer->student_id = $request->userId;
        $forumAnswer->answer = $request->answer;
        $forumAnswer->created_at = date('Y-m-d H:i:s');
        if ($forumAnswer->save()) {
            return ["msg" => "Answer submitted"];
        } else {
            return ["msg" => "Answer could not submitted"];
        }
    }

    public function connect_parent(Request $req)
    {
        $parent = User::where('parent_code', $req->parentCode)->first();
        if ($parent->parent_code) {
            $student = User::where('id', $req->userId)->first();
            $student->parent_id = $parent->id;
            $student->save();
            return ['parent' => $parent, "msg" => "Parent Connected"];
        }
    }
    public function get_parent($parent_id)
    {
        $parent = User::where('id', $parent_id)->first();
        return $parent;
    }

    public function subject_stream($student_id, $subject_id)
    {

        $subject = School_subject::where('id', $subject_id)->first();
        $chapters = Chapter::where('subject', $subject_id)->get();
        $videos = Chapter_video::whereHas('chapter', function ($query) use ($subject_id) {
            $query->where('subject', $subject_id);
        })->get();

        $assesments = School_assesment::with('class', 'subject', 'chapter', 'video')->where('subject_id', $subject_id)->get();

        $Video_play_back = School_video_play_back::where('user_id', $student_id)
            ->where('subject_id', $subject_id)
            ->latest('updated_at')
            ->first();
        // Now, $video_play_back contains the last updated record with the specified course_id
        if ($Video_play_back) {
            $video_details = Chapter_video::where('id', $Video_play_back->video_id)->first();
            $timestamp = $Video_play_back->video_time_stamp;
        } else {
            $chapter = Chapter::where('subject', $subject_id)->first();
            $video_details = Chapter_video::where('chapter_id', $chapter->id)->first();
            $timestamp = 0;
        }

        $test = School_test::where('subject_id', $subject_id)
            ->latest()
            ->first();
        $test_result = [];
        if ($test) {
            $test_result = School_test_result::where('test_id', $test->id)
                ->where('user_id', $student_id)
                ->latest()
                ->first();
        }


        $mini_projects = School_mini_project::where('subject_id', $subject_id)->get();

        $assesments_result = School_assesment_result::where('user_id', $student_id)->distinct()
            ->pluck('video_id');
        $assesments_given = Chapter_video::whereIn('id', $assesments_result)
            ->select('id', 'video_name') // Adjust the columns you want to select
            ->get();

        $notes = School_note::where('student_id', $student_id)->where('subject_id', $subject_id)->get();

        $teacher = Teacher::whereJsonContains('class_and_subject', ['subject_id' => $subject_id])->with('user')->first();
        // dd($teachers);
        $sent_messages = School_message::where('sender_id', $student_id)->where('receiver_id', $teacher->auth_id)->get();
        $received_messages = School_message::where('sender_id', $teacher->auth_id)->where('receiver_id', $student_id)->get();
        // $merged_messages = $sent_messages->merge($received_messages)->sortBy('created_at')->all();
        $merged_messages = $sent_messages->merge($received_messages)->sortBy('created_at');
        $merged_messages = $merged_messages->values()->all();
        $data = [
            'subject_id' => $subject_id,
            'subject' => $subject,
            // 'id' => $tab_id,
            'videos' => $videos,
            'chapters' => $chapters,
            'assesments' => $assesments,
            'mini_projects' => $mini_projects,
            'assesments_given' => $assesments_given,
            'notes' => $notes,
            'teacher' => $teacher,
            // 'sent_messages' => $sent_messages,
            // 'received_messages' => $received_messages,
            'merged_messages' => $merged_messages,
            'video_details' => $video_details,
            'video_timestamp' => $timestamp,
            'test' => $test,
            'test_result' => $test_result
        ];
        return $data;
    }

    public function get_assesments_for_video($video_id)
    {
        $assesments = School_assesment::where('video_id', $video_id)->inRandomOrder()
            ->take(5)
            ->get();
        return $assesments;
    }

    public function submit_assessment(Request $req)
    {
        $result = new School_assesment_result();
        $result->user_id = $req->user_id;
        $assesments = School_assesment::where('video_id', $req->video_id)->get();
        $count = 1;
        $score = 0;
        $selectedQuestionIds = explode(',', $req->selectedQuestionIds);

        foreach ($assesments as $index => $assesment) {
            if (in_array($assesment->id, $selectedQuestionIds)) {
                if ($assesment->answer === $req->selectedAnswers[$count]) {
                    $score++;
                }
                $count++;
            }
        }

        $result->user_answer =    $req->selectedAnswers;
        $result->score = $score;
        $result->questions = $req->selectedQuestionIds;
        // $result->subject_id = $req->subject_id;
        // $result->chapter_id = $$req->chapter_id;
        $result->video_id = $req->video_id;

        if ($result->save()) {
            return $result;
        } else {
            return ["msg" => "Answer can not be submitted"];
        }
    }

    public function get_subject_by_video($video_id)
    {
        $video = Chapter_video::where("id", $video_id)->first();
        // Check if the video is found
        if ($video) {
            // Access the chapter relationship
            // $chapter = $video->chapter;
            // Check if the chapter is found

            $chapter = Chapter::where("id", $video->chapter_id)->first();
            $subject_id = $chapter->id;
            // Now $subjectId contains the subject_id associated with the video
        }
        return $subject_id;
    }

    public function get_tests($test_id)
    {
        $all_quiz = School_test::where('id', $test_id)->first();
        $question_id = explode(',', $all_quiz->questions);
        $total_count = count($question_id);
        // Retrieve all the questions from the testmaster table with matching IDs
        $quiz_masters = School_test_master::whereIn('id', $question_id)->get();
        return $quiz_masters;
    }

    public function test_submit(Request $req)
    {
        $result = new School_test_result();


        $test = School_test::where('id', $req->test_id)->first();
        $all_questions = explode(',', $test->questions);
        $questionsData = School_test_master::whereIn('id', $all_questions)->get();
        $selectedQuestionIds = explode(',', $req->selectedQuestionIds);

        $count = 1;

        // foreach ($all_questions as $question) {
        //     $answer_selected[] = $req->{'que_' . $count . '_selected'};
        //     $count++;
        // }
        // $new_answer = implode(',', $answer_selected);
        $count2 = 1;
        $score = 0;
        foreach ($questionsData as $question) {
            // $test_master = School_test_master::where('id', $question)->first();
            // $test_answer = $test_master->answer;

            if (in_array($question->id, $selectedQuestionIds)) {
                if ($question->answer === $req->selectedAnswers[$count]) {
                    $score++;
                }
                $count++;
            }
            // if($test_answer == $req->{'que_' . $count2 . '_selected'}) {
            //     $score++;
            //     $count2++;
            // }
        }
        $questionsArray = explode(",", $test->questions);
        $totalQuestions = count($questionsArray);

        if ($score != 0) {
            $score_percentage = ($score / $totalQuestions) * 100;
        } else {
            $score_percentage = 0;
        }
        $result->user_answer =    $req->selectedAnswers;
        $result->test_id = $req->test_id;
        $result->questions = $test->questions;
        $result->score = $score;
        $result->score_percentage = $score_percentage;
        $result->user_id = $req->user_id;
        $result->save();

        // if($result->save()) {
        //     session()->put('success', "Test submitted successfully !!");
        //     return redirect('view_school_test_score/' . $id . '/' . $req->subject_id);

        // } else {
        //     session()->put('failed', 'Failed, Try again!');
        //     return redirect()->back();
        // }
        // return redirect('view_test_score/'.$id .'/'.$req->course_id);
        return $result;
    }


    public function get_project_tasks($project_id)
    {
        $project_tasks = School_project_task::where('project_id', $project_id)->get();
        return $project_tasks;
    }
    public function get_project_task_todo($user_id, $project_id)
    {
        $project_process = School_project_process::where('student_id', $user_id)
            ->where('project_id', $project_id)
            ->get();
        return $project_process;
    }

    public function start_project_task($user_id, $id)
    {
        $project_task = School_project_task::where('id', $id)->first();
        $project_process = new School_project_process();
        $project_process->student_id = $user_id;
        $project_process->project_id  = $project_task->project_id;
        $project_process->task_id  = $id;
        $project_process->status  = 1;
        $project_process->save();
        return ["msg" => "Project started"];
    }
    public function update_project_task_status($id)
    {
        School_project_process::where('task_id', $id)
            ->update(['status' => 2]);
        // $project_process = School_project_process::where('id', $id)->first();

        return ["msg" => "Project Completed"];
    }

    public function get_test_score($test_id, $user_id)
    {
        $result = School_test_result::where('test_id', $test_id)
            ->where('user_id', $user_id)
            ->latest()->first();
        return $result;
    }

    public function get_markers()
    {
        $markers = Marker::get();
        return $markers;
    }
    public function save_marker(Request $req)
    {
        $marker = new Marker();
        $marker->video_id = 1;
        $marker->note = $req->note;
        $marker->time = $req->timestamp;
        $marker->user_id = session('rexkod_user_id');

        $marker->save();
        // $markers = Marker::get();
        return $marker;
    }

    public function get_student_details($user_id)
    {
        $student = School_student::where('auth_id', $user_id)->first();
        return $student;
    }
}

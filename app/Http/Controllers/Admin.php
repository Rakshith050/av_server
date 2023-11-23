<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


use App\Models\User;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Quiz_master;
use App\Models\Quiz_result;
use App\Models\Internship;
use App\Models\Internship_application;
use App\Models\Student;
use App\Models\Assesment;
use App\Models\Video;
use App\Models\Job_detail;
use App\Models\Job_application;
use App\Models\Mini_project;
use App\Models\Enrolled_course;
use App\Models\Section;
use App\Models\Lab;
use App\Models\Internship_task;
use App\Models\Qna;
use App\Models\Project_task;
use App\Models\Ebook;
use App\Models\Ebook_module;
use App\Models\Element;
use App\Models\Ebook_section;
use App\Models\Ebook_element;
use App\Models\Project_report;
use App\Models\Project_report_modules;
use App\Models\Project_report_element;
use App\Models\Project_report_element_types;
use App\Models\Use_case;
use App\Models\Use_case_modules;
use App\Models\Use_case_element;
use App\Models\Use_case_element_types;

use App\Models\School;
use App\Models\Classes;
use App\Models\Chapter;
use App\Models\Chapter_video;
use App\Models\School_subject;
use App\Models\School_student;
use App\Models\Teacher;
use App\Models\School_assesment;
use App\Models\School_test;
use App\Models\School_test_master;
use App\Models\School_test_result;
use App\Models\School_mini_project;
use App\Models\School_project_task;

class Admin extends Controller
{
    public function login()
    {

        return view('admin/login');
    }

    public function admin_login(Request $req)
    {

        $admin = User::where('email', $req->email)->first();

        if ($admin && $admin->type == 'admin') {
            $date = date('Y-m-d H:i:s');
            $req->session()->put('admin', $admin);
            Session::put('rexkod_admin_id', $admin->id);

            Session::put('rexkod_admin_name', $admin->name);


            return redirect('admin/index');
        } else {
            session()->put('failed', 'Invalid email');
            return redirect('admin/login');
        }
    }
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }
    public function index()
    {

        // $course=new Course;
        $result = Course::get();
        // dd($result);
        $data = [
            'courses' => $result,
        ];
        //    dd($data['courses']->course_name);
        return view('admin/index', ['data' => $data]);
        // return view('admin/index');
    }

    public function all_results($id)
    {
        $result = Quiz_result::where('quiz_id', $id)->get();
        $data = [
            'result' => $result,
        ];

        return view('admin/all_results', ['data' => $data]);
    }
    public function add_subject_view()
    {
        $subject = new Subject();
        $result = Subject::get();
        $data = [
            'subjects' => $result,
        ];
        return view('admin/add_subject', ['data' => $data]);
    }

    public function trainers()
    {
        $users = new User();
        $result = User::where('type', 'trainer')->get();
        $data = [
            'trainers' => $result,
        ];
        return view('/admin/trainers', ['data' => $data]);
    }

    public function add_subject(Request $req)
    {
        $subject = new Subject();
        $subject->subject_name = $req->subject;
        $subject->save();
        $result = Subject::get();
        $data = [
            'subjects' => $result,
        ];
        session()->put('success', "Subject Added");
        return redirect('/admin/all_courses');
    }

    public function create_quiz_view()
    {
        $subject = new Subject();
        $result = Subject::get();
        $courses = Course::get();
        $data = [
            'courses' => $courses,
            'subjects' => $result,
        ];
        return view('admin/create_quiz', ['data' => $data]);
    }


    public function create_quiz(Request $req)
    {
        $quiz = new Quiz();
        $quiz->subject = $req->subject;
        $quiz->course_id = $req->course;

        $quiz->title = $req->title;
        if (!empty($req->file('quiz_photo'))) {
            $extension1 = $req->file('quiz_photo')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $quiz->image = $req->file('quiz_photo')->move(('uploads'), $filename);
            // }
        } else {
            $quiz->image = $quiz->quiz_photo;
        }
        $quiz->description = $req->description;
        $quiz->created_by = "admin";
        $quiz->save();

        session()->put('success', "Test Added!");
        return redirect('admin/add_quiz');
    }


    public function add_quiz()
    {

        return view('admin/add_quiz');
    }

    public function add_question_to_quiz($que_id)
    {

        // $quiz = Quiz::where('subject', $subject)->get();
        $last_quiz = Quiz::latest()->first();
        $questions = $last_quiz->questions;
        if ($questions == null) {
            $questions = $que_id;
        } else {
            $questions = $questions . ",$que_id";
        }


        Quiz::where('id', $last_quiz->id)->update([
            'questions' => $questions,
        ]);

        // $question = Quiz_master::where('subject', $subject)->get();

        // $data = [
        //     'quiz_master' => $quiz_master,
        //     'subject' => $subject,
        //    ];
        // return view('admin/add_quiz',['data' => $data]);

        return redirect('admin/add_quiz');
    }
    public function delete_question_from_quiz($que_id)
    {
        $last_quiz = Quiz::latest()->first();
        $questions = explode(',', $last_quiz->questions);
        $new_question = 0;
        foreach ($questions as $question) {
            if ((int)$question != $que_id) {
                $value[] = $question;
                $new_question = implode(',', $value);
            } else {
                continue;
            }
        }

        // dd($new_question);
        Quiz::where('id', $last_quiz->id)->update([
            'questions' => $new_question,
        ]);

        session()->put('success', "Question Added to Test!");
        return redirect('admin/add_quiz');
    }



    public function add_question_view()
    {
        $subject = new Subject();
        $result = Subject::get();
        $data = [
            'subjects' => $result,
        ];
        return view('admin/add_question', ['data' => $data]);
    }
    public function add_question(Request $req)
    {
        $question = new Quiz_master();
        $question->subject = $req->subject;

        if (!empty($req->code)) {
            $question->question_code = $req->code;
        }
        if (!empty($req->file('question_image'))) {
            $extension1 = $req->file('question_image')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $question->question_image = $req->file('question_image')->move(('uploads'), $filename);
            // }
        } else {
            $question->question_image = 'question_image';
        }
        $question->question = $req->question;
        $question->option1 = $req->option1;
        $question->option2 = $req->option2;
        $question->option3 = $req->option3;
        $question->option4 = $req->option4;
        $question->answer = $req->answer;

        if (!empty($req->file('option1_img'))) {
            $extension1 = $req->file('option1_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $question->option1_img = $req->file('option1_img')->move(('uploads'), $filename);
            // }
        } else {
            $question->option1_img = 'option1_img';
        }
        if (!empty($req->file('option2_img'))) {
            $extension1 = $req->file('option2_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $question->option2_img = $req->file('option2_img')->move(('uploads'), $filename);
            // }
        } else {
            $question->option2_img = 'option2_img';
        }

        if (!empty($req->file('option3_img'))) {
            $extension1 = $req->file('option3_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $question->option3_img = $req->file('option3_img')->move(('uploads'), $filename);
            // }
        } else {
            $question->option3_img = 'option3_img';
        }
        if (!empty($req->file('option4_img'))) {
            $extension1 = $req->file('option4_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $question->option4_img = $req->file('option4_img')->move(('uploads'), $filename);
            // }
        } else {
            $question->option4_img = 'option4_img';
        }
        $question->save();

        session()->put('success', "Question Added!");
        return redirect('admin/add_question');
    }

    public function quiz_master(Request $req)
    {

        $result = Subject::get();

        $question = new Quiz_master();
        if ($req->subject) {
            $quiz_master = Quiz_master::where('subject', $req->subject)->get();
        } else {
            $quiz_master = Quiz_master::get();
        }
        $data = [
            'subjects' => $result,
            'question' => $quiz_master,
        ];

        return view('admin/quiz_master', ['data' => $data]);
    }

    public function edit_subject()
    {

        return view('admin/edit_subject');
    }


    //create course
    public function create_course(Request $req)
    {
        $course = new Course();

        $course->course_name = $req->course_name;
        $course->course_subject = $req->course_subject;
        $course->course_type = $req->course_type;
        $course->course_category = $req->course_category;
        $course->course_subcategory = $req->course_subcategory;
        $course->course_tutor = $req->course_tutor;
        $course->description = $req->description;

        // $course->course_image=$req->course_image;
        // $course->course_video=$req->course_video;
        $course->course_cost = $req->course_cost;
        $course->course_benifits = $req->course_benifits;
        $course->course_requirements = $req->course_requirements;
        $course->course_tags = $req->course_tags;
        // explode(',',$req->course_tags);

        if (!empty($req->file('course_image'))) {
            $extension1 = $req->file('course_image')->extension();
            if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
                $filename = Str::random(4) . time() . '.' . $extension1;
                $course->course_image = $req->file('course_image')->move(('uploads'), $filename);
            }
        } else {
            $course->course_image = $course->course_image;
        }
        if (!empty($req->file('course_video'))) {
            $extension1 = $req->file('course_video')->extension();

            $filename = Str::random(4) . time() . '.' . $extension1;
            $course->course_video = $req->file('course_video')->move(('uploads'), $filename);
        } else {
            $course->course_video = $course->course_video;
        }

        $rows = $req->no_of_rows;
        $course->section_count = $rows;

        $section1 = $req->section_name1;

        for ($i = 0; $i < $rows; $i++) {

            $section_name = 'section_name' . $i;
            $section_desc = 'section_desc' . $i;

            $section_data[$i] = [
                'id' => $i,
                'section_name' =>  $req->$section_name,
                'section_desc' =>  $req->$section_desc,
                // 'section_video' =>  $section_video,
                // 'section_file' =>  $section_file,

            ];
        }


        // print_r($section_data);
        $section_data = json_encode($section_data);
        // dd($section_data);

        $course->sections = $section_data;
        // dd(explode(',',$req->course_tags));



        $course->save();

        // separete tablevfor the section data
        $last_course = Course::latest()->first();
        for ($i = 0; $i < $rows; $i++) {
            $section_name = 'section_name' . $i;
            $section_desc = 'section_desc' . $i;
            $section = new Section();
            $section->course_id = $last_course->id;
            $section->section_name = $req->$section_name;
            $section->section_desc = $req->$section_desc;
            $section->save();
        }
        session()->put('success', "Course Added!");
        return redirect('admin/all_courses');
    }

    public function all_users()
    {
        $students = Student::get();
        $data = [
            'students' => $students,
        ];
        return view('admin/all_users', ['data' => $data]);
    }

    public function create_internship_view()
    {

        return view('admin/create_internship');
    }
    public function create_internship(Request $req)
    {
        # code...
        $internship = new Internship();
        $internship->internship_title = $req->internship_title;
        if (!empty($req->file('internship_image'))) {
            $extension1 = $req->file('internship_image')->extension();

            $filename = Str::random(4) . time() . '.' . $extension1;
            $internship_image = $req->file('internship_image')->move(('uploads'), $filename);
        } else {
            $internship_image = 'internship_image';
        }
        $internship->internship_image = $internship_image;

        $internship->stipend = $req->stipend;
        $internship->location = $req->location;
        $internship->description = $req->description;
        $internship->criteria = $req->criteria;
        $internship->created_by = session('rexkod_admin_id');

        $internship->save();
        session()->put('success', "Internship Added!");
        return redirect('admin/all_internships');
    }
    public function all_internships()
    {
        # code...
        $all_internships = Internship::get();
        $data = [
            'all_internships' => $all_internships,
        ];

        return view('admin/all_internships', ['data' => $data]);
    }
    public function internship_applications($id)
    {
        # code...
        $Internship_application = Internship_application::where('internship_id', $id)->get();

        $data = [
            'Internship_application' => $Internship_application,
        ];
        return view('admin/internship_applications', ['data' => $data]);
    }

    public function sitemap()
    {

        return view('admin/sitemap');
    }

    public function create_assesments_view()
    {
        $subject = new Subject();

        $course = Course::get();

        // dd($course);
        // $all_sections =$course->sections;
        // $sections = json_decode($all_sections);

        // $result = Subject::get();
        $data = [
            'courses' => $course,
            // 'sections' => $all_sections,
        ];
        return view('admin/create_assesments', ['data' => $data]);
    }
    public function create_assesments(Request $req)
    {
        $assesment = new Assesment();

        $assesment->course_id = $req->course;
        $assesment->section_name = $req->section;
        $assesment->video = $req->video;
        if (!empty($req->code)) {
            $assesment->question_code = $req->code;
        }
        if (!empty($req->file('question_image'))) {
            $extension1 = $req->file('question_image')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $assesment->question_image = $req->file('question_image')->move(('uploads'), $filename);
            // }
        } else {
            $assesment->question_image = 'question_image';
        }
        $assesment->question = $req->question;
        $assesment->option1 = $req->option1;
        $assesment->option2 = $req->option2;
        $assesment->option3 = $req->option3;
        $assesment->option4 = $req->option4;
        $assesment->answer = $req->answer;


        if (!empty($req->file('option1_img'))) {
            $extension1 = $req->file('option1_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $assesment->option1_img = $req->file('option1_img')->move(('uploads'), $filename);
            // }
        } else {
            $assesment->option1_img = 'option1_img';
        }
        if (!empty($req->file('option2_img'))) {
            $extension1 = $req->file('option2_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $assesment->option2_img = $req->file('option2_img')->move(('uploads'), $filename);
            // }
        } else {
            $assesment->option2_img = 'option2_img';
        }

        if (!empty($req->file('option3_img'))) {
            $extension1 = $req->file('option3_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $assesment->option3_img = $req->file('option3_img')->move(('uploads'), $filename);
            // }
        } else {
            $assesment->option3_img = 'option3_img';
        }
        if (!empty($req->file('option4_img'))) {
            $extension1 = $req->file('option4_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $assesment->option4_img = $req->file('option4_img')->move(('uploads'), $filename);
            // }
        } else {
            $assesment->option4_img = 'option4_img';
        }
        $assesment->save();
        session()->put('success', "Assesment Added!");
        return redirect('admin/create_assesments');
    }

    public function get_sections(Request $req)
    {
        # code...
        // $course =Course::where('id',$req->subject_id)->first();
        // $sections=$course->sections;
        // // dd($videos);
        // // return $sections;
        $sections = Section::where('course_id', $req->subject_id)->get();
        return response()->json($sections);
    }

    public function get_sections2(Request $req)
    {
        # code...
        // $course =Course::where('id',$req->subject_id)->first();
        // $videos = Video::where('course_id',$req->subject_id)->get();
        // $sections=$course->sections;
        // dd($videos);
        // return $sections;
        $sections = Section::where('course_id', $req->subject_id)->get();
        return response()->json($sections);
    }
    public function get_videos(Request $req)
    {

        $videos = Video::where('course_id', $req->courseId)
            ->where('section_id', $req->sectionId)->get();
        // $videos=$video->video_name;
        // dd($sections);
        // return $videos;
        return response()->json($videos);
    }
    public function add_videos_view()
    {
        # code...
        $course = Course::get();
        $data = [
            'courses' => $course,

        ];

        return view('admin/add_videos', ['data' => $data]);
    }
    public function add_videos(Request $req)
    {


        foreach ($req->video_file as $video_file) {
            if (!empty($video_file)) {
                $extension = $video_file->getClientOriginalExtension();
                $filename = Str::random(4) . time() . '.' . $extension;
                $path = $video_file->move('uploads', $filename);
                $video_files[] = 'uploads/' . $filename;
            } else {
                $video_files[] = 'video_file';
            }
        }


        $rows = $req->no_of_rows;
        for ($i = 0; $i < $rows; $i++) {
            $videos = new Video();
            $videos->course_id = $req->course;
            $videos->section_id = $req->section;
            $videos->video_name = $req->video_name[$i];
            $videos->video_desc = $req->video_desc[$i];
            $videos->video_file = $video_files[$i];
            $videos->save();
        }

        session()->put('success', "Video Added!");
        return redirect('admin/add_videos');
    }

    public function all_courses()
    {
        # code...
        $courses = Course::get();

        $data = [
            'courses' => $courses,
        ];
        return view('admin/all_courses', ['data' => $data]);
    }


    public function default_course_details($id)
    {

        $course = Course::where("id", $id)->first();
        $trainer = User::where("id", $course->course_tutor)->first();
        $sections = Section::where("course_id", $id)->get();
        $data = [
            'courses' => $course,
            'sections' => $sections,
            'trainer' => $trainer,
        ];

        return view('admin/default_course_details', ['data' => $data]);
    }


    public function default_settings()
    {

        return view('admin/default_settings');
    }
    public function tests()
    {
        # code...
        $all_quiz = Quiz::where('created_by', 'admin')->get();
        $data = [
            'all_quiz' => $all_quiz,
        ];
        return view('admin/tests', ['data' => $data]);
    }
    public function quizzes()
    {
        # code...
        $all_quiz = Quiz::where('created_by', 'recruiter')->get();
        $data = [
            'all_quiz' => $all_quiz,
        ];
        return view('admin/quizzes', ['data' => $data]);
    }
    public function assesments()
    {
        # code...
        $course = Course::get();

        $data = [
            'courses' => $course,

        ];
        return view('admin/assesments', ['data' => $data]);
    }

    public function all_jobs()
    {
        # code...
        $all_jobs = Job_detail::get();
        $data = [
            'all_jobs' => $all_jobs,
        ];

        return view('admin/all_jobs', ['data' => $data]);
    }
    public function job_applications($id)
    {
        # code...
        $job_application = Job_application::where('job_id', $id)->get();

        $data = [
            'job_application' => $job_application,
        ];
        return view('admin/job_applications', ['data' => $data]);
    }

    public function mini_projects()
    {
        # code...
        $mini_projects = Mini_project::get();
        $data = [
            'mini_projects' => $mini_projects,
        ];

        return view('admin/mini_projects', ['data' => $data]);
    }
    public function create_mini_projects_view()
    {
        # code...
        $course = Course::get();

        $data = [
            'courses' => $course,

        ];
        return view('admin/create_mini_projects', ['data' => $data]);
    }
    public function create_mini_projects(Request $req)
    {
        # code...
        $projects = new Mini_project();

        // dd($req->course_id);
        $projects->course_id = $req->course;
        $projects->project_name = $req->project_name;
        if (!empty($req->file('project_image'))) {
            $extension1 = $req->file('project_image')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $projects->project_image = $req->file('project_image')->move(('uploads'), $filename);
            // }
        } else {
            $projects->project_image = 'project_image';
        }
        // $projects->project_image = $req->course_id;
        $projects->description = $req->description;
        $projects->save();

        session()->put('success', "Mini Project Added!");
        return redirect('admin/mini_projects');
    }

    public function test_details($id)
    {

        $quizzes = Quiz::where('id', $id)->first();
        // $questions = explode(',',$quizzes->questions);
        // foreach ($questions-> as $question) {
        //     # code...

        // }
        $data = [
            'quizzes' => $quizzes,
        ];

        return view('admin/test_details', ['data' => $data]);
    }
    public function view_assesment_single($id)
    {
        $assessments = Assesment::where('course_id', $id)->get();
        $data = [
            'assessments' => $assessments,
        ];
        return view('admin/view_assesment_single', ['data' => $data]);
    }
    public function enrolled_students($id)
    {
        $enrolled_students = Enrolled_course::where('course_id', $id)->get();
        $data = [
            'enrolled_students' => $enrolled_students,
        ];
        return view('admin/enrolled_students', ['data' => $data]);
    }

    public function quiz_details($id)
    {
        $quizzes = Quiz::where('id', $id)->first();
        $data = [
            'quizzes' => $quizzes,
        ];
        return view('admin/quiz_details', ['data' => $data]);
    }

    public function labs()
    {

        $labs = Lab::get();
        $data = [
            'labs' => $labs,
        ];

        return view('admin/labs', ['data' => $data]);
    }

    public function add_lab_view()
    {
        $course = Course::get();

        $data = [
            'courses' => $course,
        ];

        return view('admin/add_lab', ['data' => $data]);
    }


    public function lab($id)
    {
        $lab = Lab::where("id", $id)->first();

        $data = [
            'lab' => $lab,
        ];
        return view('admin/lab', ['data' => $data]);
    }

    public function add_lab(Request $req)
    {
        $labs = new Lab();
        $labs->course_id = $req->course;
        $labs->section_id = $req->section;
        $labs->video_id = $req->video;
        $labs->name = $req->name;
        $labs->code = $req->code;
        $labs->save();

        session()->put('success', "Lab Added!");
        return redirect('admin/labs');
    }
    public function create_task_view()
    {
        $internships = Internship::get();
        $data = [
            'internships' => $internships,
        ];
        return view('admin/create_task', ['data' => $data]);
    }
    public function create_task(Request $req)
    {
        $internship_task = new Internship_task();

        $internship_task->internship_id = $req->internship_id;
        $internship_task->name = $req->name;
        $internship_task->lab_code = $req->lab_code;
        $internship_task->duration = $req->duration;
        $internship_task->description = $req->description;

        $internship_task->save();
        session()->put('success', "Task Added!");
        return redirect('admin/all_internships');
    }
    public function change_password_view()
    {
        $user = User::where('id', session('rexkod_admin_id'))->first();
        $data = [
            'user' => $user,
        ];

        return view('admin/change_password', ['data' => $data]);
    }

    public function change_password(Request $req)
    {
        User::where('id', session('rexkod_admin_id'))
            ->update([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
            ]);

        $user = User::where('id', session('rexkod_admin_id'))->first();

        Session::put('rexkod_admin_name', $user->name);

        session()->put('success', "Settings Updated");
        return redirect('admin/change_password');
    }
    public function add_trainer(Request $req)
    {
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->password = Hash::make($req->password);
        $user->type = 'trainer';
        $user->save();
        session()->put('success', "Trainer Added!");
        return redirect('/admin/trainers');
    }

    public function student_profile($id)
    {
        $all_internships = Internship_application::where('student_id', $id)->get();
        $all_qna = Qna::where('q_created_by', $id)->get();
        $quiz_result = Quiz_result::where('user_id', $id)->get();
        $all_jobs = Job_application::where('student_id', $id)->get();
        $student_details = Student::where('student_id', $id)->first();
        $courses = Enrolled_course::where('student_id', $id)->get();
        $data = [
            'all_internships' => $all_internships,
            'all_qna' => $all_qna,
            'quiz_result' => $quiz_result,
            'all_jobs' => $all_jobs,
            'student_details' => $student_details,
            'courses' => $courses,
        ];

        return view('admin/student_profile', ['data' => $data]);
    }
    public function create_project_task_view()
    {
        $mini_projects = Mini_project::get();
        $data = [
            'mini_projects' => $mini_projects,
        ];
        return view('admin/create_project_task', ['data' => $data]);
    }
    // public function create_project_task(Request $req){
    //     $project_task = new Project_task();

    //     $project_task->project_id = $req->project_id;
    //     $project_task->name = $req->name;
    //     $project_task->lab_code = $req->lab_code;
    //     $project_task->duration = $req->duration;
    //     $project_task->description = $req->description;

    //     $project_task->save();
    //     session()->put('success', "Task Added!");
    //     return redirect('admin/mini_projects');

    // }



    // =================================ebooks======================
    public function all_ebooks()
    {
        $ebooks = Ebook::get();
        $data = [
            'ebooks' => $ebooks,
        ];
        return view('ebook/all_ebooks', ['data' => $data]);
    }
    public function create_ebook_view()
    {
        return view('ebook/create_ebook');
    }
    public function create_ebook(Request $req)
    {

        $ebook = new Ebook();

        $ebook->title = $req->ebook_name;
        $ebook->description = $req->description;
        if (!empty($req->file('ebook_image'))) {
            $extension1 = $req->file('ebook_image')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $ebook->image = $req->file('ebook_image')->move(('uploads'), $filename);
            // }
        } else {
            $ebook->image = 'ebook_image';
        }
        $ebook->save();
        $i = 0;
        foreach ($req->module_title as $title) {
            $ebook_module = new Ebook_module();
            $ebook_module->ebook_id = $ebook->id;
            $ebook_module->module_title = $req->module_title[$i];
            $ebook_module->description = $req->module_desc[$i];
            $ebook_module->save();
            $i++;
        }

        return redirect('admin/all_ebooks');
    }

    public function view_modules($ebook_id)
    {
        $ebook_modules = Ebook_module::where('ebook_id', $ebook_id)->get();
        $data = [
            'ebook_modules' => $ebook_modules,
        ];
        return view('ebook/modules', ['data' => $data]);
    }
    public function add_section_view($module_id)
    {
        $ebook_module = Ebook_module::where('id', $module_id)->first();
        $ebook = Ebook::where('id', $ebook_module->ebook_id)->first();
        $data = [
            'ebook_module' => $ebook_module,
            'ebook' => $ebook,

        ];
        return view('ebook/add_section', ['data' => $data]);
    }

    public function add_section(Request $req, $module_id)
    {
        $ebook_module = Ebook_module::where('id', $module_id)->first();
        $ebook = Ebook::where('id', $ebook_module->ebook_id)->first();
        $i = 0;
        foreach ($req->section_title as $title) {
            $ebook_section = new Ebook_section();
            $ebook_section->ebook_id = $ebook->id;
            $ebook_section->module_id = $ebook_module->id;
            $ebook_section->section_title = $req->section_title[$i];
            $ebook_section->save();
            $i++;
        }

        return redirect('admin/view_modules' . '/' . $ebook->id);
    }

    public function add_elements_view($section_id)
    {
        $ebook_section = Ebook_section::where('id', $section_id)->first();
        $ebook_module = Ebook_module::where('id', $ebook_section->module_id)->first();
        $ebook = Ebook::where('id', $ebook_module->ebook_id)->first();
        $element = Element::get();
        $data = [
            'ebook_section' => $ebook_section,
            'ebook_module' => $ebook_module,
            'ebook' => $ebook,
            'element' => $element,

        ];

        return view('ebook/add_elements', ['data' => $data]);
    }

    public function add_elements(Request $req, $section_id)
    {
        $ebook_section = Ebook_section::where('id', $section_id)->first();
        $ebook_module = Ebook_module::where('id', $ebook_section->module_id)->first();
        $ebook = Ebook::where('id', $ebook_module->ebook_id)->first();
        $element = Element::where('id', $req->element_name)->first();

        $ebook_elements = new Ebook_element();
        $ebook_elements->section_id = $section_id;
        $ebook_elements->element_id = $req->element_name;
        $ebook_elements->element_name = $element->element_name;

        // heading and paragraph
        if ($req->element_name == 1) {
            $ebook_elements->heading_type = $req->heading_type;
        }
        if (isset($req->content)) {
            $ebook_elements->content = $req->content;
        }
        // code
        if (isset($req->code)) {
            $ebook_elements->code = $req->code;
            if (!empty($req->file('memory'))) {
                $extension1 = $req->file('memory')->extension();
                // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
                $filename = Str::random(4) . time() . '.' . $extension1;
                $ebook_elements->memory = $req->file('memory')->move(('uploads'), $filename);
                // }
            } else {
                $ebook_elements->memory = null;
            }
            $ebook_elements->output = $req->output;
        }
        // image
        if (!empty($req->file('image'))) {
            $extension1 = $req->file('image')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $ebook_elements->image = $req->file('image')->move(('uploads'), $filename);
            // }
        } else {
            $ebook_elements->image = null;
        }
        // image-2-option
        if ($req->element_name == 5) {
            $ebook_elements->image_type = $req->image_type;
            if ($req->image_heading) {
                $ebook_elements->image_heading = $req->image_heading;
            }
            $ebook_elements->image_text_1 = $req->image_text_1;
            $ebook_elements->image_desc_1 = $req->image_desc_1;
            $ebook_elements->image_text_2 = $req->image_text_2;
            $ebook_elements->image_desc_2 = $req->image_desc_2;
        }
        // image-3-option
        if ($req->element_name == 6) {
            $ebook_elements->image_type = $req->image_type;
            $ebook_elements->image_heading = $req->image_heading;
            $ebook_elements->image_subheading = $req->image_subheading;
            if ($req->image_subtext_1) {
                $ebook_elements->image_subtext_1 = $req->image_subtext_1;
            }
            if ($req->image_subtext_2) {
                $ebook_elements->image_subtext_2 = $req->image_subtext_2;
            }
            if ($req->image_subtext_3) {
                $ebook_elements->image_subtext_3 = $req->image_subtext_3;
            }
            $ebook_elements->image_text_1 = $req->image_text_1;
            $ebook_elements->image_desc_1 = $req->image_desc_1;
            $ebook_elements->image_text_2 = $req->image_text_2;
            $ebook_elements->image_desc_2 = $req->image_desc_2;
            $ebook_elements->image_text_3 = $req->image_text_3;
            $ebook_elements->image_desc_3 = $req->image_desc_3;
        }
        // image-3-option
        if ($req->element_name == 7) {
            $ebook_elements->image_type = $req->image_type;
            $ebook_elements->image_heading = $req->image_heading;
            if ($req->image_subheading) {
                $ebook_elements->image_subheading = $req->image_subheading;
            }
            if ($req->image_subtext_1) {
                $ebook_elements->image_subtext_1 = $req->image_subtext_1;
            }
            if ($req->image_subtext_2) {
                $ebook_elements->image_subtext_2 = $req->image_subtext_2;
            }
            if ($req->image_subtext_3) {
                $ebook_elements->image_subtext_3 = $req->image_subtext_3;
            }
            if ($req->image_subtext_4) {
                $ebook_elements->image_subtext_4 = $req->image_subtext_4;
            }
            $ebook_elements->image_text_1 = $req->image_text_1;
            $ebook_elements->image_desc_1 = $req->image_desc_1;
            $ebook_elements->image_text_2 = $req->image_text_2;
            $ebook_elements->image_desc_2 = $req->image_desc_2;
            $ebook_elements->image_text_3 = $req->image_text_3;
            $ebook_elements->image_desc_3 = $req->image_desc_3;
            $ebook_elements->image_text_4 = $req->image_text_4;
            $ebook_elements->image_desc_4 = $req->image_desc_4;
        }
        if ($req->element_name == 8) {
            $ebook_elements->image_type = $req->image_type;
            $ebook_elements->image_heading = $req->image_heading;
            if ($req->image_subheading) {
                $ebook_elements->image_subheading = $req->image_subheading;
            }
            if ($req->image_subheading_2) {
                $ebook_elements->image_subheading_2 = $req->image_subheading_2;
            }
            if ($req->image_heading_2) {
                $ebook_elements->image_heading_2 = $req->image_heading_2;
            }
            $ebook_elements->image_text_1 = $req->image_text_1;
            $ebook_elements->image_desc_1 = $req->image_desc_1;
            $ebook_elements->image_text_2 = $req->image_text_2;
            $ebook_elements->image_desc_2 = $req->image_desc_2;
            $ebook_elements->image_text_3 = $req->image_text_3;
            $ebook_elements->image_desc_3 = $req->image_desc_3;
            $ebook_elements->image_text_4 = $req->image_text_4;
            $ebook_elements->image_desc_4 = $req->image_desc_4;
            $ebook_elements->image_text_5 = $req->image_text_5;
            $ebook_elements->image_desc_5 = $req->image_desc_5;
        }
        if ($req->element_name == 9) {
            $ebook_elements->image_type = $req->image_type;
            $ebook_elements->image_heading = $req->image_heading;
            if ($req->image_subheading) {
                $ebook_elements->image_subheading = $req->image_subheading;
            }
            if ($req->image_subheading_2) {
                $ebook_elements->image_subheading_2 = $req->image_subheading_2;
            }
            if ($req->image_heading_2) {
                $ebook_elements->image_heading_2 = $req->image_heading_2;
            }
            $ebook_elements->image_text_1 = $req->image_text_1;
            $ebook_elements->image_desc_1 = $req->image_desc_1;
            $ebook_elements->image_text_2 = $req->image_text_2;
            $ebook_elements->image_desc_2 = $req->image_desc_2;
            $ebook_elements->image_text_3 = $req->image_text_3;
            $ebook_elements->image_desc_3 = $req->image_desc_3;
            $ebook_elements->image_text_4 = $req->image_text_4;
            $ebook_elements->image_desc_4 = $req->image_desc_4;
            $ebook_elements->image_text_5 = $req->image_text_5;
            $ebook_elements->image_desc_5 = $req->image_desc_5;
            $ebook_elements->image_text_6 = $req->image_text_6;
            $ebook_elements->image_desc_6 = $req->image_desc_6;
        }
        if ($req->element_name == 10) {
            $ebook_elements->image_type = $req->image_type;
            $ebook_elements->image_heading = $req->image_heading;

            $ebook_elements->image_text_1 = $req->image_text_1;
            $ebook_elements->image_desc_1 = $req->image_desc_1;
            $ebook_elements->image_text_2 = $req->image_text_2;
            $ebook_elements->image_desc_2 = $req->image_desc_2;
            $ebook_elements->image_text_3 = $req->image_text_3;
            $ebook_elements->image_desc_3 = $req->image_desc_3;
            $ebook_elements->image_text_4 = $req->image_text_4;
            $ebook_elements->image_desc_4 = $req->image_desc_4;
            $ebook_elements->image_text_5 = $req->image_text_5;
            $ebook_elements->image_desc_5 = $req->image_desc_5;
            $ebook_elements->image_text_6 = $req->image_text_6;
            $ebook_elements->image_desc_6 = $req->image_desc_6;
            $ebook_elements->image_text_7 = $req->image_text_7;
            $ebook_elements->image_desc_7 = $req->image_desc_7;
        }
        if ($req->element_name == 11) {
            $ebook_elements->image_type = $req->image_type;
            $ebook_elements->image_heading = $req->image_heading;
            if ($req->image_heading_2) {
                $ebook_elements->image_heading_2 = $req->image_heading_2;
            }

            $ebook_elements->image_text_1 = $req->image_text_1;
            $ebook_elements->image_desc_1 = $req->image_desc_1;
            $ebook_elements->image_text_2 = $req->image_text_2;
            $ebook_elements->image_desc_2 = $req->image_desc_2;
            $ebook_elements->image_text_3 = $req->image_text_3;
            $ebook_elements->image_desc_3 = $req->image_desc_3;
            $ebook_elements->image_text_4 = $req->image_text_4;
            $ebook_elements->image_desc_4 = $req->image_desc_4;
            $ebook_elements->image_text_5 = $req->image_text_5;
            $ebook_elements->image_desc_5 = $req->image_desc_5;
            $ebook_elements->image_text_6 = $req->image_text_6;
            $ebook_elements->image_desc_6 = $req->image_desc_6;
            $ebook_elements->image_text_7 = $req->image_text_7;
            $ebook_elements->image_desc_7 = $req->image_desc_7;
            $ebook_elements->image_text_8 = $req->image_text_8;
            $ebook_elements->image_desc_8 = $req->image_desc_8;
        }
        if ($req->element_name == 13) {
            $ebook_elements->image_type = $req->image_type;
            $ebook_elements->image_heading = $req->image_heading;

            $ebook_elements->image_text_1 = $req->image_text_1;
            $ebook_elements->image_desc_1 = $req->image_desc_1;
            $ebook_elements->image_text_2 = $req->image_text_2;
            $ebook_elements->image_desc_2 = $req->image_desc_2;
            $ebook_elements->image_text_3 = $req->image_text_3;
            $ebook_elements->image_desc_3 = $req->image_desc_3;
            $ebook_elements->image_text_4 = $req->image_text_4;
            $ebook_elements->image_desc_4 = $req->image_desc_4;
            $ebook_elements->image_text_5 = $req->image_text_5;
            $ebook_elements->image_desc_5 = $req->image_desc_5;
            $ebook_elements->image_text_6 = $req->image_text_6;
            $ebook_elements->image_desc_6 = $req->image_desc_6;
            $ebook_elements->image_text_7 = $req->image_text_7;
            $ebook_elements->image_desc_7 = $req->image_desc_7;
            $ebook_elements->image_text_8 = $req->image_text_8;
            $ebook_elements->image_desc_8 = $req->image_desc_8;
            $ebook_elements->image_text_9 = $req->image_text_9;
            $ebook_elements->image_desc_9 = $req->image_desc_9;
            $ebook_elements->image_text_10 = $req->image_text_10;
            $ebook_elements->image_desc_10 = $req->image_desc_10;
        }
        if ($req->element_name == 14) {
            $ebook_elements->list_type = $req->list_type;
            $ebook_elements->list_heading = $req->list_heading;
            $ebook_elements->list_points = implode(',', $req->list_points);
        }
        if ($req->element_name == 17) {
            $jsonData = array(
                'columns' => $req->columns,
                'rows' => $req->rows,
                'data' => $req->data
            );
            $table_data = json_encode($jsonData);
            $ebook_elements->table_data = $table_data;
        }
        if ($req->element_name == 18) {

            if (!empty($req->file('gif_file'))) {
                $extension1 = $req->file('gif_file')->extension();
                // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
                $filename = Str::random(4) . time() . '.' . $extension1;
                $ebook_elements->image = $req->file('gif_file')->move(('uploads'), $filename);
                // }
            } else {
                $ebook_elements->image = null;
            }
        }
        if ($req->element_name == 19) {
            $ebook_elements->example_text = implode(',', $req->example_text);
            $ebook_elements->example_description = implode(',', $req->example_description);
            $ebook_elements->practice_description = implode(',', $req->practice_description);
        }
        if ($req->element_name == 20) {
            $example_gifs = [];
            // foreach($req->example_gif as $file){
            //     if (!empty($file->file('gif_file'))) {
            //         $extension1 = $file->file('gif_file')->extension();
            //         // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            //         $filename = Str::random(4) . time() . '.' . $extension1;
            //         $example_gif[] = $file->file('gif_file')->move(('uploads'), $filename);
            //     // }
            //     } else {
            //         $example_gif[] = null;
            //     }
            // }
            foreach ($req->example_gif as $example_gif) {
                if (!empty($example_gif)) {
                    $extension = $example_gif->getClientOriginalExtension();
                    $filename = Str::random(4) . time() . '.' . $extension;
                    $path = $example_gif->move('uploads', $filename);
                    $example_gifs[] = 'uploads/' . $filename;
                } else {
                    $example_gifs[] = null;
                }
            }
            $ebook_elements->example_description = implode(',', $example_gifs);
            $ebook_elements->practice_description = implode(',', $req->practice_description);
        }
        if ($req->element_name == 21) {
            $ebook_elements->example_image_text = implode(',', $req->example_image_text);
            $ebook_elements->example_description = implode(',', $req->example_description);
            $ebook_elements->practice_description = implode(',', $req->practice_description);
        }
        if ($req->element_name == 22) {
            $ebook_elements->button_text = implode('#@#', $req->button_text);
        }
        if ($req->element_name == 23) {
            $ebook_elements->button_text = implode('#@#', $req->button_text);
        }
        if ($req->element_name == 24) {
            $ebook_elements->single_button_type = $req->single_button_type;
        }
        $ebook_elements->save();

        return redirect('admin/add_elements' . '/' . $section_id);
    }


    public function preview_ebook($ebook_id)
    {
        $ebook = Ebook::where('id', $ebook_id)->first();
        $ebook_module = Ebook_module::where('ebook_id', $ebook->id)->get();

        $data = [
            'ebook_module' => $ebook_module,
            'ebook' => $ebook,

        ];

        return view('ebook/preview_ebook', ['data' => $data]);
    }


    // =================================ebook ends======================

    // =================================project Reports======================

    public function project_reports()
    {
        $project_reports = Project_report::get();
        $data = [
            'project_reports' => $project_reports,
        ];
        return view('project_report/project_reports', ['data' => $data]);
    }
    public function create_project_reports_view()
    {
        return view('project_report/create_project_reports');
    }
    public function create_project_report(Request $req)
    {

        $project_report = new Project_report();

        $project_report->title = $req->name;
        $project_report->description = $req->description;
        if (!empty($req->file('image'))) {
            $extension1 = $req->file('image')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $project_report->image = $req->file('image')->move(('uploads'), $filename);
            // }
        } else {
            $project_report->image = null;
        }
        $project_report->save();
        $i = 0;
        foreach ($req->module_title as $title) {
            $project_report_module = new Project_report_modules();
            $project_report_module->project_report_id = $project_report->id;
            $project_report_module->module_title = $req->module_title[$i];
            $project_report_module->description = $req->module_desc[$i];
            $project_report_module->save();
            $i++;
        }

        return redirect('admin/project_reports');
    }

    public function project_report_modules($project_report_id)
    {
        $project_report_modules = Project_report_modules::where('project_report_id', $project_report_id)->get();
        $data = [
            'project_report_modules' => $project_report_modules,
        ];
        return view('project_report/modules', ['data' => $data]);
    }

    public function preview_project_report($project_report_id)
    {
        $project_report = Project_report::where('id', $project_report_id)->first();
        $project_report_module = Project_report_modules::where('project_report_id', $project_report->id)->get();

        $data = [
            'project_report_module' => $project_report_module,
            'project_report' => $project_report,

        ];

        return view('project_report/preview_project_report', ['data' => $data]);
    }

    public function add_project_report_elements_view($module_id)
    {
        $project_report_module = Project_report_modules::where('id', $module_id)->first();
        $project_report = Project_report::where('id', $project_report_module->project_report_id)->first();
        $element = Project_report_element_types::get();
        $data = [
            'project_report_module' => $project_report_module,
            'project_report' => $project_report,
            'element' => $element,

        ];

        return view('project_report/add_elements', ['data' => $data]);
    }
    public function add_project_report_elements(Request $req, $module_id)
    {
        $ebook_elements = new Project_report_element();
        $ebook_elements->module_id = $module_id;
        $ebook_elements->element_id = $req->element_name;
        $ebook_elements->content = $req->content;


        $ebook_elements->save();
        return redirect('admin/add_project_report_elements' . '/' . $module_id);
    }

    // =================================use cases======================

    public function use_cases()
    {
        $use_cases = Use_case::get();
        $data = [
            'use_cases' => $use_cases,
        ];
        return view('use_case/use_cases', ['data' => $data]);
    }
    public function create_use_case_view()
    {
        return view('use_case/create_use_case');
    }
    public function create_use_case(Request $req)
    {

        $use_case = new Use_case();

        $use_case->title = $req->name;
        $use_case->description = $req->description;
        if (!empty($req->file('image'))) {
            $extension1 = $req->file('image')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $use_case->image = $req->file('image')->move(('uploads'), $filename);
            // }
        } else {
            $use_case->image = null;
        }
        $use_case->save();
        $i = 0;
        foreach ($req->module_title as $title) {
            $use_case_module = new Use_case_modules();
            $use_case_module->use_case_id = $use_case->id;
            $use_case_module->module_title = $req->module_title[$i];
            $use_case_module->description = $req->module_desc[$i];
            $use_case_module->save();
            $i++;
        }

        return redirect('admin/use_cases');
    }

    public function use_case_modules($use_case_id)
    {
        $use_case_modules = Use_case_modules::where('use_case_id', $use_case_id)->get();
        $data = [
            'use_case_modules' => $use_case_modules,
        ];
        return view('use_case/modules', ['data' => $data]);
    }

    public function preview_use_case($use_case_id)
    {
        $use_case = Use_case::where('id', $use_case_id)->first();
        $use_case_module = Use_case_modules::where('use_case_id', $use_case->id)->get();

        $data = [
            'use_case_module' => $use_case_module,
            'use_case' => $use_case,

        ];

        return view('use_case/preview_use_case', ['data' => $data]);
    }

    public function add_use_case_elements_view($module_id)
    {
        $use_case_module = Use_case_modules::where('id', $module_id)->first();
        $use_case = Use_case::where('id', $use_case_module->use_case_id)->first();
        $element = Use_case_element_types::get();
        $data = [
            'use_case_module' => $use_case_module,
            'use_case' => $use_case,
            'element' => $element,

        ];

        return view('use_case/add_elements', ['data' => $data]);
    }
    public function add_use_case_elements(Request $req, $module_id)
    {
        $use_case_elements = new Use_case_element();
        $use_case_elements->module_id = $module_id;
        $use_case_elements->element_id = $req->element_name;
        $use_case_elements->content = $req->content;
        if ($req->element_name == 3) {
            $use_case_elements->list_type = $req->list_type;
            // $use_case_elements->list_heading = $req->list_heading;
            $use_case_elements->list_points = implode('#@#', $req->list_points);
        }
        if ($req->element_name == 4) {
            $use_case_elements->list_type = $req->list_type;
            // $use_case_elements->list_heading = $req->list_heading;
            $use_case_elements->list_points = implode('#@#', $req->list_points);
            $use_case_elements->list_description = implode('#@#', $req->list_description);
        }
        if ($req->element_name == 5) {
            $use_case_elements->appendices_heading = implode('#@#', $req->appendices_heading);
            // $use_case_elements->list_heading = $req->list_heading;
            $use_case_elements->appendices_sub_heading = implode('#@#', $req->appendices_sub_heading);
            $use_case_elements->appendices_desc = implode('#@#', $req->appendices_desc);
        }

        $use_case_elements->save();
        return redirect('admin/add_use_case_elements' . '/' . $module_id);
    }


    // =================-----------school-----------===================

    public function add_chapters_view()
    {
        $subjects = School_subject::get();
        $classes = Classes::get();

        return view('admin.add_chapters', ['subjects' => $subjects, 'classes' => $classes]);
    }

    public function add_chapters(Request $req)
    {
        $rows = $req->no_of_rows;
        for ($i = 0; $i < $rows; $i++) {
            $chapter_name = 'chapter_name' . $i;
            $chapter = new Chapter();
            $chapter->class = $req->class;
            $chapter->subject = $req->subject;
            $chapter->chapter_name = $chapter_name;
            $chapter->save();
        }
        return redirect('/admin/add_chapters');
    }

    public function add_chapter_videos_view()
    {
        $subjects = School_subject::get();
        $classes = Classes::get();

        return view('admin.add_chapter_videos', ['subjects' => $subjects, 'classes' => $classes]);
    }
    public function add_chapter_videos(Request $req)
    {

        foreach ($req->video_file as $video_file) {
            if (!empty($video_file)) {
                $extension = $video_file->getClientOriginalExtension();
                $filename = Str::random(4) . time() . '.' . $extension;
                $path = $video_file->move('uploads', $filename);
                $video_files[] = 'uploads/' . $filename;
            } else {
                $video_files[] = 'video_file';
            }
        }

        $rows = $req->no_of_rows;
        for ($i = 0; $i < $rows; $i++) {
            $videos = new Chapter_video();
            $videos->chapter_id = $req->chapter;
            $videos->video_name = $req->video_name[$i];
            $videos->video_file = $video_files[$i];
            $videos->save();
        }

        session()->put('success', "Video Added!");
        return redirect('admin/add_chapter_videos');
    }
    public function get_chapters(Request $req)
    {
        $chapters = Chapter::where('subject', $req->subject_id)->get();
        return response()->json($chapters);
    }

    // public function get_subjects(Request $req){
    //     $subjects = School_subject::where('class_id', $req->class_id)->get();
    //     return response()->json($subjects);
    // }

    public function get_chapter_videos(Request $req)
    {
        $subjects = Chapter_video::where('chapter_id', $req->chapter_id)->get();
        return response()->json($subjects);
    }

    public function school_courses()
    {
        $subjects = School_subject::get();
        $classes = Classes::get();

        return view('admin.school_courses', ['subjects' => $subjects, 'classes' => $classes]);
    }

    public function add_school_subject_view()
    {
        $result = School_subject::get();
        $classes = Classes::get();
        $data = [
            'subjects' => $result,
            'classes' => $classes
        ];
        return view('admin.add_school_subject', ['data' => $data]);
    }
    public function add_school_subject(Request $req)
    {
        $subject = new School_subject();
        $subject->subject_name = $req->subject;
        $subject->class_id = $req->class;
        if (!empty($req->file('subject_image'))) {
            $extension1 = $req->file('subject_image')->extension();
            if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
                $filename = Str::random(4) . time() . '.' . $extension1;
                $subject->subject_image = $req->file('subject_image')->move(('uploads'), $filename);
            } else {
                session()->put('failed', "File not supported. Only jpg,jpeg,png");
                return redirect('/admin/add_school_subject');
            }
        } else {
            $subject->subject_image = null;
        }
        $subject->save();

        session()->put('success', "Subject Added!");
        return redirect('/admin/school_courses');
    }

    public function school_assesments()
    {
        $subjects = School_subject::get();


        return view('admin.school_assesments', ['subjects' => $subjects]);
    }

    public function create_school_assesments_view()
    {

        $classes = Classes::get();

        return view('admin/create_school_assesments', ['classes' => $classes]);
    }
    public function create_school_assesments(Request $req)
    {
        $assesment = new School_assesment();

        $assesment->class_id = $req->class;
        $assesment->subject_id = $req->subject;
        $assesment->chapter_id = $req->chapter;
        $assesment->video_id = $req->video;

        if (!empty($req->code)) {
            $assesment->question_code = $req->code;
        }
        if (!empty($req->file('question_image'))) {
            $extension1 = $req->file('question_image')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $assesment->question_image = $req->file('question_image')->move(('uploads'), $filename);
            // }
        } else {
            $assesment->question_image = null;
        }
        $assesment->question = $req->question;
        $assesment->option1 = $req->option1;
        $assesment->option2 = $req->option2;
        $assesment->option3 = $req->option3;
        $assesment->option4 = $req->option4;
        $assesment->answer = $req->answer;


        if (!empty($req->file('option1_img'))) {
            $extension1 = $req->file('option1_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $assesment->option1_img = $req->file('option1_img')->move(('uploads'), $filename);
            // }
        } else {
            $assesment->option1_img = null;
        }
        if (!empty($req->file('option2_img'))) {
            $extension1 = $req->file('option2_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $assesment->option2_img = $req->file('option2_img')->move(('uploads'), $filename);
            // }
        } else {
            $assesment->option2_img = null;
        }

        if (!empty($req->file('option3_img'))) {
            $extension1 = $req->file('option3_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $assesment->option3_img = $req->file('option3_img')->move(('uploads'), $filename);
            // }
        } else {
            $assesment->option3_img = null;
        }
        if (!empty($req->file('option4_img'))) {
            $extension1 = $req->file('option4_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $assesment->option4_img = $req->file('option4_img')->move(('uploads'), $filename);
            // }
        } else {
            $assesment->option4_img = null;
        }
        $assesment->save();
        session()->put('success', "Assesment Added!");
        return redirect('admin/create_school_assesments');
    }

    public function view_school_assesments($id)
    {
        // $assessments = School_assesment::where('course_id', $id)->get();
        $assessments = School_assesment::with('class', 'subject', 'chapter', 'video')->where('subject_id', $id)->get();

        $data = [
            'assessments' => $assessments,
        ];
        return view('admin/view_school_assesments', ['data' => $data]);
    }

    // =============================-------------school subadmin--------------===============================
    public function schools()
    {
        $school = School::get();
        return view('admin.schools', ['school' => $school]);
    }

    public function add_school_view()
    {

        return view('admin.add_school');
    }
    public function all_students()
    {
        // $students = School_student::get();
        $students = School_student::with('school', 'class')->get();

        // dd($students);
        return view('sub_admin.all_students', ['students' => $students]);
    }

    public function add_student_view()
    {
        $school = School::get();
        $classes = Classes::get();

        return view('sub_admin.add_student', ['school' => $school, 'classes' => $classes]);
    }

    public function add_student(Request $req)
    {
        $auth = new User();
        $auth->name = $req->name;
        $auth->type = 'school_student';
        $auth->password = Hash::make('abc123');
        $auth->save();

        // dd($req->class);
        $student = new School_student();
        $student->auth_id = $auth->id;
        $student->name = $req->name;
        $student->class_id = $req->class;
        $student->school_id = $req->school;
        $student->section_id = $req->section;
        $student->save();


        return redirect('/sub_admin/add_student');
    }

    public function add_school_elements(Request $req)
    {

        $auth = new User();
        $auth->name = $req->auth_name;
        $auth->phone = $req->auth_contact_number;
        $auth->email = $req->auth_email;
        $auth->type = 'sub_admin';
        $auth->password = Hash::make($req->password);
        $auth->save();

        // dd(123);
        $school = new School();

        $school->auth_id = $auth->id;

        if (!empty($req->file('school_image'))) {
            $extension1 = $req->file('school_image')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $school->school_image = $req->file('school_image')->move(('uploads'), $filename);
            // }
        } else {
            $school->school_image = null;
        }
        if (!empty($req->file('signatory_aadhar'))) {
            $extension1 = $req->file('signatory_aadhar')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $school->signatory_aadhar = $req->file('signatory_aadhar')->move(('uploads'), $filename);
            // }
        } else {
            $school->signatory_aadhar = null;
        }
        if (!empty($req->file('auth_image'))) {
            $extension1 = $req->file('auth_image')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $school->auth_image = $req->file('auth_image')->move(('uploads'), $filename);
            // }
        } else {
            $school->auth_image = null;
        }
        if (!empty($req->file('mou'))) {
            $extension1 = $req->file('mou')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $school->mou = $req->file('mou')->move(('uploads'), $filename);
            // }
        } else {
            $school->mou = null;
        }
        if (!empty($req->file('nda'))) {
            $extension1 = $req->file('nda')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $school->nda = $req->file('nda')->move(('uploads'), $filename);
            // }
        } else {
            $school->nda = null;
        }
        if (!empty($req->file('declaration_form'))) {
            $extension1 = $req->file('declaration_form')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $school->declaration_form = $req->file('declaration_form')->move(('uploads'), $filename);
            // }
        } else {
            $school->declaration_form = null;
        }
        if (!empty($req->file('other_document'))) {
            $extension1 = $req->file('other_document')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $school->other_document = $req->file('other_document')->move(('uploads'), $filename);
            // }
        } else {
            $school->other_document = null;
        }
        $school->school_name = $req->school_name;
        $school->school_contact_no = $req->school_contact_no;
        $school->school_address = $req->school_address;
        $school->school_type = $req->school_type;
        $school->year_of_establishment = $req->year_of_establishment;

        if (isset($req->recognized_by)) {
            $recognized_by = implode(',', $req->recognized_by);
        } else {
            $recognized_by = null;
        }
        $school->recognized_by = $recognized_by;

        $school->school_pin_code = $req->school_pin_code;
        $school->school_city = $req->school_city;
        $school->school_state = $req->school_state;
        $school->legal_name = $req->legal_name;
        $school->student_teacher_ratio = $req->student_teacher_ratio;
        $school->accreditation_no = $req->accreditation_no;
        $school->accredited_by = $req->accredited_by;
        $school->registered_address = $req->registered_address;
        if (isset($req->facility)) {
            $facility = implode(',', $req->facility);
        } else {
            $facility = null;
        }
        $school->facility = $facility;
        $school->facility_info = $req->facility_info;

        // $facility_images = [];
        // foreach ($req->facility_images as $facility_images) {
        //     // dd($facility_images);
        //     if (!empty($facility_images)) {
        //         $extension = $facility_images->getClientOriginalExtension();
        //         $filename = Str::random(4) . time() . '.' . $extension;
        //         $path = $facility_images->move('uploads', $filename);
        //         $facility_images[] = 'uploads/'.$filename;
        //     } else {
        //         $facility_images[] = null;
        //     }
        // }
        // $school->facility_images = implode(',', $facility_images);
        $school->extra_curricular_info = $req->extra_curricular_info;
        // $extra_curricular_images=[];
        // foreach ($req->extra_curricular_images as $extra_curricular_images) {
        //     if (!empty($extra_curricular_images)) {
        //         $extension = $extra_curricular_images->getClientOriginalExtension();
        //         $filename = Str::random(4) . time() . '.' . $extension;
        //         $path = $extra_curricular_images->move('uploads', $filename);
        //         $extra_curricular_images[] = 'uploads/'.$filename;
        //     } else {
        //         $extra_curricular_images[] = null;
        //     }
        // }
        // $school->extra_curricular_images = implode(',', $extra_curricular_images);

        $school->academic_info = $req->academic_info;
        // $academic_images=[];
        // foreach ($req->academic_images as $academic_images) {
        //     if (!empty($academic_images)) {
        //         $extension = $academic_images->getClientOriginalExtension();
        //         $filename = Str::random(4) . time() . '.' . $extension;
        //         $path = $academic_images->move('uploads', $filename);
        //         $academic_images[] = 'uploads/'.$filename;
        //     } else {
        //         $academic_images[] = null;
        //     }
        // }
        // $school->academic_images = implode(',', $academic_images);
        $school->website_link = $req->website_link;
        if (isset($req->website_check)) {
            $website_check = 1;
        } else {
            $website_check = 0;
        }
        $school->website_check = $req->website_check;
        $school->school_info = $req->school_info;
        $school->auth_name = $req->auth_name;
        $school->auth_designation = $req->auth_designation;
        $school->auth_aadhar_no = $req->auth_aadhar_no;
        $school->auth_email = $req->auth_email;
        $school->auth_contact_number = $req->auth_contact_number;
        $school->auth_contact_person = $req->auth_contact_person;
        $school->contact_person_designation = $req->contact_person_designation;
        $school->contact_person_details = $req->contact_person_details;
        $school->bank_name = $req->bank_name;
        $school->account_no = $req->account_no;
        $school->re_account_no = $req->re_account_no;
        $school->school_name_as_per_bank = $req->school_name_as_per_bank;
        if (!empty($req->file('cancelled_cheque'))) {
            $extension1 = $req->file('cancelled_cheque')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $school->cancelled_cheque = $req->file('cancelled_cheque')->move(('uploads'), $filename);
            // }
        } else {
            $school->cancelled_cheque = null;
        }
        $school->ifsc = $req->ifsc;
        $school->branch_name = $req->branch_name;
        $school->mode_of_admission = $req->mode_of_admission;
        $school->how_to_apply = $req->how_to_apply;
        $school->scholastic = $req->scholastic;
        $school->scholastic_info = $req->scholastic_info;
        $school->coscholastic = $req->coscholastic;
        $school->coscholastic_info = $req->coscholastic_info;
        $school->achievement_info = $req->achievement_info;

        $school->mode_of_admission = $req->mode_of_admission;
        $school->mode_of_admission = $req->mode_of_admission;
        // $achievement_images=[];
        // foreach ($req->achievement_images as $achievement_images) {
        //     if (!empty($achievement_images)) {
        //         $extension = $achievement_images->getClientOriginalExtension();
        //         $filename = Str::random(4) . time() . '.' . $extension;
        //         $path = $achievement_images->move('uploads', $filename);
        //         $achievement_images[] = 'uploads/'.$filename;
        //     } else {
        //         $achievement_images[] = null;
        //     }
        // }
        // $school->achievement_images = implode(',', $achievement_images);
        $school->admission_fee = $req->admission_fee;
        if ($req->has("review_academic")) {
            $review_academic = 0;
        } else {
            $review_academic = 1;
        }
        $school->review_academic = $review_academic;
        if (empty($req->review_faculty)) {
            $review_faculty = 0;
        } else {
            $review_faculty = 1;
        }
        $school->review_faculty = $review_faculty;

        if (empty($req->review_infra)) {
            $review_infra = 0;
        } else {
            $review_infra = 1;
        }
        $school->review_infra = $review_infra;

        if (empty($req->review_non_academic)) {
            $review_non_academic = 0;
        } else {
            $review_non_academic = 1;
        }
        // $school->review_non_academic = $review_non_academic;
        if (empty($req->review_school)) {
            $review_school = 0;
        } else {
            $review_school = 1;
        }
        $school->review_school = $review_school;
        // $faculty_images=[];

        // foreach ($req->faculty_images as $faculty_images) {
        //     if (!empty($faculty_images)) {
        //         $extension = $faculty_images->getClientOriginalExtension();
        //         $filename = Str::random(4) . time() . '.' . $extension;
        //         $path = $faculty_images->move('uploads', $filename);
        //         $faculty_images[] = 'uploads/'.$filename;
        //     } else {
        //         $faculty_images[] = null;
        //     }
        // }
        // $school->faculty_images = implode(',', $faculty_images);
        // $gallery=[];
        // foreach ($req->gallery as $gallery) {
        //     if (!empty($gallery)) {
        //         $extension = $gallery->getClientOriginalExtension();
        //         $filename = Str::random(4) . time() . '.' . $extension;
        //         $path = $gallery->move('uploads', $filename);
        //         $gallery[] = 'uploads/'.$filename;
        //     } else {
        //         $gallery[] = null;
        //     }
        // }
        // $school->gallery = implode(',', $gallery);

        $school->faculty_info = $req->faculty_info;

        if (isset($req->question_faq)) {
            $question_faq = implode(',', $req->question_faq);
        } else {
            $question_faq = null;
        }
        $school->question_faq = $question_faq;

        if (isset($req->answer_faq)) {
            $answer_faq = implode(',', $req->answer_faq);
        } else {
            $answer_faq = null;
        }
        $school->answer_faq = $answer_faq;
        $school->package_name = $req->package_name;
        $school->package_cost = $req->package_cost;
        $school->package_start_date = $req->package_start_date;
        $school->package_end_date = $req->package_end_date;
        $school->package_info = $req->package_info;
        $school->package_validity = $req->package_validity;
        $school->package_other_detail = $req->package_other_detail;

        if (isset($req->package_renewal)) {
            $package_renewal = 1;
        } else {
            $package_renewal = 0;
        }
        $school->package_renewal = $package_renewal;


        if (!empty($req->file('package_invoice'))) {
            $extension1 = $req->file('package_invoice')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $school->package_invoice = $req->file('package_invoice')->move(('uploads'), $filename);
            // }
        } else {
            $school->package_invoice = null;
        }
        $school->category = $req->category;

        $school->save();



        return redirect('/admin/schools');
    }


    public function all_teachers()
    {
        // $teachers = Teacher::get();
        $teachers = Teacher::with('user')->get();

        return view('sub_admin.all_teachers', ['teachers' => $teachers]);
    }
    public function add_teacher_view()
    {
        $subjects = School_subject::get();
        $classes = Classes::get();

        return view('sub_admin.add_teacher', ['subjects' => $subjects, 'classes' => $classes]);
    }
    public function add_teacher(Request $req)
    {
        $auth = new User();
        $auth->name = $req->name;
        $auth->phone = $req->number;
        $auth->email = $req->email;
        $auth->type = 'teacher';
        $auth->password = Hash::make($req->password);
        $auth->save();


        $classArray = $req->input('class');
        $subjectArray = $req->input('subject');

        // Combine class and subject data into an array
        $dataToStore = [];

        for ($i = 0; $i < count($classArray); $i++) {
            $dataToStore[] = [
                'class_id' => $classArray[$i],
                'subject_id' => $subjectArray[$i],
            ];
        }

        // Convert the array to JSON
        $jsonData = json_encode($dataToStore);
        // dd($jsonData);
        $teacher = new Teacher();
        $teacher->class_and_subject = $jsonData;
        $teacher->auth_id = $auth->id;
        $teacher->save();

        return view('sub_admin.all_teachers');
    }
    public function getSubjects($class_id)
    {
        $subjects = School_subject::where('class_id', $class_id)->get();
        return response()->json($subjects);
    }


    public function school_tests()
    {
        # code...
        $all_test = School_test::with('subject')->get();

        $data = [
            'all_test' => $all_test,
        ];
        return view('admin/school_tests', ['data' => $data]);
    }
    public function add_school_questions_view()
    {
        $classes = Classes::get();

        return view('admin/add_school_questions', ['classes' => $classes]);
    }
    public function add_school_questions(Request $req)
    {
        $question = new School_test_master();
        $question->class_id = $req->class;
        $question->subject_id = $req->subject;

        if (!empty($req->code)) {
            $question->question_code = $req->code;
        }
        if (!empty($req->file('question_image'))) {
            $extension1 = $req->file('question_image')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $question->question_image = $req->file('question_image')->move(('uploads'), $filename);
            // }
        } else {
            $question->question_image = null;
        }
        $question->question = $req->question;
        $question->option1 = $req->option1;
        $question->option2 = $req->option2;
        $question->option3 = $req->option3;
        $question->option4 = $req->option4;
        $question->answer = $req->answer;

        if (!empty($req->file('option1_img'))) {
            $extension1 = $req->file('option1_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $question->option1_img = $req->file('option1_img')->move(('uploads'), $filename);
            // }
        } else {
            $question->option1_img = null;
        }
        if (!empty($req->file('option2_img'))) {
            $extension1 = $req->file('option2_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $question->option2_img = $req->file('option2_img')->move(('uploads'), $filename);
            // }
        } else {
            $question->option2_img = null;
        }

        if (!empty($req->file('option3_img'))) {
            $extension1 = $req->file('option3_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $question->option3_img = $req->file('option3_img')->move(('uploads'), $filename);
            // }
        } else {
            $question->option3_img = null;
        }
        if (!empty($req->file('option4_img'))) {
            $extension1 = $req->file('option4_img')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $question->option4_img = $req->file('option4_img')->move(('uploads'), $filename);
            // }
        } else {
            $question->option4_img = null;
        }
        $question->save();

        session()->put('success', "Question Added!");
        return redirect('admin/add_school_questions');
    }
    public function create_school_test_view()
    {
        $classes = Classes::get();

        return view('admin/create_school_test', ['classes' => $classes]);
    }

    public function create_school_test(Request $req)
    {
        $test = new School_test();
        $test->subject_id = $req->subject;
        $test->class_id = $req->class;

        $test->title = $req->title;
        if (!empty($req->file('quiz_photo'))) {
            $extension1 = $req->file('quiz_photo')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $test->image = $req->file('quiz_photo')->move(('uploads'), $filename);
            // }
        } else {
            $test->image = null;
        }
        $test->description = $req->description;
        $test->save();

        session()->put('success', "Test Added!");
        return redirect('admin/add_questions_to_test_view/' . $test->id);
    }

    public function add_questions_to_test_view($test_id)
    {

        $test = School_test::find($test_id);
        $subject = $test->subject_id;
        $questions = explode(',', $test->questions);
        $test_masters = School_test_master::where('subject_id', $subject)->where('class_id', $test->class_id)->get();

        return view('admin/add_questions_to_test', ['test_id' => $test_id, 'test_masters' => $test_masters, 'questions' => $questions, 'subject' => $subject]);
    }

    public function add_questions_to_test($test_id, $que_id)
    {

        $last_quiz = School_test::find($test_id);
        $questions = $last_quiz->questions;
        if ($questions == null) {
            $questions = $que_id;
        } else {
            $questions = $questions . ",$que_id";
        }

        School_test::where('id', $last_quiz->id)->update([
            'questions' => $questions,
        ]);

        return redirect('admin/add_questions_to_test_view/' . $test_id);
    }

    public function delete_question_from_test($test_id, $que_id)
    {
        $last_quiz = School_test::find($test_id);
        $questions = explode(',', $last_quiz->questions);
        $new_question = 0;
        foreach ($questions as $question) {
            if ((int)$question != $que_id) {
                $value[] = $question;
                $new_question = implode(',', $value);
            } else {
                continue;
            }
        }

        // dd($new_question);
        School_test::where('id', $last_quiz->id)->update([
            'questions' => $new_question,
        ]);

        session()->put('success', "Question Added to Test!");
        return redirect('admin/add_questions_to_test_view/' . $test_id);
    }

    public function school_test_results($id)
    {
        // $result=School_test_result::where('test_id', $id)->get();
        $result = School_test_result::with('test', 'user')->where('test_id', $id)->get();

        $data = [
            'result' => $result,
        ];

        return view('admin/school_test_results', ['data' => $data]);
    }

    public function school_test_details($id)
    {

        $test = School_test::find($id);
        $questions = explode(',', $test->questions);
        $new_question = 0;
        $test_masters = School_test_master::whereIn('id', $questions)->get();

        return view('admin/school_test_details', ['test' => $test, 'test_masters' => $test_masters]);
    }

    public function school_test_master(Request $req)
    {
        $classes = Classes::get();
        if ($req->subject) {
            $quiz_master = School_test_master::where('subject_id', $req->subject)->get();
        } else {
            $quiz_master = School_test_master::get();
        }
        $data = [
            'question' => $quiz_master,
        ];

        return view('admin/school_test_master', ['data' => $data, 'classes' => $classes]);
    }

    public function school_mini_projects()
    {
        # code...
        $mini_projects = School_mini_project::get();

        return view('admin/school_mini_projects', ['mini_projects' => $mini_projects]);
    }

    public function create_school_projects_view()
    {
        # code...
        $classes = Classes::get();

        return view('admin/create_school_projects', ['classes' => $classes]);
    }
    public function create_school_projects(Request $req)
    {
        # code...
        $projects = new School_mini_project();
        $projects->subject_id = $req->subject;
        $projects->project_name = $req->project_name;
        if (!empty($req->file('project_image'))) {
            $extension1 = $req->file('project_image')->extension();
            // if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
            $filename = Str::random(4) . time() . '.' . $extension1;
            $projects->project_image = $req->file('project_image')->move(('uploads'), $filename);
            // }
        } else {
            $projects->project_image = null;
        }
        $projects->description = $req->description;
        $projects->save();

        session()->put('success', "Mini Project Added!");
        return redirect('admin/school_mini_projects');
    }

    public function create_school_project_task_view()
    {
        $mini_projects = School_mini_project::get();
        $data = [
            'mini_projects' => $mini_projects,
        ];
        return view('admin/create_school_project_task', ['data' => $data]);
    }
    public function create_school_project_task(Request $req)
    {
        $project_task = new School_project_task();

        $project_task->project_id = $req->project_id;
        $project_task->name = $req->name;
        $project_task->lab_code = $req->lab_code;
        $project_task->duration = $req->duration;
        $project_task->description = $req->description;

        $project_task->save();
        session()->put('success', "Task Added!");
        return redirect('admin/school_mini_projects');
    }





    // =================admin apis ===================

    public function get_schools()
    {
        $school = School::get();
        return $school;
    }
    public function get_subjects(Request $req)
    {
        $subjects = School_subject::get();
        return $subjects;
    }

    public function get_tests()
    {
        $tests = School_test::with('subject')->get();
        return $tests;
    }
    public function get_mini_projects()
    {
        $mini_projects = School_mini_project::get();
        return $mini_projects;
    }
    public function get_classes()
    {
        $classes = Classes::get();
        return $classes;
    }
    public function get_subjects_by_class($class_id)
    {
        $subjects = School_subject::where('class_id', $class_id)->get();
        return $subjects;
    }
    public function get_chapters_by_subject($subject_id)
    {
        $chapters = Chapter::where('subject', $subject_id)->get();
        return $chapters;
    }
    public function get_video_by_chapter($chapter_id)
    {
        $videos = Chapter_video::where('chapter_id', $chapter_id)->get();
        return response()->json($videos);
    }
    public function create_project(Request $req)
    {
        $projects = new School_mini_project();
        $projects->subject_id = $req->subject;
        $projects->project_name = $req->name;
        if (!empty($req->file('image'))) {
            $extension1 = $req->file('image')->extension();
            $filename = Str::random(4) . time() . '.' . $extension1;
            $projects->project_image = $req->file('image')->move(('uploads'), $filename);
        } else {
            $projects->project_image = null;
        }
        $projects->description = $req->description;
        if ($projects->save()) {
            return ["msg" => "Project Created successfully"];
        } else {
            return ["msg" => "Project could not Created"];
        }
    }
    public function create_project_task(Request $req)
    {
        $project_task = new School_project_task();

        $project_task->project_id = $req->project;
        $project_task->name = $req->name;
        $project_task->lab_code = $req->labCode;
        $project_task->duration = $req->duration;
        $project_task->description = $req->description;

        if ($project_task->save()) {
            return ["msg" => "Project Task Created successfully"];
        } else {
            return ["msg" => "Project Task could not Created"];
        }
    }

    public function create_assessment(Request $req)
    {
        $assesment = new School_assesment();

        $assesment->class_id = $req->class;
        $assesment->subject_id = $req->subject;
        $assesment->chapter_id = $req->chapter;
        // the above 3 fileds are not mandatory i have stored in the db. because this videoid is unique we can get the data only from it
        $assesment->video_id = $req->video;

        if (!empty($req->code)) {
            $assesment->question_code = $req->code;
        }

        $assesment->question = $req->question;
        $assesment->option1 = $req->option1;
        $assesment->option2 = $req->option2;
        $assesment->option3 = $req->option3;
        $assesment->option4 = $req->option4;
        $assesment->answer = $req->selectedOption;

        if ($assesment->save()) {
            return ["msg" => "Assessments Created successfully"];
        } else {
            return ["msg" => "Assessments could not Created"];
        }
    }
    public function create_question(Request $req)
    {
        $question = new School_test_master();
        $question->class_id = $req->class;
        $question->subject_id = $req->subject;
        if (!empty($req->code)) {
            $question->question_code = $req->code;
        }

        $question->question = $req->question;
        $question->option1 = $req->option1;
        $question->option2 = $req->option2;
        $question->option3 = $req->option3;
        $question->option4 = $req->option4;
        $question->answer = $req->selectedOption;
        if ($question->save()) {
            return ["msg" => "Question Created successfully"];
        } else {
            return ["msg" => "Question could not Created"];
        }
    }
    public function get_questions_by_subject($subject)
    {
        $test_master = School_test_master::where('subject_id', $subject)->get();
        return $test_master;
    }
    public function create_test(Request $req)
    {
        $test = new School_test();
        $test->subject_id = $req->subject;
        $test->class_id = $req->class;

        $test->title = $req->name;
        if (!empty($req->file('image'))) {
            $extension1 = $req->file('image')->extension();
            $filename = Str::random(4) . time() . '.' . $extension1;
            $test->image = $req->file('image')->move(('uploads'), $filename);
        } else {
            $test->image = null;
        }
        $test->description = $req->description;
        if ($test->save()) {
            return ["test" => $test, "msg" => "test Created successfully"];
        } else {
            return ["msg" => "test could not Created"];
        }
    }
    public function add_question_to_test(Request $req)
    {
        $question_ids = $req->selectedQuestionsId;
        // dd($question_ids);
        School_test::where('id', $req->test_id)->update([
            'questions' => $question_ids,
        ]);
        return ["msg" => "Test Created successfully"];
    }
    public function get_test_details($test_id)
    {
        $test = School_test::where("id", $test_id)->with("subject", "classes")->first();
        $questions = explode(',', $test->questions);
        $new_question = 0;
        $test_questions = School_test_master::whereIn('id', $questions)->get();

        return ['test' => $test, 'test_questions' => $test_questions];
    }
    public function get_test_results($test_id)
    {
        $result = School_test_result::with('test', 'user')->where('test_id', $test_id)->get();
        return $result;
    }

    public function create_subject(Request $req)
    {
        $subject = new School_subject();
        $subject->subject_name = $req->subject;
        $subject->class_id = $req->class;
        if (!empty($req->file('image'))) {
            $extension1 = $req->file('image')->extension();
            $filename = Str::random(4) . time() . '.' . $extension1;
            $subject->subject_image = $req->file('image')->move(('uploads'), $filename);
        } else {
            $subject->subject_image = null;
        }
        if ($subject->save()) {
            return ["msg" => "Subject Created successfully"];
        } else {
            return ["msg" => "Subject could not Created"];
        }
    }
    public function create_chapter(Request $req)
    {
        $chapterNames = json_decode($req->chapterNames);
        foreach ($chapterNames as $chapterName) {
            $chapter = new Chapter();
            $chapter->class = $req->class;
            $chapter->subject = $req->subject;
            $chapter->chapter_name = $chapterName;
            $chapter->save();
        }

        return ["msg" => "Chapter Created successfully"];
    }
    public function create_video(Request $req)
    {
        $videoNames = json_decode($req->videoNames);
        foreach ($videoNames as $index => $videoName) {
            $video = new Chapter_video();
            $video->chapter_id = $req->chapter;
            $video->video_name = $videoName;
            // if (!empty($req->file('videoFiles'))) {
            //     $extension1 = $req->file('videoFiles')->extension();
            //     $filename = Str::random(4) . time() . '.' . $extension1;
            //     $video->video_file = $req->file('videoFiles')->move(('uploads'), $filename);
            // } else {
            //     $video->video_file = null;
            // }
            if (!empty($req->file("videoFiles.$index"))) {
                $extension1 = $req->file("videoFiles.$index")->extension();
                $filename = Str::random(4) . time() . '.' . $extension1;
                $video->video_file = $req->file("videoFiles.$index")->move(('uploads'), $filename);
            } else {
                $video->video_file = null;
            }
            $video->save();
        }

        return ["msg" => "video Created successfully"];
    }

    public function get_child($parent_id)
    {
        $child = User::where('parent_id', $parent_id)->get();
        return $child;
    }

    public function get_assessments($subject_id)
    {
        // $assessments = School_assesment::where('subject_id', $subject_id)->get();
        $assessments = School_assesment::with('class', 'subject', 'chapter', 'video')->where('subject_id', $subject_id)->get();

        return $assessments;
    }

    //Rakshith
    public function api_all_students()
    {
        $students = School_student::with('school', 'class')->get();

        return $students;
    }

    public function api_get_schools()
    {
        $school = School::all();
        return $school;
    }

    public function api_get_classes()
    {
        $classes = Classes::all();
        return $classes;
    }

    // public function api_add_student(Request $req)
    // {
    //     $auth = new User();
    //     $auth->name = $req->name;
    //     $auth->type = 'school_student';
    //     $auth->password = Hash::make('abc123');
    //     $authres = $auth->save();

    //     $student = new School_student();
    //     $student->auth_id = (int)$auth->id;
    //     $student->name = $req->name;
    //     $student->class_id = $req->class;
    //     $student->school_id = $req->school;
    //     $student->section_id = $req->section;
    //     $studentres = $student->save();

    //     if ($authres && $studentres) {
    //         return 1;
    //     }
    // }

    public function api_add_student(Request $req)
    {
        $auth = new User();
        $auth->name = $req->name;
        $auth->type = 'school_student';
        $auth->password = Hash::make('abc123');
        $authres = $auth->save();

        $school = School::where('school_name', $req->school)->first();

        if (!$school) {
            return response()->json(['error' => 'School not found'], 404);
        }

        $class_id = Classes::where('class', $req->className)->first();

        $student = new School_student();
        $student->auth_id = (int)$auth->id;
        $student->name = $req->name;
        $student->class_id = $class_id->id;
        $student->school_id = $school->id;
        $student->section_id = $req->section;
        $studentres = $student->save();

        if ($authres && $studentres) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Failed to save student'], 500);
        }
    }

    public function api_all_teachers()
    {
        $teachers = Teacher::with('user')->get();

        return $teachers;
    }

    public function apigetClasses()
    {
        $classes = Classes::all();
        return $classes;
    }

    public function apigetSubjects($class_id)
    {
        $subjects = School_subject::where('class_id', $class_id)->get();
        return response()->json($subjects);
    }

    public function api_add_teacher(Request $req)
    {
        $auth = new User();
        $auth->name = $req->name;
        $auth->email = $req->email;
        $auth->phone = $req->phone;
        $auth->type = 'teacher';
        $auth->password = Hash::make($req->password);
        $authres = $auth->save();

        $classInput = $req->class;
        $subjectInput = $req->subject;
        $classArray = explode(',', $classInput);
        $subjectArray = explode(',', $subjectInput);

        // Combine class and subject data into an array
        $dataToStore = [];

        for ($i = 0; $i < count($classArray); $i++) {
            $dataToStore[] = [
                'class_id' => $classArray[$i],
                'subject_id' => $subjectArray[$i],
            ];
        }

        // Convert the array to JSON
        $jsonData = json_encode($dataToStore);

        $teacher = new Teacher();
        $teacher->class_and_subject = $jsonData;
        $teacher->auth_id = $auth->id;
        $teachres = $teacher->save();

        if ($authres && $teachres) {
            return 1;
        }
    }

    function api_register(Request $request)
    {
        $auth = new User();

        $result = User::where('email', $request->email)->first();
        if ($result) {
            return 'Email already exists';
        } else {
            if ($request->isParent == "true") {
                $auth->name = $request->name;
                $auth->phone = $request->phone;
                $auth->email = $request->email;
                $auth->type = 'parent';
                $auth->password = Hash::make($request->password);

                $length = 6;
                $min = pow(10, $length - 1);
                $max = pow(10, $length) - 1;
                $rand_number = mt_rand($min, $max);
                $auth->parent_code = $rand_number;

                $authres = $auth->save();
                $user = User::where('email', $request->email)->first();

                if ($authres) {
                    return $user;
                }
            } else {
                $auth->name = $request->name;
                $auth->phone = $request->phone;
                $auth->email = $request->email;
                $auth->type = 'student';
                $auth->password = Hash::make($request->password);

                $authres = $auth->save();
                $user = User::where('email', $request->email)->first();

                $student = new School_student();
                $student->auth_id = $user->id;
                $student->name = $request->name;
                $stures = $student->save();

                if ($authres && $stures) {
                    return $user;
                }
            }
        }
    }

    function api_add_school(Request $request)
    {
        $auth = new User();
        $auth->name = $request->name;
        $auth->phone = $request->phone;
        $auth->email = $request->email;
        $auth->type = 'sub_admin';
        $auth->password = Hash::make($request->password);
        $authres = $auth->save();

        $school = new School();
        $school->auth_id = $auth->id;
        $school->school_name = $request->name;
        $school->school_contact_no = $request->phone;
        $school->auth_email = $request->email;
        $schoolres = $school->save();

        if ($authres && $schoolres) {
            return 1;
        }
    }
}

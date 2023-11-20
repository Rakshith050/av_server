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
use App\Models\Recruiter;
use App\Models\Student;
use App\Models\Message;
use App\Models\Qna;

use App\Models\School_qna;
use App\Models\Teacher;
use App\Models\School_message;

class Trainers extends Controller
{
    //


    public function login()
    {

        return view('trainer/login');
    }

    public function trainer_login(Request $req)
    {

        $trainer = User::where('email', $req->email)->first();

        // dd($trainer);
        if($trainer && $trainer->type == 'trainer' && Hash::check($req->password, $trainer->password)) {
            $date = date('Y-m-d H:i:s');
            $req->session()->put('trainer', $trainer);
            Session::put('rexkod_trainer_id', $trainer->id);

            Session::put('rexkod_trainer_name', $trainer->name);
            // dd(session('rexkod_user_name'));

            return redirect('trainer/index');


        } else {
            session()->put('failed', 'Invalid email');
            return redirect('trainer/login');
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
        return view('trainer/index', ['data' => $data]);
        // return view('trainer/index');
    }

    // -----------chat----------
    public function message($student_id)
    {

        $students = Message::select('sender_id')
            ->where('receiver_id', Session::get('rexkod_trainer_id'))
            ->distinct()
            ->get();



        $sent_messages = Message::where('sender_id', Session::get('rexkod_trainer_id'))->where('receiver_id', $student_id)->get();
        $received_messages = Message::where('sender_id', $student_id)->where('receiver_id', Session::get('rexkod_trainer_id'))->get();

        $data = [
            'students' => $students,
            'student_id' => $student_id,
            'sent_messages' => $sent_messages,
            'received_messages' => $received_messages,
        ];
        return view('trainer/message', ['data' => $data]);
    }
    // public function send_message(Request $req)
    // {
    //     # code...
    //     $message = new Message();

    //     $message->sender_id = Session::get('rexkod_trainer_id');
    //     $message->receiver_id = $req->receiver_id;
    //     $message->message = $req->message;

    //     $message->save();
    //     // session()->put('success', 'Message sent successfully');

    //     return redirect('trainer/message/' . $req->receiver_id);

    // }

    public function qna()
    {
        # code...
        $qna = Qna::get();
        // $trainer = Course::where('id',$qna->course)->first();
        $data = [
            'qna' => $qna,
        ];

        return view('trainer/qna', ['data' => $data]);
    }
    public function qna_answer_view($id)
    {
        # code...
        $qna = Qna::where('id', $id)->first();
        $data = [
            'qna' => $qna,
        ];
        return view('trainer/qna_answer', ['data' => $data]);
    }
    public function qna_answer(Request $req)
    {
        // $qna =new Qna();
        Qna::where('id', $req->qna_id)
                    ->update(['answer' => $req->answer,
                            'a_created_by' => Session::get('rexkod_trainer_id'),
                ]);

        return redirect('trainer/qna');
    }

    public function default_settings()
    {

        return view('trainer/default_settings');
    }

    public function change_password_view()
    {
        $user = User::where('id', session('rexkod_trainer_id'))->first();
        $data = [
            'user' => $user,
        ];

        return view('trainer/change_password', ['data' => $data]);
    }

    public function change_password(Request $req)
    {
        User::where('id', session('rexkod_trainer_id'))
                    ->update(['name' => $req->name,
                    'email' => $req->email,
                    'password' => Hash::make($req->password),
                ]);

        $user = User::where('id', session('rexkod_trainer_id'))->first();

        Session::put('rexkod_trainer_name', $user->name);
        return redirect('/trainer/index');
    }


    // ============teacher==================
    public function school_qna()
    {

        $teacher = Teacher::where('auth_id', session('rexkod_trainer_id'))->first();

        if ($teacher) {
            $class_and_subject = json_decode($teacher->class_and_subject, true);
            $subjectIds = array_column($class_and_subject, 'subject_id');

            $qna = School_qna::whereIn('subject_id', $subjectIds)
                        ->with('subject') // Eager load the subject relationship
                        ->get();
        }

        $data = [
            'qna' => $qna,
        ];

        return view('teacher/qna', ['data' => $data]);
    }

    public function school_qna_answer_view($id)
    {
        # code...
        $qna = School_qna::where('id', $id)->first();
        $data = [
            'qna' => $qna,
        ];
        return view('teacher/qna_answer', ['data' => $data]);
    }
    public function school_qna_answer(Request $req)
    {
        // $qna =new Qna();
        School_qna::where('id', $req->qna_id)
                    ->update(['answer' => $req->answer,
                            'a_created_by' => Session::get('rexkod_trainer_id'),
                ]);

        return redirect('teacher/school_qna');
    }

    public function school_message($student_id)
    {

        $students = School_message::select('sender_id')
            ->where('receiver_id', Session::get('rexkod_trainer_id'))
            ->distinct()
            ->get();

        $sent_messages = School_message::where('sender_id', Session::get('rexkod_trainer_id'))->where('receiver_id', $student_id)->get();
        $received_messages = School_message::where('sender_id', $student_id)->where('receiver_id', Session::get('rexkod_trainer_id'))->get();

        $data = [
            'students' => $students,
            'student_id' => $student_id,
            'sent_messages' => $sent_messages,
            'received_messages' => $received_messages,
        ];
        return view('teacher/message', ['data' => $data]);
    }
    public function school_send_message(Request $req)
    {
        # code...
        $message = new School_message();

        $message->sender_id = Session::get('rexkod_trainer_id');
        $message->receiver_id = $req->receiver_id;
        $message->message = $req->message;

        $message->save();
        // session()->put('success', 'Message sent successfully');

        return redirect('teacher/school_message/' . $req->receiver_id);

    }

    // ===========================apis=======================


    public function get_qnas($trainer_id)
    {
        $teacher = Teacher::where('auth_id', $trainer_id)->first();
        if ($teacher) {
            $class_and_subject = json_decode($teacher->class_and_subject, true);
            $subjectIds = array_column($class_and_subject, 'subject_id');

            $qna = School_qna::whereIn('subject_id', $subjectIds)
                        ->with('subject') // Eager load the subject relationship
                        ->get();
        }
        return $qna;
    }

    public function get_qna($qna_id)
    {
        $qna = School_qna::where('id', $qna_id)->first();
        return $qna;
    }

    public function answer_qna(Request $req)
    {
        School_qna::where('id', $req->qna_id)
                    ->update(['answer' => $req->answer,
                            'a_created_by' => $req->auth_id, // auth_id = trianer_id
                ]);
        return ["msg" => "Qna answered successfully"];
    }
    public function get_chat_students($trainer_id)
    {

        $students = School_message::select('sender_id')
        ->where('receiver_id', $trainer_id)
        ->distinct()
        ->get();

        $studentIds = $students->pluck('sender_id'); // Extract sender_ids

        $studentData = user::whereIn('id', $studentIds)
            ->select('id', 'name') // Include other fields if needed
            ->get();

        return $studentData;
    }

    public function get_messages_for_student($trainer_id, $student_id){
        $sent_messages = School_message::where('sender_id', $trainer_id)->where('receiver_id', $student_id)->get();
        $received_messages = School_message::where('sender_id', $student_id)->where('receiver_id',$trainer_id)->get();
        $messages = $sent_messages->merge($received_messages)->sortBy('created_at');
        $messages = $messages->values()->all();

        return $messages;
        // return
    }
    public function send_message(Request $req)
    {
        # code...
        $message = new School_message();

        $message->sender_id = $req->sender_id;
        $message->receiver_id = $req->receiver_id;
        $message->message = $req->message;

        $message->save();
        // session()->put('success', 'Message sent successfully');

        return ["msg" => "Message sent successfully"];

    }
}

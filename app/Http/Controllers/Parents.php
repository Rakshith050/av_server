<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use App\Models\Assesment_result;



class Parents extends Controller
{
    //

    public function index()
    {

        return view('parents/index');
    }

    public function change_password_view()
    {
        $user = User::where('id', session('rexkod_user_id'))->first();
        $data=[
            'user'=> $user,
        ];

        return view('parents/change_password', ['data' => $data]);
    }

    public function change_password(Request $req)
    {
        User::where('id', session('rexkod_user_id'))
                    ->update(['name' => $req->name,
                    'email' => $req->email,
                    'password' => Hash::make($req->password),
                ]);

        $user = User::where('id', session('rexkod_user_id'))->first();

        Session::put('rexkod_user_name', $user->name);

        session()->put('success', "Settings Updated");
        return redirect('/parents/change_password');
    }

    public function student_enrolled_courses($student_id){
        $enrolled_courses = DB::table('course')
        ->join('enrolled_courses', 'course.id', '=', 'enrolled_courses.course_id')
        ->select('course.*')
        ->where('enrolled_courses.student_id', $student_id)
        ->get();


        return view('parents.student_enrolled_courses',['enrolled_courses' =>$enrolled_courses,'student_id' =>$student_id]);
    }

    public function test_results($course_id,$student_id){
        $tests = DB::table('quiz_results')
        ->join('quizes', 'quizes.id', '=', 'quiz_results.quiz_id')
        ->select('quiz_results.*','quizes.*')
        ->where('quiz_results.user_id', $student_id)
        ->where('quizes.course_id', $course_id)
        ->first();

        // dd($tests);
        return view('parents.test_results',['tests' =>$tests]);
    }

    public function assessments($student_id){
        $assessments = Assesment_result::where('user_id', $student_id)
        ->join('course', 'assesment_results.course_id', '=', 'course.id')
        ->join('sections', 'assesment_results.section_name', '=', 'sections.id')
        ->join('videos', 'assesment_results.video', '=', 'videos.id')
        ->select('assesment_results.*', 'course.course_name','sections.section_name','videos.video_name')
        ->get();

        return view('parents.assessments',['assessments' =>$assessments]);
    }
    public function tests($student_id){
        $tests = DB::table('quiz_results')
        ->join('quizes', 'quizes.id', '=', 'quiz_results.quiz_id')
        ->join('course', 'course.id', '=', 'quizes.course_id')
        ->select('quiz_results.*','quizes.title','course.course_name',)
        ->where('quiz_results.user_id', $student_id)
        ->get();

        return view('parents.tests',['tests' =>$tests]);
    }
}

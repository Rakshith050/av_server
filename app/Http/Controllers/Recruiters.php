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
use App\Models\Job_detail;
use App\Models\Job_application;
use App\Models\Enrolled_course;
use App\Models\Qna;
use App\Models\Internship_application;


class Recruiters extends Controller
{
    //
    function register(){

        return view('recruiter/register');
    }
    function recruiter_register(Request $req){

        $auth=new User;


        $result = User::where('email', $req->email)->first();
        if($result){
            return 'Email already exists';
        }else{

        $auth->name = $req->name;
        $auth->phone = $req->phone;
        $auth->email = $req->email;
        $auth->type = 'recruiter';
        $auth->password=Hash::make($req->password);

        $auth->save();
        $user = User::where('email', $req->email)->first();

        $recruiter=new Recruiter;
        $recruiter->recruiter_id= $user->id;
        $recruiter->name= $req->name;
        $recruiter->org_name= $req->org_name;
        $recruiter->org_address= $req->org_address;
        if (!empty($req->file('org_logo'))) {
            $extension1 = $req->file('org_logo')->extension();

                $filename = Str::random(4) . time() . '.' . $extension1;
                $org_logo = $req->file('org_logo')->move(('uploads'), $filename);

        } else {
            $org_logo = 'org_logo';
        }
        $recruiter->org_logo= $org_logo;
        $recruiter->org_phone= $req->phone;
        $recruiter->org_email= $req->email;
        $recruiter->save();

        $user = User::where('email', $req->email)->first();

        $req->session()->put('recruiter',$recruiter);
        Session::put('rexkod_recruiter_id',$recruiter->id);

        Session::put('rexkod_recruiter_name',$recruiter->name);

       // $req->session()->put('user',$user);

        return redirect('recruiter/index');
        }

     }
    function login(){

        return view('recruiter/login');
    }

    function recruiter_login(Request $req){

        $recruiter = User::where('email', $req->email)->first();

        if($recruiter && $recruiter->type=='recruiter' && Hash::check($req->password,$recruiter->password)){
        $date = date('Y-m-d H:i:s');
        $req->session()->put('recruiter',$recruiter);
        Session::put('rexkod_recruiter_id',$recruiter->id);

        Session::put('rexkod_recruiter_name',$recruiter->name);
// dd(session('rexkod_user_name'));

        return redirect('recruiter/index');


        } else {
            session()->put('failed','Invalid email');
            return redirect('recruiter/login');
        }
    }
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }
    function index(){

        // $course=new Course;
        $result = Course::get();
        // dd($result);
        $data = [
            'courses' => $result,
           ];
        //    dd($data['courses']->course_name);
        return view('recruiter/index',['data' => $data]);
        // return view('recruiter/index');
    }

    function all_results($id){
        $result=DB::table('quiz_results')
                    ->join('quizes', 'quiz_results.quiz_id', '=', 'quizes.id')
                    ->select('quiz_results.*','quizes.created_by')
                    ->where('quizes.created_by','recruiter')
                    ->where('quizes.id',$id)
                    ->get();
        // dd($result);
        $data = [
            'result' => $result,
           ];

        return view('recruiter/all_results',['data' => $data]);
    }

    function add_subject_view(){
        $subject=new Subject;
        $result = Subject::get();
        $data = [
            'subjects' => $result,
           ];
        return view('recruiter/add_subject',['data' => $data]);
    }

    function add_subject(Request $req){
        $subject=new Subject;
        $subject->subject_name = $req->subject;
        $subject->save();
        $result = Subject::get();
        $data = [
            'subjects' => $result,
           ];
        return view('recruiter/add_subject',['data' => $data]);
    }

    function create_quiz_view(){
        $subject=new Subject;
        $result = Subject::get();
        $jobs = Job_detail::get();
        $data = [
            'subjects' => $result,
            'jobs' => $jobs,
           ];
        return view('recruiter/create_quiz',['data' => $data]);
    }
    function create_quiz(Request $req){
        $quiz=new Quiz;
        $quiz->job_id = $req->job_id;
        $quiz->subject = $req->subject;
        $quiz->title = $req->title;
        if (!empty($req->file('quiz_photo'))) {
            $extension1 = $req->file('quiz_photo')->extension();
            if ($extension1 == "png" || $extension1 == "jpeg" || $extension1 == "jpg") {
                $filename = Str::random(4) . time() . '.' . $extension1;
                $quiz->image = $req->file('quiz_photo')->move(('uploads'), $filename);
            }
        } else {
            $quiz->image = $quiz->quiz_photo;
        }
        $quiz->description = $req->description;
        $quiz->created_by = "recruiter";
        $quiz->save();

        // $last_quiz=Quiz::latest()->first();
        // $subject=$last_quiz->subject;
        // dd($subject);

        // $quiz_master = Quiz_master::where('subject', $subject)->get();

        // $data = [
        //     'quiz_master' => $quiz_master,
        //     'subject' => $subject,
        //    ];
        session()->put('success', "Quiz Created");
        return redirect('recruiter/add_quiz');
        // return view('recruiter/add_quiz',['data' => $data]);
    }
    function add_quiz(){

        return view('recruiter/add_quiz');
    }

    function add_question_to_quiz($que_id){

        // $quiz = Quiz::where('subject', $subject)->get();
        $last_quiz=Quiz::latest()->first();
        $questions=$last_quiz->questions;
        if($questions == null){
            $questions=$que_id;
        }else{
            $questions=$questions . ",$que_id";
        }


        Quiz::where('id', $last_quiz->id)->update([
        'questions' => $questions,
        ]);

        // $question = Quiz_master::where('subject', $subject)->get();

        // $data = [
        //     'quiz_master' => $quiz_master,
        //     'subject' => $subject,
        //    ];
        // return view('recruiter/add_quiz',['data' => $data]);

        return redirect('recruiter/add_quiz');
    }
    function delete_question_from_quiz($que_id){
        $last_quiz=Quiz::latest()->first();
        $questions=explode(',',$last_quiz->questions);
        $new_question=0;
        foreach($questions as $question){
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
        return redirect('recruiter/add_quiz');
    }



    function add_question_view(){
        $subject=new Subject;
        $result = Subject::get();
        $data = [
            'subjects' => $result,
           ];
        return view('recruiter/add_question',['data' => $data]);
    }
    function add_question(Request $req){
        $question=new Quiz_master;
        $question->subject = $req->subject;
        $question->question = $req->question;
        $question->option1 = $req->option1;
        $question->option2 = $req->option2;
        $question->option3 = $req->option3;
        $question->option4 = $req->option4;
        $question->answer = $req->answer;
        $question->save();
        session()->put('success', "Question Added");
        return redirect('recruiter/add_question');
    }

    function quiz_master(Request $req){

        $subject=new Subject;
        $result = Subject::get();

        $question=new Quiz_master;
        if($req->subject){
            $quiz_master = Quiz_master::where('subject', $req->subject)->get();

        }else{
            $quiz_master = Quiz_master::get();

        }
        $data = [
            'subjects' => $result,
            'question'=> $quiz_master,
           ];
        //    dd($result2);

        return view('recruiter/quiz_master',['data' => $data]);
    }
    function all_students(){

        $students = Student::get();
        $data = [
            'students' => $students,
           ];
        return view('recruiter/all_students',['data' => $data]);
    }

    public function create_job_view()
    {
        # code...
        return view('recruiter/create_job');
    }
    public function create_job(Request $req)
    {
        # code...
        $job= new Job_detail();
        $job->job_title = $req->job_title;
        if (!empty($req->file('job_image'))) {
            $extension1 = $req->file('job_image')->extension();

                $filename = Str::random(4) . time() . '.' . $extension1;
                $job_image = $req->file('job_image')->move(('uploads'), $filename);

        }else {
            $job_image = 'job_image';
        }
        $job->job_image = $job_image;

        $job->annual_ctc = $req->annual_ctc;
        $job->location = $req->location;
        $job->description = $req->description;
        $job->criteria = $req->criteria;
        $job->created_by = session('rexkod_recruiter_id');

        $job->save();
        session()->put('success', "Job Created");
        return redirect('/recruiter/all_jobs');
    }

    public function all_jobs()
    {
        # code...
        $all_jobs=Job_detail::where('created_by',session('rexkod_recruiter_id'))->get();
        $data=[
            'all_jobs' => $all_jobs,
        ];

        return view('recruiter/all_jobs',['data' => $data]);
    }


    public function job_applications($id)
    {
        # code...
        $job_application=Job_application::where('job_id',$id)->get();

        $data=[
            'job_application' => $job_application,
        ];
        return view('recruiter/job_applications',['data' => $data]);
    }
    public function sitemap()
    {

        return view('recruiter/sitemap');
    }

    public function all_quizzes()
    {
        # code...

        $all_quiz=Quiz::where('created_by','recruiter')->get();
        $data = [
            'all_quiz' => $all_quiz,
           ];
        return view('recruiter/all_quizzes',['data' => $data]);
    }
    public function quiz_details($id){
        $quizzes = Quiz::where('id', $id)->first();
        $data = [
            'quizzes' => $quizzes,
           ];
        return view('recruiter/quiz_details',['data' => $data]);
    }

    public function change_password_view()
    {
        $user = User::where('id', session('rexkod_recruiter_id'))->first();
        $data=[
            'user'=> $user,
        ];

        return view('recruiter/change_password', ['data' => $data]);
    }

    public function change_password(Request $req)
    {
        User::where('id', session('rexkod_recruiter_id'))
                    ->update(['name' => $req->name,
                    'email' => $req->email,
                    'password' => Hash::make($req->password),
                ]);

        $user = User::where('id', session('rexkod_recruiter_id'))->first();

        Session::put('rexkod_recruiter_name', $user->name);
        return redirect('/recruiter/index');
    }

    public function student_profile($id)
    {

        $all_internships=Internship_application::where('student_id', $id)->get();
        $all_qna=Qna::where('q_created_by', $id)->get();
        $quiz_result=Quiz_result::where('user_id', $id)->get();
        $all_jobs = Job_application::where('student_id', $id)->get();
        $student_details =Student::where('student_id', $id)->first();
        $courses = Enrolled_course::where('student_id', $id)->get();
        $data=[
            'all_internships' => $all_internships,
            'all_qna' => $all_qna,
            'quiz_result' => $quiz_result,
            'all_jobs' => $all_jobs,
            'student_details' => $student_details,
            'courses' => $courses,
        ];

        // die($courses);
        return view('recruiter/student_profile', ['data' => $data]);
    }
}

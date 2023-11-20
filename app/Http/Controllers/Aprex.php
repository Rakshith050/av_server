<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


use App\Models\User;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Quiz_master;
use App\Models\Quiz_result;
use App\Models\Student;
use App\Models\Message;
use App\Models\Qna;
use App\Models\Job_detail;
use App\Models\Job_application;
use App\Models\Internship;
use App\Models\Internship_application;
use App\Models\Note;
use App\Models\Enrolled_course;
use App\Models\Assesment;
use App\Models\Assesment_result;
use App\Models\Mini_project;
use App\Models\Lab;
use App\Models\Video;
use App\Models\Student_referral;
use App\Models\Forum_question;
use App\Models\Forum_answer;
use App\Models\Subscription;
use App\Models\Section;

class Aprex extends Controller
{

    public function notes($id){
        $course=Course::where('id',$id)->first();
        $notes = Note::where('student_id',session('rexkod_user_id'))->where('course_id',$id)->get();
        $data =[
            'course'=>$course,
            'notes' => $notes,

        ];
        // dd($course);
        return view('aprex/notes_mobile',['data' => $data]);
    }

    public function save_notes(Request $req)
    {
        # code...
        $note = new Note();

        $note->student_id = Session::get('rexkod_user_id');
        $note->course_id = $req->course_id;
        $note->note = $req->note;

        $note->save();
        // session()->put('success', 'Message sent successfully');

        return redirect('aprex/notes/'.$req->course_id);

    }
    public function chat($id){

        $course=Course::where('id',$id)->first();
        $tutor=$course->course_tutor;
        $sent_messages = Message::where('sender_id', Session::get('rexkod_user_id'))->where('receiver_id', $tutor)->get();
        $received_messages = Message::where('sender_id', $tutor)->where('receiver_id', Session::get('rexkod_user_id'))->get();
        $trainer = User::where('id',$tutor)->first();
        $data =[
            'course'=>$course,
            'trainer'=>$trainer,
            'sent_messages' => $sent_messages,
            'received_messages' => $received_messages,

        ];
        return view('aprex/chat_mobile',['data' => $data]);
    }
    public function send_message(Request $req)
    {
        # code...
        $qna = Qna::where('question',$req->message)->first();
        if($qna){
            // dd($qna->answer);
            $message = new Message();
            $message->sender_id = Session::get('rexkod_user_id');
        $message->receiver_id = $req->receiver_id;
        $message->message = $qna->question;
        $message->save();

            if($qna->answer){
                $message = new Message();
            $message->sender_id = $qna->a_created_by;
            $message->receiver_id = Session::get('rexkod_user_id');
            $message->message = $qna->answer;
            $message->save();
            }
        }else{
            $message = new Message();
            $message->sender_id = Session::get('rexkod_user_id');
        $message->receiver_id = $req->receiver_id;
        $message->message = $req->message;
        $message->save();
        }
        // session()->put('success', 'Message sent successfully');

        return redirect('aprex/chat/'.$req->course_id);

    }
    public function video_player_mobile($id){
        $course=Course::where('id',$id)->first();
        $data =[
            'course'=>$course,


        ];
        return view('aprex/video_player_mobile',['data' => $data]);
    }




    function index(){

        // $course=new Course;
        $result = Course::get();
        // dd($result);
        $enrolled_course = DB::table('course')
            ->join('enrolled_courses', 'course.id', '=', 'enrolled_courses.course_id')
            ->select('course.*','enrolled_courses.*')
            ->where('enrolled_courses.student_id',session('rexkod_user_id'))
            ->get();

        // $my_course = Course::where
        // dd($enrolled_course);

        $data = [
            'courses' => $result,
            'enrolled_course' => $enrolled_course,
           ];

        //    dd($data['courses']->course_name);
        return view('aprex/index',['data' => $data]);
        // return view('aprex/index');
    }


    function user_register(Request $req){

        $auth=new User;


        $result = User::where('email', $req->email)->first();
        if($result){
            return 'Email already exists';
        }else{

        $auth->name = $req->name;
        $auth->phone = $req->phone;
        $auth->email = $req->email;
        $auth->type = 'student';
        $auth->password=Hash::make($req->password);

        $auth->save();
        $user = User::where('email', $req->email)->first();

        $student=new Student;
        $student->student_id= $user->id;
        $student->f_name= $req->name;
        $student->phone_no= $req->phone;
        $student->email= $req->email;
        $student->save();

        // $user = User::where('email', $req->email)->first();

        $date = date('Y-m-d H:i:s');
        $req->session()->put('user',$user);
        Session::put('rexkod_user_id',$user->id);

        Session::put('rexkod_user_name',$user->name);
        Session::put('rexkod_user_email',$user->email);
        Session::put('rexkod_user_phone',$user->phone);

       // $req->session()->put('user',$user);

        return redirect('/aprex/index');
        }

     }



     function user_login(Request $req){

        $user = User::where('email', $req->email)->first();

        if($user && $user->type=='student' && Hash::check($req->password,$user->password)){
        $date = date('Y-m-d H:i:s');
        $req->session()->put('user',$user);
        Session::put('rexkod_user_id',$user->id);

        Session::put('rexkod_user_name',$user->name);
        Session::put('rexkod_user_email',$user->email);
        Session::put('rexkod_user_phone',$user->phone);

        return redirect('/aprex/index');


        } else {
            session()->put('failed','Invalid email');
            return redirect('/aprex/login');
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/aprex')->with('message', 'You have been logged out!');
    }

    public function default_course_details($id)
    {

        $course = Course::where("id", $id)->first();
        $trainer = User::where("id", $course->course_tutor)->first();
        $sections= Section::where("course_id", $id)->get();
        $data = [
            'courses' => $course,
            'sections' => $sections,
            'trainer' => $trainer,
           ];

        return view('/aprex/default_course_details', ['data' => $data]);
    }

    function register(){

        return view('aprex/register');
    }

    function login(){
        if(Session::has('rexkod_user_id')){
            return redirect('aprex/index');
        } else {
            return view('aprex/login');
        }

    }

    function account_information(){

        return view('aprex/account_information');
    }
    function author_profile(){

        return view('aprex/author_profile');
    }

    function blog_sidebar(){

        return view('aprex/blog_sidebar');
    }
    function blog_single(){

        return view('aprex/blog_single');
    }
    function blog(){

        return view('aprex/blog');
    }
    function cart(){

        return view('aprex/cart');
    }
    function checkout(){

        return view('aprex/checkout');
    }
    function coming_soon(){

        return view('aprex/coming_soon');
    }
    function contact_information(){

        return view('aprex/contact_information');
    }
    function contact_two(){

        return view('aprex/contact_two');
    }
    function contact(){

        return view('aprex/contact');
    }
    function course_details_2(){

        return view('aprex/course_details_2');
    }

    function course_details(){

        return view('aprex/course_details');
    }
    function courses_grid_1(){

        return view('aprex/courses_grid_1');
    }
    function courses_grid_2(){

        return view('aprex/courses_grid_2');
    }
    function courses_grid_3(){

        return view('aprex/courses_grid_3');
    }
    function default_analytics(){

        return view('aprex/default_analytics');
    }
    function default_author_profile(){

        return view('aprex/default_author_profile');
    }
    function default_categories(){

        return view('aprex/default_categories');
    }
    function default_channel(){

        return view('aprex/default_channel');
    }
    function default_course_details_2(){

        return view('aprex/default_course_details_2');
    }


    function default_follower(){

        return view('aprex/default_follower');
    }

    function default_search(){

        return view('aprex/default_search');
    }
    function default_settings(){

        return view('aprex/default_settings');
    }
    function default_test(){

        return view('aprex/default_test');
    }

    function default(){

        return view('aprex/default');
    }
    function email_box(){

        return view('aprex/email_box');
    }
    function forgot(){

        return view('aprex/forgot');
    }
    function home_1(){

        return view('aprex/home_1');
    }

    function home_2(){

        return view('aprex/home_2');
    }
    function home_3(){

        return view('aprex/home_3');
    }
    function home_4(){

        return view('aprex/home_4');
    }
    function home_5(){

        return view('aprex/home_5');
    }
    function home_6(){

        return view('aprex/home_6');
    }


    function password(){

        return view('aprex/password');
    }

    function popup_chat(){

        return view('aprex/popup_chat');
    }
    function price(){

        return view('aprex/price');
    }

    function service(){

        return view('aprex/service');
    }
    function shop_1(){

        return view('aprex/shop_1');
    }

    function shop_2(){

        return view('aprex/shop_2');
    }
    function shop_3(){

        return view('aprex/shop_3');
    }
    function single_product_2(){

        return view('aprex/single_product_2');
    }
    function single_product_3(){

        return view('aprex/single_product_3');
    }
    function single_product(){

        return view('aprex/single_product');
    }
    function social(){

        return view('aprex/social');
    }
    function todo(){

        return view('aprex/todo');
    }
    function user_profile(){

        return view('aprex/user_profile');
    }




    function course_quizes(){
        $all_quiz=Quiz::where('created_by','admin')->get();
        $data = [
            'all_quiz' => $all_quiz,
           ];
        return view('aprex/course_quizes',['data' => $data]);
    }

    function recruiter_quizes(){
        $all_quiz=Quiz::where('created_by','recruiter')->get();
        $data = [
            'all_quiz' => $all_quiz,
           ];
        return view('aprex/recruiter_quizes',['data' => $data]);
    }


    function all_quiz(){
        // dd(session('rexkod_user_name'));

        $all_quiz=Quiz::get();
        // $subject_id=$all_quiz;
        $data = [
            'all_quiz' => $all_quiz,
           ];
        return view('aprex/all_quiz',['data' => $data]);
    }

    function take_quiz($id){
        $all_quiz=Quiz::where('id',$id)->first();
        // $subject_id=$all_quiz;
        $data = [
            'all_quiz' => $all_quiz,
           ];
        return view('aprex/take_quiz',['data' => $data]);
        // return view('aprex/take_quiz');
    }

    public function quiz_submit(Request $req,$id){
        $result=new Quiz_result;


        $quiz=Quiz::where('id',$id)->first();
        // dd($quiz->questions);
        $all_questions= explode(',',$quiz->questions);
        $count=1;
        // dd($all_questions);
        // $answer_selected[] = null;
        foreach ($all_questions as $question) {
            $answer_selected[]=$req->{'que_'. $count .'_selected'};
            $count++;
        }
        $new_answer = implode(',', $answer_selected);
        // dd($new_answer);
        $count2=1;
        $score=0;
        foreach ($all_questions as $question) {
            $quiz_master=Quiz_master::where('id',$question)->first();
            $quiz_answer=$quiz_master->answer;
            if($quiz_answer == $req->{'que_'. $count2 .'_selected'}){
                $score++;
                $count2++;
            }
        }
        $questionsArray = explode(",", $quiz->questions);
        $totalQuestions = count($questionsArray);

        if ($score != 0) {
            $score_percentage = ($score / $totalQuestions) * 100;
        } else {
            $score_percentage = 0;
        }
        // dd($score);
        $result->user_answer =	$new_answer;
        $result->quiz_id = $id;
        $result->questions=$quiz->questions;
        $result->score= $score;
        $result->score_percentage = $score_percentage;
        $result->user_id= session('rexkod_user_id');
        // $result->save();
        // return redirect("all_quiz");
        // dd($answer_selected);
        if($result->save()){
            session()->put('success', "Your Quiz submitted successfully");
        return redirect('aprex/view_score/'.$id);

        }else{
            session()->put('failed', 'Your Quiz not submitted, Try again!');
            return redirect()->back();
        }
        return redirect('aprex/view_score/'.$id);
    }

    public function view_score($id){

        $result=Quiz_result::where('quiz_id',$id)
                            ->where('user_id',session('rexkod_user_id'))
                            ->latest()->first();
        // dd($result);
        $data = [
            'result' => $result,
           ];

        return view('aprex/view_score',['data' => $data]);
    }
    public function all_results(){
        $result=Quiz_result::where('user_id',session('rexkod_user_id'))->get();
        $data = [
            'result' => $result,
           ];

        return view('aprex/all_results',['data' => $data]);
    }
    public function add_profile_view(){

        return view('aprex/add_profile');
    }

    public function add_profile(Request $req){
        $student=new Student;

        $student2 =Student::where('student_id',session('rexkod_user_id'))->first();
        // dd($student2);
        if(isset($req->personal_submit)){

            if (isset($req->same_as_phone)) {
                $same_as_phone = 1;
            } else {
                $same_as_phone = 0;
            }
            // files
            // if (!empty($req->file('student_image'))) {
            //     $extension1 = $req->file('student_image')->extension();

            //         $filename = Str::random(4) . time() . '.' . $extension1;
            //         $student_image = $req->file('student_image')->move(('uploads'), $filename);

            // }else if($student2->student_image){
            //     $student_image=$student2->student_image;
            // } else {
            //     $student_image = 'student_image';
            // }
            // // dd($student_image);
            // $student->student_image= $student_image;


            if (!empty($req->file('address_proof'))) {
                $extension1 = $req->file('address_proof')->extension();

                    $filename = Str::random(4) . time() . '.' . $extension1;
                    $address_proof = $req->file('address_proof')->move(('uploads'), $filename);

            }else if($student2->address_proof){
                $address_proof=$student2->address_proof;
            } else {
                $address_proof = 'address_proof';
            }
            $student->address_proof= $address_proof;
            if (!empty($req->file('identity_proof'))) {
                $extension1 = $req->file('identity_proof')->extension();

                    $filename = Str::random(4) . time() . '.' . $extension1;
                    $identity_proof = $req->file('identity_proof')->move(('uploads'), $filename);

            } else if($student2->identity_proof){
                $identity_proof=$student2->identity_proof;
            }else {
                $identity_proof = 'identity_proof';
            }
            // dd($req->whatsapp_no);
            Student::where('student_id',session('rexkod_user_id'))
                    ->update(['f_name' => $req->f_name,
                            'l_name' => $req->l_name,
                            'phone_no' => $req->phone_no,
                            'whatsapp_no' => $req->whatsapp_no,
                            'same_as_phone' => $same_as_phone,
                            'dob' => $req->dob,
                            'gender' => $req->gender,
                            'religion' => $req->religion,
                            'category' => $req->category,
                            'physically' => $req->physically,
                            'aadhar' => $req->aadhar,
                            'address_proof' => $address_proof ,
                            'identity_proof' => $identity_proof ,
                ]);
        }
        elseif ($req->academic_submit) {

            // dd(implode(',',$req->academic_name));
            $academic_name=implode(',',$req->academic_name);
            $class=implode(',',$req->class);
            $cgpa=implode(',',$req->cgpa);
            $start_date=implode(',',$req->start_date);
            $end_date=implode(',',$req->end_date);
            Student::where('student_id',session('rexkod_user_id'))
                    ->update(['academic_name' => $academic_name,
                    'class' => $class,
                    'cgpa' => $cgpa,
                    'start_date' => $start_date,
                    'end_date' => $end_date,


                ]);
        }
        elseif ($req->family_submit) {
            # code...
            if (!empty($req->file('father_aadhar_doc'))) {
                $extension1 = $req->file('father_aadhar_doc')->extension();

                    $filename = Str::random(4) . time() . '.' . $extension1;
                    $father_aadhar_doc = $req->file('father_aadhar_doc')->move(('uploads'), $filename);

            }else if($student2->father_aadhar_doc){
                $father_aadhar_doc=$student2->father_aadhar_doc;
            } else {
                $father_aadhar_doc = 'father_aadhar_doc';
            }

            if (!empty($req->file('mother_aadhar_doc'))) {
                $extension1 = $req->file('mother_aadhar_doc')->extension();

                    $filename = Str::random(4) . time() . '.' . $extension1;
                    $mother_aadhar_doc = $req->file('mother_aadhar_doc')->move(('uploads'), $filename);

            }else if($student2->mother_aadhar_doc){
                $mother_aadhar_doc=$student2->mother_aadhar_doc;
            } else {
                $mother_aadhar_doc = 'mother_aadhar_doc';
            }
            Student::where('student_id',session('rexkod_user_id'))
                    ->update(['siblings' => $req->siblings,
                    'annual_income' => $req->annual_income,

                    'father_name' => $req->father_name,
                    'f_aadhar' => $req->f_aadhar,
                    'f_phone' => $req->f_phone,
                    'f_email_id' => $req->f_email_id,
                    'father_aadhar_doc' => $father_aadhar_doc,

                    'mother_name' => $req->mother_name,
                    'm_aadhar' => $req->m_aadhar,
                    'm_phone' => $req->m_phone,
                    'm_email_id' => $req->m_email_id,
                    'mother_aadhar_doc' => $mother_aadhar_doc,
                    'f_email_id' => $req->f_email_id,

            ]);
        }
        elseif ($req->address_submit) {
            # code...
            Student::where('student_id',session('rexkod_user_id'))
                    ->update(['comm_address' => $req->comm_address,
                    'comm_pin_code' => $req->comm_pin_code,

                    'comm_village' => $req->comm_village,
                    'comm_block' => $req->comm_block,
                    'comm_state' => $req->comm_state,
                    'same_as_comm_address' => $req->same_as_comm_address,

                    'perm_address' => $req->perm_address,
                    'perm_village' => $req->perm_village,
                    'perm_block' => $req->perm_block,
                    'perm_state' => $req->perm_state,
                    'perm_pin_code' => $req->perm_pin_code,
            ]);
        }
        elseif ($req->bank_submit) {
            # code...
            if (!empty($req->file('passbook_statement'))) {
                $extension1 = $req->file('passbook_statement')->extension();

                    $filename = Str::random(4) . time() . '.' . $extension1;
                    $passbook_statement = $req->file('passbook_statement')->move(('uploads'), $filename);

            }else if($student2->passbook_statement){
                $passbook_statement=$student2->passbook_statement;
            }  else {
                $passbook_statement = 'passbook_statement';
            }
            Student::where('student_id',session('rexkod_user_id'))
                    ->update(['account_no' => $req->account_no,
                    're_account_no' => $req->re_account_no,

                    'ifsc_code' => $req->ifsc_code,
                    'bank_name' => $req->bank_name,
                    'bank_branch' => $req->bank_branch,
                    'name_as_per_bank' => $req->name_as_per_bank,
                    'passbook_statement' => $passbook_statement,
            ]);
        }
        elseif ($req->bank_submit) {
            # code...
            Student::where('student_id',session('rexkod_user_id'))
                    ->update(['hobby' => $req->hobby,
                    'achievements' => $req->achievements,

                    'description' => $req->description,
                    'mother_tongue' => $req->mother_tongue,
            ]);
        }

        // $student->student_id= session('rexkod_user_id');
        // $student->f_name= $req->f_name;
        // $student->l_name= $req->l_name;
        // // $student->email= $req->email;
        // $student->phone_no= $req->phone_no;
        // $student->whatsapp_no= $req->whatsapp_no;
        // if (isset($req->same_as_phone)) {
        //     $same_as_phone = 1;
        // } else {
        //     $same_as_phone = 0;
        // }
        // $student->same_as_phone= $same_as_phone;
        // $student->dob= $req->dob;
        // $student->gender= $req->gender;
        // $student->religion= $req->religion;
        // $student->category= $req->category;
        // $student->f_name= $req->physically;
        // $student->f_name= $req->aadhar;

        // // files
        // if (!empty($req->file('address_proof'))) {
        //     $extension1 = $req->file('address_proof')->extension();

        //         $filename = Str::random(4) . time() . '.' . $extension1;
        //         $address_proof = $req->file('address_proof')->move(('uploads'), $filename);

        // } else {
        //     $address_proof = 'address_proof';
        // }
        // $student->address_proof= $address_proof;
        // if (!empty($req->file('identity_proof'))) {
        //     $extension1 = $req->file('identity_proof')->extension();

        //         $filename = Str::random(4) . time() . '.' . $extension1;
        //         $identity_proof = $req->file('identity_proof')->move(('uploads'), $filename);

        // } else {
        //     $identity_proof = 'identity_proof';
        // }
        // $student->identity_proof= $identity_proof;

        // $student->save();

        // $result=Student::where('student_id',session('rexkod_user_id'))->first();

        // $data = [
        //     'result' => $result,
        //    ];

        //    dd($data['result']->l_name);
        return view('aprex/add_profile');
    }


// -----------chat----------
    public function message($trainer_id){

        // dd("hgh");
        $trainers=User::where('type','trainer')->get();

            $sent_messages = Message::where('sender_id', Session::get('rexkod_user_id'))->where('receiver_id', $trainer_id)->get();
            $received_messages = Message::where('sender_id', $trainer_id)->where('receiver_id', Session::get('rexkod_user_id'))->get();

        $data =[
            'trainers' => $trainers,
            'trainer_id'=>$trainer_id,
            'sent_messages' => $sent_messages,
            'received_messages' => $received_messages,
        ];
        return view('aprex/message',['data' => $data]);
    }
    public function send_message2(Request $req)
    {
        # code...
        $message = new Message();

        $message->sender_id = Session::get('rexkod_user_id');
        $message->receiver_id = $req->receiver_id;
        $message->message = $req->message;

        $message->save();
        // session()->put('success', 'Message sent successfully');

        return redirect('aprex/message/'.$req->receiver_id);

    }



    public function default_live_stream($id,$tab_id,$video_id=null){

        // Session::put('rexkod_course_id',$id);

        $course=Course::where('id',$id)->first();
        $tutor=$course->course_tutor;
        $sent_messages = Message::where('sender_id', Session::get('rexkod_user_id'))->where('receiver_id', $tutor)->get();
        $received_messages = Message::where('sender_id', $tutor)->where('receiver_id', Session::get('rexkod_user_id'))->get();
        $courses = Course::get();
// dd($courses[5]->sections[0]->section_video);
        $trainer = User::where('id',$tutor)->first();
        $mini_projects=Mini_project::where('course_id',$id)->get();

        $notes = Note::where('student_id',session('rexkod_user_id'))->where('course_id',$id)->get();
        // dd($notes);
        $data =[
            // 'trainers' => $trainers,
            'id' => $tab_id,
            'trainer'=>$trainer,
            'course'=>$course,
            'sent_messages' => $sent_messages,
            'received_messages' => $received_messages,
            'notes' => $notes,
            'mini_projects' => $mini_projects,
            'video_id' => $video_id,
        ];
        // die($course);
        return view('aprex/default_live_stream',['data' => $data]);
    }

    public function qna_view()
    {
        # code...
        $courses=Course::get();
        $qna = Qna::where('q_created_by',Session::get('rexkod_user_id'))->get();
        $data=[
            'courses'=>$courses,
            'qna' => $qna,
        ];
        // dd($qna);
        return view('aprex/qna',['data' => $data]);
    }
    public function qna(Request $req)
    {
        # code...
        $qna = new Qna();

        $qna->course = $req->course;
        $qna->question = $req->question;
        $qna->q_created_by = session('rexkod_user_id');

        $qna->save();
        session()->put('success', 'Question Submitted');
        return redirect('aprex/qna');
    }

    public function jobs()
    {
        # code...
        $all_jobs=Job_detail::get();
        $data=[
            'all_jobs' => $all_jobs,
        ];

        return view('aprex/jobs',['data' => $data]);
    }
    public function apply_job(Request $req)
    {
        # code...
        $job_application =new Job_application();
        $job_application->job_id = $req->job_id;
        $job_application->student_id = session('rexkod_user_id');
        $job_application->save();

        return redirect('aprex/jobs');
    }

    public function internships()
    {
        # code...
        $all_internships=Internship::get();
        $data=[
            'all_internships' => $all_internships,
        ];

        return view('aprex/internships',['data' => $data]);
    }
    public function apply_internship(Request $req)
    {
        # code...
        $internship_application =new Internship_application();
        $internship_application->internship_id = $req->internship_id;
        $internship_application->student_id = session('rexkod_user_id');
        $internship_application->save();

        return redirect('aprex/internships');
    }

    function default_user_profile(){

        $all_internships=Internship_application::where('student_id',session('rexkod_user_id'))->get();
        $all_qna=Qna::where('q_created_by',session('rexkod_user_id'))->get();
        $quiz_result=Quiz_result::where('user_id',session('rexkod_user_id'))->get();
        $all_jobs = Job_application::where('student_id',session('rexkod_user_id'))->get();
        $student_details =Student::where('student_id',session('rexkod_user_id'))->first();
        $courses = Enrolled_course::where('student_id',session('rexkod_user_id'))->get();
        $data=[
            'all_internships' => $all_internships,
            'all_qna' => $all_qna,
            'quiz_result' => $quiz_result,
            'all_jobs' => $all_jobs,
            'student_details' => $student_details,
            'courses' => $courses,
        ];

        return view('aprex/default_user_profile',['data' => $data]);
    }

    public function code()
    {
        # code...

        return view('aprex/code');
    }
    public function project()
    {
        # code...

        return view('aprex/project');
    }

    public function prog($prog)
    {
        # code...
        $data=[
            'prog' => $prog,
        ];

        return view('aprex/prog',['data' => $data]);
    }

    public function sitemap()
    {
        # code...

        return view('aprex/sitemap');
    }
    public function start_course(Request $req)
    {
        # code...
        $course =new Enrolled_course();

        $course->student_id = session('rexkod_user_id');
        $course->course_id = $req->course_id;
        $course->save();
        return redirect('aprex/default_live_stream/'.$req->course_id . '/0');
    }

    public function all_courses()
    {
        # code...
        // $courses =Course::get();
        $enrolled_course = DB::table('course')
            ->join('enrolled_courses', 'course.id', '=', 'enrolled_courses.course_id')
            ->select('course.*','enrolled_courses.*')
            ->where('enrolled_courses.student_id',session('rexkod_user_id'))
            ->get();
        $data=[
            'enrolled_course' => $enrolled_course,
        ];
        return view('aprex/all_courses',['data' => $data]);
    }

    public function take_assesment($course,$section,$video)
    {
        # code...
        $courses = Course::where('id',$course)->first();
        $assesment = Assesment::where('course_id',$course)->where('section_name',$section)->where('video',$video)->get();
        $data=[
            'course' => $course,
            'section' => $section,
            'video' => $video,
            'assesment' => $assesment,
            'courses' => $courses,
        ];
        // dd($assesment);
        return view('aprex/take_assesment',['data' => $data]);
    }
    public function assesment_submit(Request $req,$course,$section,$video)
    {
        # code...

        $result=new Assesment_result;
        $result->user_id= session('rexkod_user_id');



        // $quiz=Quiz::where('id',$id)->first();
        // dd($quiz->questions);
        // $all_questions= explode(',',$quiz->questions);

        // dd($all_questions);
        // $answer_selected[] = null;
        $assesments = Assesment::where('course_id',$course)->where('section_name',$section)->where('video',$video)->get();

        $count=1;
        $score=0;
        foreach ($assesments as $assesment) {
            $answer_selected[]=$req->{'que_'. $count .'_selected'};
            if($assesment->answer == $req->{'que_'. $count .'_selected'}){
                $score++;

            }
            $questions[] = $assesment->id;
            $count++;
        }
        $new_answer = implode(',', $answer_selected);
        $new_questions=implode(',', $questions);
        // dd($new_answer);
        $result->user_answer =	$new_answer;

        // $count2=1;
        // $score=0;
        // foreach ($assesments as $assesment) {
        //     // $quiz_master=Quiz_master::where('id',$question)->first();
        //     // $assesment_answer=$assesment->answer;
        //     // echo $assesment_answer;
        //     if($assesment->answer == $req->{'que_'. $count .'_selected'}){
        //         $score++;
        //         $count2++;
        //     }
        // }
        // dd($score);
        $result->score= $score;

        $result->questions = $new_questions;
        $result->course_id = $course;
        $result->section_name=$section;
        $result->video=$video;


        // $result->save();
        // return redirect("all_quiz");
        // dd($answer_selected);
        // return redirect('view_score/'.$id);
        // return redirect('default_live_stream/'.$course . '/0');
        if($result->save()){
            session()->put('success', "Your Assesment submitted successfully");
            return redirect('aprex/assesment_result/'.$result->id);
        }else{
            session()->put('failed', 'Your Assesment not submitted, Try again!');
            return redirect()->back();
        }
        // return redirect('aprex/assesment_result/'.$result->id);
    }
    public function assesment_result($id){

        $result = Assesment_result::where('id', $id)->first();
        $course=Course::where('id',$result->course_id)->first();
        $data = [
            'result' => $result,
            'course' => $course,
           ];
        return view('aprex/assesment_result',['data' => $data]);
    }

    function take_test($course_id,$id){
        $course=Course::where('id',$course_id)->first();
        $all_quiz=Quiz::where('id',$id)->first();
        // $subject_id=$all_quiz;
        $data = [
            'course'=>$course,
            'course_id' =>$course_id,
            'all_quiz' => $all_quiz,
           ];
        return view('aprex/take_test',['data' => $data]);
        // return view('aprex/take_quiz');
    }
    // function test_submit($id){
    //     $all_quiz=Quiz::where('id',$id)->first();
    //     // $subject_id=$all_quiz;
    //     $data = [
    //         'all_quiz' => $all_quiz,
    //        ];
    //     return view('aprex/take_quiz',['data' => $data]);
    //     // return view('aprex/take_quiz');
    // }
    function test_submit(Request $req,$id){
        $result=new Quiz_result;


        $quiz=Quiz::where('id',$id)->first();
        // dd($quiz->questions);
        $all_questions= explode(',',$quiz->questions);
        $count=1;
        // dd($all_questions);
        // $answer_selected[] = null;
        foreach ($all_questions as $question) {
            $answer_selected[]=$req->{'que_'. $count .'_selected'};
            $count++;
        }
        $new_answer = implode(',', $answer_selected);
        // dd($new_answer);
        $count2=1;
        $score=0;
        foreach ($all_questions as $question) {
            $quiz_master=Quiz_master::where('id',$question)->first();
            $quiz_answer=$quiz_master->answer;
            if($quiz_answer == $req->{'que_'. $count2 .'_selected'}){
                $score++;
                $count2++;
            }
        }
        $questionsArray = explode(",", $quiz->questions);
        $totalQuestions = count($questionsArray);

        if ($score != 0) {
            $score_percentage = ($score / $totalQuestions) * 100;
        } else {
            $score_percentage = 0;
        }
        // dd($score);
        $result->user_answer =	$new_answer;
        $result->quiz_id = $id;
        $result->questions=$quiz->questions;
        $result->score= $score;
        $result->score_percentage = $score_percentage;
        $result->user_id= session('rexkod_user_id');
        // $result->save();
        // return redirect("all_quiz");
        // dd($answer_selected);
        // return redirect('default_live_stream/'.$req->course_id . '/0');
        if($result->save()){
            session()->put('success', "Your Test submitted successfully");
            return redirect('aprex/view_test_score/'.$id .'/'.$req->course_id);
        }else{
            session()->put('failed', 'Your Test not submitted, Try again!');
            return redirect()->back();
        }
        // return redirect('aprex/view_test_score/'.$id .'/'.$req->course_id);
    }
    function view_test_score($id,$course_id){

        $course=Course::where('id',$course_id)->first();
        $result=Quiz_result::where('quiz_id',$id)
                            ->where('user_id',session('rexkod_user_id'))
                            ->latest()->first();
        // dd($result);
        $data = [
            'course' => $course,
            'result' => $result,
           ];

        return view('aprex/view_test_score',['data' => $data]);
    }

    public function start_project($id)
    {
        # code...
        $course=Course::where('id',$id)->first();
        $mini_project=Mini_project::where('id',$id)->first();
        $data=[
            'course' => $course,
            'project'=> $mini_project,
        ];
        return view('aprex/start_project',['data' => $data]);
    }
    public function start_internship($id)
    {
        # code...
        return view('aprex/start_internship');
    }



    public function single_course_test($id,$tab_id){

        // Session::put('rexkod_course_id',$id);

        $course=Course::where('id',$id)->first();
        $tutor=$course->course_tutor;
        $sent_messages = Message::where('sender_id', Session::get('rexkod_user_id'))->where('receiver_id', $tutor)->get();
        $received_messages = Message::where('sender_id', $tutor)->where('receiver_id', Session::get('rexkod_user_id'))->get();
        $courses = Course::get();
// dd($courses[5]->sections[0]->section_video);
        $trainer = User::where('id',$tutor)->first();
        $mini_projects=Mini_project::where('course_id',$id)->get();

        $notes = Note::where('student_id',session('rexkod_user_id'))->where('course_id',$id)->get();
        // dd($notes);
        $data =[
            // 'trainers' => $trainers,
            'id' => $tab_id,
            'trainer'=>$trainer,
            'course'=>$course,
            'sent_messages' => $sent_messages,
            'received_messages' => $received_messages,
            'notes' => $notes,
            'mini_projects' => $mini_projects,
        ];
        return view('aprex/single_course_test',['data' => $data]);
    }

    public function lab($subject,$id){
        $lab = Lab::where('code',$id)->first();
        $course=Course::where('id',$lab->course_id)->first();
        $data =[
            'course' => $course,

        ];
        return view('aprex/lab',['data' => $data]);
    }
    public function ebook($id){
        $video = Video::where('id',$id)->first();
        $course=Course::where('id',$video->course_id)->first();
        $data =[
            'course' => $course,

        ];
        return view('aprex/ebook',['data' => $data]);
    }

    // ================================================== som ====================================================
    public function createStudentSubscription()
    {
        $susbcription = new Subscription();
        $susbcription->student_id = Session::get('rexkod_user_id');
        $susbcription->start_date = date('Y-m-d H:i:s');
        $susbcription->created_at = date('Y-m-d H:i:s');
        $susbcription->end_date = \Carbon\Carbon::now()->addYear()->format('Y-m-d H:i:s');
        if($susbcription->save()){
            session()->put('success', "Your student subscription has been created successfully");
            return redirect('/aprex/all_courses');

        }else{
            session()->put('failed', 'Your student subscription not created, Try again!');
            return redirect()->back();
        }

    }

    public function subscriptions()
    {
        return view('admin.subscriptions', [
            'subscriptions' => Subscription::get(),
        ]);
    }
    public function forums()
    {
        return view('aprex.forums', [
            'forum_questions' => Forum_question::get(),
        ]);
    }
    public function add_forum()
    {
        return view('aprex.add_forum', [
        ]);
    }

    public function create_forum(Request $request)
    {
        $forumQuestion = new Forum_question();
        $forumQuestion->student_id = Session::get('rexkod_user_id');
        $forumQuestion->question = $request->question;
        $forumQuestion->created_at = date('Y-m-d H:i:s');
        if($forumQuestion->save()){
            session()->put('success', "Your Question submitted successfully");
            return redirect('aprex/forums');

        }else{
            session()->put('failed', 'Your Question not submitted, Try again!');
            return redirect()->back();
        }

    }

    public function view_forum($question_id)
    {
        return view('aprex.view_forum', [
            'forum_question' => Forum_question::where('id',$question_id)->first(),
            'forum_answers' => Forum_answer::where('forum_question_id',$question_id)->get(),
        ]);
    }

    public function answer_forum($question_id)
    {
        return view('aprex.answer_forum', [
            'forum_question' => Forum_question::where('id',$question_id)->first(),
        ]);
    }

    public function create_forum_answer(Request $request)
    {
        $forumAnswer = new Forum_answer();
        $forumAnswer->forum_question_id = $request->forum_question_id;
        $forumAnswer->student_id = Session::get('rexkod_user_id');
        $forumAnswer->answer = $request->answer;
        $forumAnswer->created_at = date('Y-m-d H:i:s');
        if($forumAnswer->save()){
            session()->put('success', "Your answer submitted successfully");
            return redirect("aprex/view_forum/".$request->forum_question_id);

        }else{
            session()->put('failed', 'Your answer not submitted, Try again!');
            return redirect()->back();
        }

    }


    public function create_student_refferal(Request $request)
    {
        // dd($request);
        $student_referral = new Student_referral();
        $student_referral->referred_to = Session::get('rexkod_user_id');
        $student_referral->referred_by = $request->referred_by;
        $student_referral->created_at = date('Y-m-d H:i:s');

        if($student_referral->save()){
            session()->put('success', "Your student Student referral has been created successfully");
            return redirect('aprex/payment');

        }else{
            session()->put('failed', 'Your student Student referral not created, Try again!');
            return redirect()->back();
        }

    }






    public function view_certificate($course_id, $test_id)
    {
        // dd($test_id);
        return view('aprex.view_certificate', [
            'course' => Course::where('id',$course_id)->first(),
            // 'quiz_result' => Quiz_result::where('quiz_id', $test_id)->where('user_id', session('rexkod_user_id'))->latest()->first(),
            'quiz_result' => $test_id,
        ]);
    }


    public function payment(){

        return view('aprex.payment', [
            'student_referrals' => Student_referral::where('referred_by', Session::get('rexkod_user_id'))->get(),
        ]);
    }


    public function search_questions(Request $request)
    {
        $term = $request->input('term');

        $questions = DB::table('qnas')
            ->where('question', 'like', $term . '%')
            ->get();

        if ($questions->count() > 0) {
            foreach ($questions as $question) {
                echo "<p data-id = '".$question->id."'>" . $question->question . "</p>";
            }
        } else {
            echo "<p>No matches found</p>";
        }
    }
    public function qna_single($id){
        $qna = Qna::where('id',$id)->first();
        $data=[
            'qna'=> $qna,
        ];
         return view('aprex.qna_single',['data' => $data]);
    }

    public function change_password_view()
    {
        $user = User::where('id', session('rexkod_user_id'))->first();
        $data=[
            'user'=> $user,
        ];

        return view('aprex/change_password', ['data' => $data]);
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
        Session::put('rexkod_user_email', $user->email);

        Student::where('student_id', session('rexkod_user_id'))
        ->update(['f_name' => $user->name,
        'email' => $user->email,
            ]);
            session()->put('success', "Settings Updated");
        return redirect('/aprex/index');
    }
}




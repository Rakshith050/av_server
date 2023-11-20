<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Abc;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Recruiters;
use App\Http\Controllers\Trainers;
use App\Http\Controllers\Aprex;
use App\Http\Controllers\Ebook;
use App\Http\Controllers\Parents;
use App\Http\Controllers\Sub_admin;

use App\Models\Video_hls_secret;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// =============admin=======================
Route::get("/admin",[Admin::class,'login']);
Route::POST("/admin/login",[Admin::class,'admin_login']);
Route::get("/admin/index",[Admin::class,'index']);
Route::get("/admin/logout",[Abc::class,'logout']);



Route::get("/admin/add_question",[Admin::class,'add_question_view']);
Route::post("/admin/add_question",[Admin::class,'add_question']);

Route::get("/admin/add_subject",[Admin::class,'add_subject_view']);
Route::post("/admin/add_subject",[Admin::class,'add_subject']);

Route::get("/admin/create_quiz",[Admin::class,'create_quiz_view']);
Route::post("/admin/create_quiz",[Admin::class,'create_quiz']);

Route::get("/admin/add_quiz",[Admin::class,'add_quiz']);


Route::get("/admin/quiz_master",[Admin::class,'quiz_master']);
// Route::post("/quiz_master/{id}",[Abc::class,'quiz_master']);


Route::get("/admin/edit_subject/{id}",function(){
    return view('users.edit_subject');
});

Route::get("/admin/add_question_to_quiz/{id}",[Admin::class,'add_question_to_quiz']);

Route::get("/admin/delete_question_from_quiz/{id}",[Admin::class,'delete_question_from_quiz']);

Route::get("/admin/create_course",function(){
    return view('admin.create_course');
});
Route::post("/admin/create_course",[Admin::class,'create_course']);

Route::get("/admin/all_users",[Admin::class,'all_users']);

Route::get("/admin/create_internship",[Admin::class,'create_internship_view']);
Route::post("/admin/create_internship",[Admin::class,'create_internship']);

Route::get("/admin/all_internships",[Admin::class,'all_internships']);
Route::get("/admin/internship_applications/{id}",[Admin::class,'internship_applications']);

Route::get("/admin/sitemap",[Admin::class,'sitemap']);

Route::get("/admin/create_assesments",[Admin::class,'create_assesments_view']);
Route::post("/admin/create_assesments",[Admin::class,'create_assesments']);

Route::get("/admin/get_sections",[Admin::class,'get_sections']);
Route::get("/admin/get_sections2",[Admin::class,'get_sections2']);
Route::get("/admin/get_videos",[Admin::class,'get_videos']);

Route::get("/admin/add_videos",[Admin::class,'add_videos_view']);
Route::post("/admin/add_videos",[Admin::class,'add_videos']);

Route::get("/admin/all_courses",[Admin::class,'all_courses']);
Route::get("/admin/default_course_details/{id}",[Admin::class,'default_course_details']);
Route::get("/admin/default_settings",[Admin::class,'default_settings']);
Route::get("/admin/tests",[Admin::class,'tests']);
Route::get("/admin/quizzes",[Admin::class,'quizzes']);
Route::get("/admin/assesments",[Admin::class,'assesments']);
Route::get("/admin/all_jobs",[Admin::class,'all_jobs']);
Route::get("/admin/job_applications/{id}",[Admin::class,'job_applications']);

Route::get("/admin/all_results/{id}",[Admin::class,'all_results']);

Route::get("/admin/create_mini_projects",[Admin::class,'create_mini_projects_view']);
Route::post("/admin/create_mini_projects",[Admin::class,'create_mini_projects']);
Route::get("/admin/mini_projects",[Admin::class,'mini_projects']);

Route::get("/admin/test_details/{id}",[Admin::class,'test_details']);
Route::get("/admin/view_assesment_single/{id}",[Admin::class,'view_assesment_single']);
Route::get("/admin/enrolled_students/{id}",[Admin::class,'enrolled_students']);
Route::get("/admin/quiz_details/{id}",[Admin::class,'quiz_details']);

Route::get("/admin/labs",[Admin::class,'labs']);
Route::get("/admin/add_lab",[Admin::class,'add_lab_view']);
Route::post("/admin/add_lab",[Admin::class,'add_lab']);
Route::get("/admin/create_task",[Admin::class,'create_task_view']);
Route::post("/admin/create_task",[Admin::class,'create_task']);

Route::get("/admin/change_password",[Admin::class,'change_password_view']);
Route::post("/admin/change_password",[Admin::class,'change_password']);

Route::post("/admin/add_trainer",[Admin::class,'add_trainer']);
Route::get("/admin/student_profile/{id}",[Admin::class,'student_profile']);

Route::get("/admin/create_project_task",[Admin::class,'create_project_task_view']);
Route::post("/admin/create_project_task",[Admin::class,'create_project_task']);



// ================teacher=====================

Route::get("/teacher/school_qna",[Trainers::class,'school_qna']);
Route::get("/teacher/school_qna_answer/{id}",[Trainers::class,'school_qna_answer_view']);
Route::post("/teacher/school_qna_answer",[Trainers::class,'school_qna_answer']);

Route::get("/teacher/school_message/{id}",[Trainers::class,'school_message']);
Route::post("/teacher/school_send_message",[Trainers::class,'school_send_message']);

// =================users=======================
Route::get("/",[Abc::class,'login']);
Route::get("/index",[Abc::class,'index']);

Route::get("/register",[Abc::class,'register']);
Route::post("/register",[Abc::class,'user_register']);

Route::get("/login",[Abc::class,'login']);
Route::post("/login",[Abc::class,'user_login']);

Route::get("/logout",[Abc::class,'logout']);







// ======ebook========
Route::get("/admin/all_ebooks",[Admin::class,'all_ebooks']);
Route::get("/admin/create_ebook",[Admin::class,'create_ebook_view']);
Route::post("/admin/create_ebook",[Admin::class,'create_ebook']);
Route::get("/admin/view_modules/{ebook_id}",[Admin::class,'view_modules']);
Route::get("/admin/add_section/{module_id}",[Admin::class,'add_section_view']);
Route::post("/admin/add_section/{module_id}",[Admin::class,'add_section']);
Route::get("/admin/add_elements/{section_id}",[Admin::class,'add_elements_view']);
Route::post("/admin/add_elements/{section_id}",[Admin::class,'add_elements']);
Route::get("/admin/preview_ebook/{ebook_id}",[Admin::class,'preview_ebook']);


//    ========================== project_reports ======================

Route::get("/admin/project_reports",[Admin::class,'project_reports']);
Route::get("/admin/create_project_reports",[Admin::class,'create_project_reports_view']);
Route::post("/admin/create_project_report",[Admin::class,'create_project_report']);
Route::get("/admin/project_report_modules/{project_report_id}",[Admin::class,'project_report_modules']);
Route::get("/admin/preview_project_report/{project_report_id}",[Admin::class,'preview_project_report']);
Route::get("/admin/add_project_report_elements/{project_report_id}",[Admin::class,'add_project_report_elements_view']);
Route::post("/admin/add_project_report_elements/{project_report_id}",[Admin::class,'add_project_report_elements']);


//    ========================== use_cases ======================

Route::get("/admin/use_cases",[Admin::class,'use_cases']);
Route::get("/admin/create_use_case",[Admin::class,'create_use_case_view']);
Route::post("/admin/create_use_case",[Admin::class,'create_use_case']);
Route::get("/admin/use_case_modules/{use_case_id}",[Admin::class,'use_case_modules']);
Route::get("/admin/preview_use_case/{use_case_id}",[Admin::class,'preview_use_case']);
Route::get("/admin/add_use_case_elements/{use_case_id}",[Admin::class,'add_use_case_elements_view']);
Route::post("/admin/add_use_case_elements/{use_case_id}",[Admin::class,'add_use_case_elements']);



//    ========================== school students ======================

Route::post("/connect_parent",[Abc::class,'connect_parent']);
Route::get("/all_subjects",[Abc::class,'all_subjects']);
Route::get("/subject_live_stream/{subject_id}/{tab_id}",[Abc::class,'subject_live_stream']);
Route::post("/save_video_timestamp_school",[Abc::class,'save_video_timestamp_school']);
// Route::get("/retrieve_last_video_played/{course_id}",[Abc::class,'retrieve_last_video_played']);
Route::post("/update_video_status_school",[Abc::class,'update_video_status_school']);
Route::get("/take_assesment_school/{course}/{section}/{video}",[Abc::class,'take_assesment_school']);
Route::post("/assesment_submit_school/{course}/{section}/{video}",[Abc::class,'assesment_submit_school']);

Route::get("/assesment_result_school/{id}",[Abc::class,'assesment_result_school']);
Route::get("/take_school_test/{subject_id}/{id}",[Abc::class,'take_school_test']);
Route::post("/school_test_submit/{id}",[Abc::class,'school_test_submit']);
Route::get("/view_school_test_score/{id}/{subject_id}",[Abc::class,'view_school_test_score']);
Route::get("/view_subject_certificate/{subject_id}/{test_id}",[Abc::class,'view_subject_certificate']);
Route::get("/view_school_project/{id}",[Abc::class,'view_school_project']);

Route::get("/start_school_project/{id}/{lab}",[Abc::class,'start_school_project']);
Route::get("/update_school_project_task_status/{id}",[Abc::class,'update_school_project_task_status']);
Route::get("/continue_school_project_task/{id}/{lab}",[Abc::class,'continue_school_project_task']);
Route::post("/save_school_notes",[Abc::class,'save_school_notes']);

Route::get("/school_qna",[Abc::class,'school_qna_view']);
Route::post("/school_qna",[Abc::class,'school_qna']);

Route::get("/search_school_questions",[Abc::class,'search_school_questions']);
Route::get("/school_qna_single/{id}",[Abc::class,'school_qna_single']);
Route::post("/school_send_message",[Abc::class,'school_send_message']);

Route::get("/school_forums",[Abc::class,'school_forums']);
Route::post("/school_create_forum",[Abc::class,'school_create_forum']);
Route::get("/school_search_forum_questions",[Abc::class,'school_search_forum_questions']);
Route::get("/view_forum/{question_id}",[Abc::class,'view_forum']);
Route::get("/view_school_forum/{question_id}",[Abc::class,'view_school_forum']);
Route::get("/add_school_forum",[Abc::class,'add_school_forum']);
Route::get("/answer_school_forum/{question_id}",[Abc::class,'answer_school_forum']);
Route::post("/create_school_forum_answer",[Abc::class,'create_school_forum_answer']);
Route::post("/create_school_forum",[Abc::class,'create_school_forum']);


// ===================admin---school ==================


// ===================sub admin---school ==================

Route::post("/sub_admin/add_school_elements",[Admin::class,'add_school_elements']);
Route::get("/sub_admin/add_student",[Admin::class,'add_student_view']);
Route::POST("/sub_admin/add_student",[Admin::class,'add_student']);
Route::get("/sub_admin/all_students",[Admin::class,'all_students']);
Route::get("/sub_admin/all_teachers",[Admin::class,'all_teachers']);
Route::get("/sub_admin/add_teacher",[Admin::class,'add_teacher_view']);
Route::POST("/sub_admin/add_teacher",[Admin::class,'add_teacher']);
Route::get("/admin/getSubjects/{class_id}",[Admin::class,'getSubjects']);

// ========admin--class-subject-chapter-video========
Route::get("/admin/add_chapters",[Admin::class,'add_chapters_view']);
Route::post("/admin/add_chapters",[Admin::class,'add_chapters']);
Route::get("/admin/add_chapter_videos",[Admin::class,'add_chapter_videos_view']);
Route::post("/admin/add_chapter_videos",[Admin::class,'add_chapter_videos']);
Route::get("/admin/get_chapters",[Admin::class,'get_chapters']);
Route::get("/admin/get_subjects",[Admin::class,'get_subjects']);
Route::get("/admin/get_chapter_videos",[Admin::class,'get_chapter_videos']);
Route::get("/admin/school_courses",[Admin::class,'school_courses']);
Route::get("/admin/add_school_subject",[Admin::class,'add_school_subject_view']);
Route::post("/admin/add_school_subject",[Admin::class,'add_school_subject']);
Route::get("/admin/schools",[Admin::class,'schools']);
Route::get("/admin/add_school",[Admin::class,'add_school_view']);
Route::get("/admin/school_assesments",[Admin::class,'school_assesments']);
Route::get("/admin/create_school_assesments",[Admin::class,'create_school_assesments_view']);
Route::post("/admin/create_school_assesments",[Admin::class,'create_school_assesments']);
Route::get("/admin/view_school_assesments/{id}",[Admin::class,'view_school_assesments']);
Route::get("/admin/school_tests",[Admin::class,'school_tests']);
Route::get("/admin/add_school_questions",[Admin::class,'add_school_questions_view']);
Route::post("/admin/add_school_questions",[Admin::class,'add_school_questions']);
Route::get("/admin/create_school_test",[Admin::class,'create_school_test_view']);
Route::post("/admin/create_school_test",[Admin::class,'create_school_test']);
Route::get("/admin/add_questions_to_test_view/{test_id}",[Admin::class,'add_questions_to_test_view']);
Route::get("/admin/add_questions_to_test/{test_id}/{que_id}",[Admin::class,'add_questions_to_test']);
Route::get("/admin/delete_question_from_test/{test_id}/{que_id}",[Admin::class,'delete_question_from_test']);
Route::get("/admin/school_test_results/{id}",[Admin::class,'school_test_results']);
Route::get("/admin/school_test_details/{id}",[Admin::class,'school_test_details']);
Route::get("/admin/school_test_master",[Admin::class,'school_test_master']);

Route::get("/admin/create_school_projects",[Admin::class,'create_school_projects_view']);
Route::post("/admin/create_school_projects",[Admin::class,'create_school_projects']);
Route::get("/admin/school_mini_projects",[Admin::class,'school_mini_projects']);
Route::get("/admin/create_school_project_task",[Admin::class,'create_school_project_task_view']);
Route::post("/admin/create_school_project_task",[Admin::class,'create_school_project_task']);


// =====================parent========================
Route::get("/parents/index",[Parents::class,'index']);
Route::get("/parents/change_password",[Parents::class,'change_password_view']);
Route::get("/parents/student_enrolled_courses/{student_id}",[Parents::class,'student_enrolled_courses']);
Route::get("/parent/test_results/{course_id}/{student_id}",[Parents::class,'test_results']);
Route::get("/parents/assessments/{student_id}",[Parents::class,'assessments']);
Route::get("/parents/tests/{student_id}",[Parents::class,'tests']);




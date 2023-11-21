<?php

use Illuminate\Http\Request;
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
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/get_subjects/{classId}", [Abc::class, 'get_subjects']);
Route::post("/login", [Abc::class, 'login']);
Route::post("/submitSchoolQna", [Abc::class, 'submitSchoolQna']);
Route::post("/submitSchoolForum", [Abc::class, 'submitSchoolForum']);
Route::get("/search_school_questions/{data}", [Abc::class, 'search_school_questions']);
Route::get("/school_search_forum_questions/{data}", [Abc::class, 'school_search_forum_questions']);
Route::get("/get_school_qna_single/{qna_id}", [Abc::class, 'get_school_qna_single']);
Route::get("/get_school_forum_single/{forum_id}", [Abc::class, 'get_school_forum_single']);
Route::post("/submitSchoolForumAnswer/{forum_id}", [Abc::class, 'submitSchoolForumAnswer']);
Route::post("/connect_parent", [Abc::class, 'connect_parent']);
Route::get("/get_parent/{parent_id}", [Abc::class, 'get_parent']);
Route::get("/subject_stream/{student_id}/{subject_id}", [Abc::class, 'subject_stream']);
Route::get("/get_assesments_for_video/{video_id}", [Abc::class, 'get_assesments_for_video']);
Route::post("/submit_assessment", [Abc::class, 'submit_assessment']);
Route::get("/get_subject_by_video/{video_id}", [Abc::class, 'get_subject_by_video']);
Route::get("/get_tests/{test_id}", [Abc::class, 'get_tests']);
Route::post("/test_submit", [Abc::class, 'test_submit']);
Route::get("/get_project_tasks/{project_id}", [Abc::class, 'get_project_tasks']);
Route::get("/get_project_task_todo/{user_id}/{project_id}", [Abc::class, 'get_project_task_todo']);
Route::get("/update_project_task_status/{task_id}", [Abc::class, 'update_project_task_status']);
Route::get("/start_project_task/{user_id}/{task_id}", [Abc::class, 'start_project_task']);
Route::get("/get_test_score/{tet_id}/{user_id}", [Abc::class, 'get_test_score']);
Route::get("/get_student_details/{user_id}", [Abc::class, 'get_student_details']);


Route::get("/get_markers", [Abc::class, 'get_markers']);
Route::post("/save_marker", [Abc::class, 'save_marker']);


// admin
Route::get("/get_schools", [Admin::class, 'get_schools']);
Route::get("/get_subjects", [Admin::class, 'get_subjects']);
// Route::get("/get_assessments",[Admin::class,'get_assessments']);
Route::get("/get_tests", [Admin::class, 'get_tests']);
Route::get("/get_mini_projects", [Admin::class, 'get_mini_projects']);
Route::get("/get_classes", [Admin::class, 'get_classes']);
Route::get("/get_subjects_by_class/{class_id}", [Admin::class, 'get_subjects_by_class']);
Route::get("/get_chapters_by_subject/{subject_id}", [Admin::class, 'get_chapters_by_subject']);
Route::get("/get_video_by_chapter/{chapter_id}", [Admin::class, 'get_video_by_chapter']);
Route::post("/create_project", [Admin::class, 'create_project']);
Route::post("/create_project_task", [Admin::class, 'create_project_task']);
Route::post("/create_assessment", [Admin::class, 'create_assessment']);
Route::post("/create_question", [Admin::class, 'create_question']);
Route::get("/get_questions_by_subject/{subject}", [Admin::class, 'get_questions_by_subject']);
Route::post("/create_test", [Admin::class, 'create_test']);
Route::post("/add_question_to_test", [Admin::class, 'add_question_to_test']);
Route::get("/get_test_details/{test_id}", [Admin::class, 'get_test_details']);
Route::get("/get_test_results/{test_id}", [Admin::class, 'get_test_results']);
Route::post("/create_subject", [Admin::class, 'create_subject']);
Route::post("/create_chapter", [Admin::class, 'create_chapter']);
Route::post("/create_video", [Admin::class, 'create_video']);
Route::get("/get_child/{parent_id}", [Admin::class, 'get_child']);

Route::get("/get_assessments/{subject_id}", [Admin::class, 'get_assessments']);


// teacher
Route::get("/get_qnas/{trainer_id}", [Trainers::class, 'get_qnas']);
Route::get("/get_qna/{qna_id}", [Trainers::class, 'get_qna']);
Route::post("/answer_qna", [Trainers::class, 'answer_qna']);
Route::get("/get_chat_students/{trainer_id}", [Trainers::class, 'get_chat_students']);
Route::get("/get_messages_for_student/{auth_id}/{student_id}", [Trainers::class, 'get_messages_for_student']);
Route::post("/send_message", [Trainers::class, 'send_message']);

//Sub Admin
//Rakshith
Route::get('/school/api_all_students', [Admin::class, 'api_all_students']);
Route::get('/school/api_get_schools', [Admin::class, 'api_get_schools']);
Route::get('/school/api_get_classes', [Admin::class, 'api_get_classes']);
Route::post('/school/add_student', [Admin::class, 'api_add_student']);
Route::get('/school/api_all_teachers', [Admin::class, 'api_all_teachers']);
Route::get('/admin/apigetClasses', [Admin::class, 'apigetClasses']);
Route::get('/admin/apigetSubjects/{class_id}', [Admin::class, 'apigetSubjects']);
Route::post('/school/api_add_teacher', [Admin::class, 'api_add_teacher']);

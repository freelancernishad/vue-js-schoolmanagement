<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\smsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\api\BlogController;
use App\Http\Controllers\frontendController;
use  App\Http\Controllers\api\authController;
use App\Http\Controllers\api\EventController;
use App\Http\Controllers\api\resultController;
use App\Http\Controllers\api\staffsController;
use App\Http\Controllers\api\GalleryController;
use App\Http\Controllers\api\PaymentController;
use App\Http\Controllers\api\RoutineController;
use App\Http\Controllers\api\HomeworkController;
use App\Http\Controllers\api\studentsController;
use App\Http\Controllers\QuestionbankController;
use App\Http\Controllers\api\SchoolDetailController;
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




Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [authController::class,'login']);
    Route::post('register', [authController::class,'register']);
    Route::post('logout', [authController::class,'logout']);
    Route::post('refresh', [authController::class,'refresh']);
    Route::post('me', [authController::class,'login']);

});



Route::get('/users/get',[MessageController::class ,'usersget']);
Route::get('/conversion/get',[MessageController::class ,'conversionget']);
Route::get('/messages/get',[MessageController::class ,'messagesget']);
Route::post('/message/sent',[MessageController::class ,'messagessent']);



Route::get('/student_at_a_glance',[frontendController::class ,'student_at_a_glance']);



Route::get('/school_id',[SchoolDetailController::class , 'school_id']);
Route::get('/classes',[SchoolDetailController::class , 'class_list']);
Route::get('/years/list', [SchoolDetailController::class,'yearslist']);
Route::get('/imagetobase64', [SchoolDetailController::class,'base64']);

Route::get('/school/settings',[SchoolDetailController::class , 'index']);
Route::post('/school/settings/submit',[SchoolDetailController::class , 'school_update']);

//student routes
Route::get('/students/list',[studentsController::class , 'list']);
Route::get('/students/image/get',[studentsController::class , 'imageget']);
Route::post('/students/image/upload',[studentsController::class , 'imageupload']);
Route::get('/students/single',[studentsController::class , 'singlestudent']);
Route::post('/students/form/submit',[studentsController::class , 'student_submit']);
Route::post('/student/{action}',[studentsController::class , 'student_action']);
Route::get('/student/check',[studentsController::class , 'student_check']);
Route::get('/student/attendance',[studentsController::class , 'student_attendance']);
Route::post('/student/attendance/submit',[studentsController::class , 'student_attendance_submit']);

Route::get('/student/attendance/row',[studentsController::class , 'student_attendance_row']);




//staffs routes
Route::get('/staffs/list',[staffsController::class , 'list']);
Route::get('/staffs/image/get',[staffsController::class , 'imageget']);
Route::post('/staffs/image/upload',[staffsController::class , 'imageupload']);

Route::get('/staffs/single',[staffsController::class , 'singlestaff']);
Route::post('/staffs/form/submit',[staffsController::class , 'staff_submit']);
Route::post('/staff/{action}',[staffsController::class , 'staff_action']);
Route::get('/staff/attendance',[staffsController::class , 'staff_attendance']);
Route::post('/staff/attendance/submit',[staffsController::class , 'staff_attendance_submit']);


//students/payments routes
Route::get('/students/payments',[PaymentController::class , 'payments']);
Route::post('/students/payments/submit',[PaymentController::class , 'payments_submit']);


//routine routes
Route::get('/routines',[RoutineController::class , 'list']);
Route::get('/routines/get',[RoutineController::class , 'all_list']);
Route::get('/routines/check',[RoutineController::class , 'check']);
Route::post('/routines/submit',[RoutineController::class , 'submit']);


//result routes
Route::post('/results/submit',[resultController::class , 'submit']);
Route::get('/results/check',[resultController::class , 'checkResult']);
Route::get('/results/single',[resultController::class , 'checkSingleResult']);
Route::post('/results/publish',[resultController::class , 'publishResult']);



//gallery routes

Route::get('/gallery',[GalleryController::class , 'index']);
Route::get('/gallery/edit',[GalleryController::class , 'galleryedit']);
Route::get('/gallery/delete/{id}',[GalleryController::class , 'galleryDelete']);
Route::get('/gallery_category',[GalleryController::class , 'category']);
Route::get('/gallery_category/delete/{id}',[GalleryController::class , 'categoryDelete']);
Route::post('/gallery_category/submit',[GalleryController::class , 'category_submit']);
Route::post('/gallery/submit',[GalleryController::class , 'gallery_submit']);



//blog routes

Route::get('/blog',[BlogController::class , 'index']);
Route::get('/blog/edit',[BlogController::class , 'blogedit']);
Route::get('/blog/delete/{id}',[BlogController::class , 'blogDelete']);
Route::get('/blog_category',[BlogController::class , 'category']);
Route::get('/blog_category/delete/{id}',[BlogController::class , 'categoryDelete']);
Route::post('/blog_category/submit',[BlogController::class , 'category_submit']);
Route::post('/blog/submit',[BlogController::class , 'blog_submit']);


//event routes

Route::get('/event',[EventController::class , 'index']);
Route::get('/event/edit',[EventController::class , 'eventedit']);
Route::get('/event/delete/{id}',[EventController::class , 'eventDelete']);
Route::post('/event/submit',[EventController::class , 'event_submit']);


//homework routes

Route::get('/homework',[HomeworkController::class , 'index']);
Route::get('/homework/edit',[HomeworkController::class , 'homeworkedit']);
Route::get('/homework/delete/{id}',[HomeworkController::class , 'homeworkDelete']);
Route::post('/homework/submit',[HomeworkController::class , 'homework_submit']);
Route::post('/student/homework/submit',[HomeworkController::class , 'student_homework_submit']);
Route::get('/student/homework/submit/check',[HomeworkController::class , 'student_homework_check']);
Route::get('/student/homework/time/check',[HomeworkController::class , 'student_homework_timecheck']);



Route::post('/sent_sms/submit',[smsController::class , 'sent_sms_submit']);
Route::get('/attendence_sheet/sms/{class}/{view}/{date}/{school_id}',[smsController::class , 'attendence_sheet_sms']);



Route::get('/questionbank',[QuestionbankController::class , 'index']);
Route::get('/questionbank/edit',[QuestionbankController::class , 'questionbankedit']);
Route::get('/questionbank/delete/{id}',[QuestionbankController::class , 'questionbankDelete']);
Route::post('/questionbank/submit',[QuestionbankController::class , 'questionbank_submit']);

    // Route::prefix('v1')->group(function () {




    //     Route::post('login', [authController::class, 'login']);
    //     Route::post('register', [authController::class, 'register']);

    //     Route::get('login', function () {
    //         return sent_error('Unauthorised', '', 401);
    //     })->name('login');

    //     Route::middleware('auth:api')->group(function () {

    //         Route::post('logout', [authController::class, 'logout']);


    //         Route::get('users', [authController::class, 'index']);
    //         Route::post('users/{id}/edit', [authController::class, 'Edit']);
    //         Route::delete('users/{id}/delete', [authController::class, 'delete']);
    //         Route::get('users/restore/{id}', [authController::class, 'restore']);
    //         Route::get('users/restore/', [authController::class, 'restoreAll']);
    //         Route::get('users/deleted/', [authController::class, 'deleted']);
    //         Route::get('users/{id}', [authController::class, 'show']);
    //     });
    // });

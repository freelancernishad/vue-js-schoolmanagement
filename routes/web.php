<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\GalleryController;

use App\Http\Controllers\frontendController;
use App\Http\Controllers\api\resultController;
use App\Http\Controllers\api\PaymentController;
use App\Http\Controllers\api\RoutineController;

use App\Http\Controllers\api\studentsController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\admin\PromotionController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\admin\attendenceController;
use App\Http\Controllers\api\SchoolDetailController;
use App\Http\Controllers\admin\StartAdmissionController;



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
Route::view('/restricted','restricted');
Route::view('/at_a_glance','at_a_glance');
Route::view('/history','history');
Route::view('/gallary','gallary');

Route::get('/',[frontendController::class ,'home']);
Route::get('/teacher',[frontendController::class ,'teacher']);
Route::get('/student_at_a_glance',[frontendController::class ,'student_at_a_glance']);

Route::get('/student_list',[frontendController::class ,'student_list']);
Route::get('/student_list/pdf/{year}/{class}',[frontendController::class ,'student_list_pdf']);

Route::get('/total_student',[frontendController::class ,'total_student']);
Route::get('/public_result',[frontendController::class ,'public_result']);
Route::get('/result',[frontendController::class ,'result']);
Route::get('/view_result',[frontendController::class ,'view_result']);
Route::get('/pdf/{class}/{roll}/{year}/{exam}',[frontendController::class ,'view_result_pdf']);
Route::get('/weakly_result',[frontendController::class ,'weakly_result']);
Route::get('/weakly_result_data',[frontendController::class ,'weakly_result_data']);


Route::get('/admissionOnlineForm',[frontendController::class ,'admissionOnlineForm']);
Route::post('/Admission_checkout',[frontendController::class ,'Admission_checkout']);
Route::post('/Admission_success',[frontendController::class ,'Admission_success']);
Route::get('/check_availability/{nid}',[frontendController::class ,'check_availability']);
Route::get('/check_availabilitytrx/{trx}',[frontendController::class ,'check_availabilitytrx']);

Route::get('/admit/{addId}',[frontendController::class ,'admit']);

Route::get('/routine',[frontendController::class ,'routine']);
Route::get('/notice',[frontendController::class ,'notice']);
Route::get('/blogs',[frontendController::class ,'blogs']);
Route::get('/events',[frontendController::class ,'events']);
Route::get('/contact-us',[frontendController::class ,'contact_us']);
Route::post('/contact-us',[frontendController::class ,'contact_us_post']);




// Route::get('/login',[frontendController::class , 'loginTemplate']);
// Route::get('/teacher/login',[AuthController::class , 'loginTemplate']);
// Route::post('login/submit', [AuthController::class, 'login_submit'])->name('login_submit');





// Route::get('Adminregister', [AuthController::class, 'register'])->name('register');
// Route::post('register_submit', [AuthController::class, 'register_submit'])->name('register_submit');

// // Route::get('/logout', [AuthController::class, 'signOut'])->name('signout');

// Route::get('school/payment/invoice/{id}',[PaymentController::class , 'invoice']);


Route::get('/routines/{school_id}/{class}/{year}/download',[RoutineController::class , 'routine_download'])->name('routines.routine_download');



// Auth::routes();


Route::group(['middleware'=>['api']],function(){


    //school
    Route::group(['prefix'=>'school'],function(){

        // Route::get('students/card',[studentsController::class , 'card_form']);
        Route::post('students/card/submit',[studentsController::class , 'card_form_submit']);
        Route::get('student/card/{class}/{id}/{school_id}',[studentsController::class , 'card']);

        Route::get('/attendence_sheet/pdf/{school_id}/{class}/{view}/{date}',[studentsController::class , 'attendence_sheet_result_pdf']);

        Route::get('student/{school_id}/{class}/{year}/{type}/paymnetsheet', [PaymentController::class,'paymentsheet']);

      Route::get('/result_sheet/pdf/{school_id}/{group}/{class}/{exam}/All/{date}',[resultController::class , 'resultViewpdf']);

      Route::get('/student_list/pdf/{year}/{class}/{student_id}',[studentsController::class ,'student_list_pdf']);


        // Route::get('/',[AuthController::class , 'dashboard']);

    //     Route::get('/student_list/pdf/{year}/{class}',[frontendController::class ,'student_list_pdf']);

    //     Route::get('/add_payment',[PaymentController::class , 'add_payment']);
    //     Route::get('/checkStudent',[PaymentController::class , 'checkStudent']);
    //     Route::get('/payment',[PaymentController::class , 'payment']);

    //     Route::post('/payment/submit',[PaymentController::class , 'payment_submit']);
    //     Route::post('/payment/search',[PaymentController::class , 'payment_search'])->name('payment_search');

    //     Route::resource('student/{class}/{month}/{year}/{type}/payment', PaymentController::class);

    //     Route::get('student/{class}/{year}/{type}/sheet', [PaymentController::class,'paymentsheet']);


    //     //staffsController
    //     Route::get('/staffs',[staffsController::class , 'list']);
    //     Route::get('/staffs/form',[staffsController::class , 'add']);

    //     Route::get('/staffs/attendance',[staffsController::class , 'attendance']);
    //     Route::post('/attendance/search',[staffsController::class , 'attendence_sheet_search']);
    //     Route::get('/attendence/{view}/{date}',[staffsController::class , 'attendence_sheet_result']);
    //     Route::post('/attendence/submit',[staffsController::class , 'attendence_sheet_submit']);

    //     Route::get('/attendence/edit/{id}/view',[staffsController::class , 'attendence_sheet_edit']);
    //     Route::post('/attendence/edit/submit',[staffsController::class , 'attendence_sheet_edit_submit']);


    //     Route::post('/staffs/form/submit',[staffsController::class , 'staffs_submit']);
    //     Route::get('/staffs/view/{id}',[staffsController::class , 'staffs_view']);
    //     Route::get('/staffs/edit/{id}',[staffsController::class , 'edit']);
    //     Route::get('/staffs/action/{type}/{id}',[staffsController::class , 'staffs_action']);
    //     Route::post('/staffs/image/upload',[staffsController::class , 'staffs_image']);







    //     //studentsController

    //     Route::get('/students/{status}/edit/{id}',[studentsController::class , 'edit']);
    //     // Route::get('/students/form',[studentsController::class , 'add']);

    //     Route::get('/student/view/{id}',[studentsController::class , 'student_view']);
    //     Route::get('/student/action/{type}/{id}',[studentsController::class , 'student_action']);


    //     Route::get('student/image/{id}',[studentsController::class , 'student_image_form']);



    //     Route::post('/students/image/upload',[studentsController::class , 'student_image']);



    //     Route::get('/students/{status}/{class}/list',[studentsController::class , 'Search_list']);




    //     Route::get('/students/transfer/in',[studentsController::class , 'transfer_in_list']);
    //     Route::get('/students/transfer/out',[studentsController::class , 'transfer_out_list']);
    //     Route::get('/students/aplication',[studentsController::class , 'aplication_list']);


    //     //attendence_sheet
    //     Route::get('/attendence_sheet',[attendenceController::class , 'attendence_sheet']);


    //     Route::get('/attendence_sheet/{class}/{view}/{date}',[attendenceController::class , 'attendence_sheet_result']);

    //


    //     Route::post('/attendence_sheet/search',[attendenceController::class , 'attendence_sheet_search']);
    //     Route::post('/attendence_sheet/submit',[attendenceController::class , 'attendence_sheet_submit']);
    //     Route::get('/attendence_sheet/edit/{id}',[attendenceController::class , 'attendence_sheet_edit']);
    //     Route::post('/attendence_sheet/edit/submit',[attendenceController::class , 'attendence_sheet_edit_submit']);




    //     Route::post('/routines/search',[RoutineController::class , 'search'])->name('routines.search');
    //     Route::get('/routines/{class}',[RoutineController::class , 'search_result'])->name('routines.search_result');
    //     Route::get('/routines/{class}/{year}',[RoutineController::class , 'routine_view'])->name('routines.routine_view');
    //     Route::get('/routines/{class}/{year}/update',[RoutineController::class , 'routine_update'])->name('routines.routine_update');
    //     Route::get('/routines/update/{id}/{class}',[RoutineController::class , 'single_routine_update'])->name('routines.single_routine_update');
    //    Route::resource('routines',RoutineController::class);

    //    Route::resource('notice',NoticeController::class);

    //    Route::resources([
    //     'gallery_category' => GalleryCategoryController::class,
    //     'gallery' => GalleryController::class,
    //     'notice' => NoticeController::class,
    //     'blogs' => BlogController::class,
    //     'blog-category' => BlogCategoryController::class,
    //     'event' => EventController::class,
    //     'settings' => SchoolDetailController::class,
    //     ]);

    //     Route::get('/setting/seo',[SchoolDetailController::class , 'seo'])->name('settings.seo');
    //     Route::get('/setting/slider',[SchoolDetailController::class , 'slider'])->name('settings.slider');




    //     //resultController
    //     Route::get('/result_sheet',[resultController::class , 'result_sheet']);
    //     Route::get('/result_sheet/{group}/{class}/{exam}/{subject}/{date}',[resultController::class , 'result_sheet_result']);
    //     Route::get('/result_sheet/view/{group}/{class}/{exam}/All/{date}',[resultController::class , 'resultView']);
    //     Route::get('/result_sheet/pdf/{group}/{class}/{exam}/All/{date}',[resultController::class , 'resultViewpdf']);
    //     Route::post('/result_sheet/search',[resultController::class , 'result_sheet_search']);
    //     Route::post('/result_sheet/submit',[resultController::class , 'result_sheet_submit']);


    //     Route::get('/result_sheet/edit/{id}',[resultController::class , 'result_sheet_edit']);

    //     Route::get('/sms/{group}/{class}/{exam}/{subject}/{date}',[resultController::class , 'result_sms']);



    //     Route::post('/result_sheet/edit/submit',[resultController::class , 'result_sheet_edit_submit']);
    //     Route::post('/result/publish',[resultController::class , 'result_publish']);



    //     //StartAdmission
    //     Route::get('/StartAdmission',[StartAdmissionController::class , 'StartAdmission_sheet']);
    //     Route::get('/form/AdmissionDateSet',[StartAdmissionController::class , 'AdmissionDateSet']);
    //     Route::get('/form/AdmissionDateSet/{id}',[StartAdmissionController::class , 'AdmissionDateEdit']);
    //     Route::get('/form/AdmissionDateDelete/{id}',[StartAdmissionController::class , 'AdmissionDateDelete']);
    //     Route::post('/form/AdmissionDateSet/submit',[StartAdmissionController::class , 'AdmissionDateSet_submit']);



    //     //Promotion
    //     Route::get('/Promotion',[PromotionController::class , 'Promotion']);
    //     Route::post('/Promotion/submit',[PromotionController::class , 'Promotion_submit']);

    //     Route::get('/Promotion/search/{class}/{Year}',[PromotionController::class , 'Promotion_search']);

    //     Route::get('/Promotion/pdf/{class}/{Year}',[PromotionController::class , 'Promotion_Pdf']);
    //     Route::post('/Promotion/to/next',[PromotionController::class , 'Promotion_Next']);


    //     // Route::get('/form/AdmissionDateSet',[StartAdmissionController::class , 'AdmissionDateSet']);
    //     // Route::get('/form/AdmissionDateSet/{id}',[StartAdmissionController::class , 'AdmissionDateEdit']);
    //     // Route::get('/form/AdmissionDateDelete/{id}',[StartAdmissionController::class , 'AdmissionDateDelete']);
    //     // Route::post('/form/AdmissionDateSet/submit',[StartAdmissionController::class , 'AdmissionDateSet_submit']);


    //     Route::get('/sent_sms',[smsController::class , 'sent_sms']);
    //     Route::post('/sent_sms/submit',[smsController::class , 'sent_sms_submit']);
    //     Route::get('/attendence_sheet/sms/{class}/{view}/{date}',[smsController::class , 'attendence_sheet_sms']);

    });

    });
// Route::group(['middleware' => ['is_admin']], function() {
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });

// Route::group(['middleware' => ['CustomerMiddleware']], function() {
// Route::get('/sub', [App\Http\Controllers\HomeController::class, 'sub'])->name('sub');
// });




// Route::get('/login', function () {
//     return view('auth.login');
// });


Route::get('/{vue_capture?}', function () {
    return view('admin/layout.layout');
})->where('vue_capture', '[\/\w\.-]*');

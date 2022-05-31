<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\api\resultController;
use App\Http\Controllers\api\PaymentController;
use App\Http\Controllers\api\RoutineController;
use App\Http\Controllers\api\studentsController;


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
      Route::get('/{vue_capture?}', function () {
        return view('admin/layout.layout');
    })->where('vue_capture', '[\/\w\.-]*');
    });
    });

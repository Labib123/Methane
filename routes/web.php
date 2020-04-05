<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/collectorMaterials', 'CollectorMaterialsController@index');
Route::post('/collectorAddMaterial', 'CollectorMaterialsController@store')->name('collectorAddMaterial');
Route::get('manually-api', 'makeAppointmentController@manuallyAPI')->name('manually-api');

Route::get('/home','HomeController@index');
Route::post('/schedule', 'scheduleController@index')->name('schedule');

Auth::routes();
Route::get('/porposedDate', 'makeAppointmentController@proposedDate');
Route::get('/makeappointment', 'makeAppointmentController@index');
Route::get('/selectCollector', 'makeAppointmentController@selectCollector');
Route::post('/selectDate', 'makeAppointmentController@makeAppoinment')->name('selectDate');



Route::get('/manually-appointment', 'makeAppointmentController@manually');

Route::get('/recycler', 'RecyclerRegistrationController@index')->name('recycler');
Route::get('/collector', 'CollectorRegistrationController@index')->name('collector');



Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

Route::get('addSchedule', 'AddScheduleController@index');
Route::post('recordSubmission/', 'makeAppointmentController@recordSubmission')->name('recordSubmission');

Route::get('showRecyclers', 'makeAppointmentController@showRecyclers');
Route::get('showRecyclersAPI', 'makeAppointmentController@showRecyclersAPI');


Route::get('enterWeight', 'makeAppointmentController@enterWeight')->name('enterWeight');
Route::get('viewappointments', 'makeAppointmentController@viewappointments');



Route::get('material/', 'MaterialController@index')->name('material.index');
Route::get('/create','MaterialController@create')->name('material.create');
Route::post('/create','MaterialController@store')->name('material.store');
Route::get('material/{id}/edit','MaterialController@edit')->name('material.edit');
Route::post('material/{id}/delete','MaterialController@destroy')->name('material.destroy');
Route::post('material/update','MaterialController@update')->name('material.update');

Route::get('submissionAPI', 'SubmissionController@submissionAPI')->name('submission.index');
Route::get('submittedByAPI', 'SubmissionController@submittedByAPI')->name('submission.index');
Route::get('submittedBy', 'SubmissionController@submittedBy');

Route::get('recycledByAPI', 'SubmissionController@recycledByAPI');
Route::get('recycledBy', 'SubmissionController@recycledBy');


Route::get('allSubmissions', 'SubmissionController@allSubmissions');

Route::get('collectorSubmission', 'SubmissionController@recycledBy')->name('submission.index');
Route::get('adminSubmission', 'SubmissionController@admin')->name('submission.index');
Route::get('submission','makeAppointmentController@submission');

Route::get('viewsubmission','SubmissionController@show')->name('submission.create');
Route::get('submission/create','SubmissionController@create')->name('submission.create');
Route::post('submission/create','SubmissionController@store')->name('submission.store');
Auth::routes();



Route::group(['middleware' =>'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::post('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::post('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});


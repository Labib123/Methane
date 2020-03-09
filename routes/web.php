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
});


Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/porposedDate', 'makeAppointmentController@proposedDate');
Route::get('/makeappointment', 'makeAppointmentController@index');
Route::get('/selectCollector', 'makeAppointmentController@selectCollector');
Route::get('/schedule', 'scheduleController@index');

Route::get('/recycler', 'RecyclerRegistrationController@index')->name('recycler');
Route::get('/collector', 'CollectorRegistrationController@index')->name('collector');


Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

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


Route::get('material/', 'MaterialController@index')->name('material.index');
Route::get('/create','MaterialController@create')->name('material.create');
Route::post('/create','MaterialController@store')->name('material.store');
Route::get('material/{id}/edit','MaterialController@edit')->name('material.edit');
Route::get('material/{id}/delete','MaterialController@destroy')->name('material.destroy');
Route::post('material/update','MaterialController@update')->name('material.update');

Route::get('recyclerSubmission', 'SubmissionController@recycledBy')->name('submission.index');
Route::get('collectorSubmission', 'SubmissionController@recycledBy')->name('submission.index');
Route::get('adminSubmission', 'SubmissionController@admin')->name('submission.index');

Route::get('viewsubmission','SubmissionController@show')->name('submission.create');
Route::get('submission/create','SubmissionController@create')->name('submission.create');
Route::post('submission/create','SubmissionController@store')->name('submission.store');

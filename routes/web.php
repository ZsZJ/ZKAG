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
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // Dashboard routing
    Route::get('/dashboard', 'DashboardController@index');
    // Calendar routing
    Route::get('/calendar', 'CalendarController@index');
    // Routing Resource employees in settings
    Route::resource('employees', 'EmployeeController');

});

Route::get('/{vue_capture?}', function () {
    return view('vue.index');
})->where('vue_capture' , '[\/\w\.-]*');

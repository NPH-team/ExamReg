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
    // $user=DB::table('kythi')->get()->toarray();
    //   dd($user);
    // return view('welcome');
});
Route::get('/home', function () {
    return view('templates.home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/inlich', function () {
    return view('templates.inlich');
});
Route::get('/inlich', function () {
    return view('templates.inlich');
});
Route::get('/loadata','UserController@index');
Route::get('/pdf','UserController@generate');
Route::get('/demo', function () {
    return view('templates.pdf');
});
Route::get('/nhapdulieu','AdminController@nhapdulieu');
Route::post('/nhapdulieu','AdminController@importexcel');
Route::post('/nhapdulieu1','AdminController@importexcel1');
Route::group(['prefix' => 'schedule'], function () {
    Route::get('/', ['as' => 'schedule.show', 'uses' => 'UserController@index1']);
    Route::get('/checkSameSchedule', ['as' => 'schedule.checkSameSchedule', 'uses' => 'UserController@checkSameSchedule']);
});

// Route::get('/inlich','UserController@inlich');
// Route::get('/dangki/load_data', ['uses' => 'home\UserController@load_data']);

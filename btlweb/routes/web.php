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
Route::get('/loadata','UserController@index');
// Route::get('/inlich','UserController@inlich');
Route::get('/dangki/load_data', ['uses' => 'home\UserController@load_data']);

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('themSV', function () {
    $student = new App\student;
    $student->msv = "1025f";
    $student->ten = "nguyệt";
    $student->username = "15802";
    $student->password = "ntmn";
    $student->level = "0";
    $student->save();  
});

Route::get('themHP', function () {
    $hocphan = new App\Hocphan();
    $hocphan->mahp = "int2206";
    $hocphan->tenhp = "ABC";
    $hocphan->TC = 2;
    $hocphan->save();

    echo "themhp";
});

Route::resource('Student', 'ControllerStudent');

Route::resource('Hocphan', 'ControllerHocphan');

Route::get('/', function () {
    return view('index');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('login', 'ControllerLogin@getLogin');
Route::post('login','ControllerLogin@checkLogin')->name('login'); 

//Route::resource('Login', 'ControllerLogin');

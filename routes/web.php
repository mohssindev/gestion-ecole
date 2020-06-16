<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/student', function () {
    return view('student');
})->name('stu');

Route::get('/instructor', function () {
    return view('instructor');
})->name('ins');

Route::get('/admin', function () {
    return view('admin');
})->name('adm');

Route::get('/contact', function () {
    return view('contact');
})->name('con');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');


Auth::routes();
 

// role admin 
Route::group(['prefix' => '/app','middleware' => 'auth'],function(){
	Route::group(['prefix' => 'admin','middleware' => 'role:admin'],function(){

		// all route admin
		//dashboard
		Route::get('dashboard','HomeController@index')->name('admin-dashboard');


	});
});

// role students 
Route::group(['prefix' => '/app','middleware' => 'auth'],function(){
	Route::group(['prefix' => 'students','middleware' => 'role:students'],function(){

		// all route students
		//dashboard
		Route::get('dashboard','HomeController@index')->name('students-dashboard');

	});
});

// role instructor 
Route::group(['prefix' => '/app','middleware' => 'auth'],function(){
	Route::group(['prefix' => 'instructor','middleware' => 'role:instructor'],function(){

		// all route instructor
		//dashboard
		Route::get('dashboard','HomeController@index')->name('instructor-dashboard');


	});
});
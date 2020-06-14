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

Route::get('/student/student_dashboard', function () {
    return view('student_dashboard');
})->name('student-dashboard');

Auth::routes();


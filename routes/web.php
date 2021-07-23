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
});

Route::get('about', function () {
    return view('about');
});

Route::get('careers',function () {
    return view('careers');
});

Route::get('why_vivo',function () {
    return view('why_vivo');
});

Route::get('expect',function () {
    return view('expect');
});

Route::get('succeeds',function () {
    return view('succeeds');
});

Route::get('people',function () {
    return view('people');
});

Route::get('roles',function () {
    return view('roles');
});

Route::get('students',function () {
    return view('students');
});

Route::get('vacancies',function () {
    return view('vacancies');
});
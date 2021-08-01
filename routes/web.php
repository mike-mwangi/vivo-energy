<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

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

Route::get('/about', function () {
    return view('about');
});
Route::resource('/contact', FeedbackController::class);

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

Route::prefix('/media')->group(function(){
    Route::get('',function(){return view('media');})->name('media');
    Route::get('/gallery',function(){return view('gallery');})->name('media.gallery');
    Route::get('/press',function(){return view('press');})->name('media.press');
});
Route::get('products', function () {
    return view('products');
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

Route::get('education',function () {
    return view('education');
});

Route::get('road_safety',function () {
    return view('road_safety');
});

Route::get('enviroment',function () {
    return view('enviroment');
});

Route::get('community',function () {
    return view('community');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

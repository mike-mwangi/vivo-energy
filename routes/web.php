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

// Route::get('/about', function () {
//     return view('about');
// });

Route::prefix('/about')->group(function(){
    Route::get('',function(){return view('about');})->name('about');
    Route::get('/vision',function(){return view('vision');})->name('about.vision');
    Route::get('/glance',function(){return view('glance');})->name('about.glance');
    Route::get('/principles',function(){return view('principles');})->name('about.principles');

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

Route::get('ann',function () {
    return view('ann');
});

Route::get('edward',function () {
    return view('edward');
});

Route::get('hind',function () {
    return view('hind');
});

Route::get('khadidiatou',function () {
    return view('khadidiatou');
});

Route::get('kennedy',function () {
    return view('kennedy');
});

Route::get('lena',function () {
    return view('lena');
});

Route::get('patrick',function () {
    return view('patrick');
});

Route::get('peter',function () {
    return view('peter');
});

Route::get('sharma',function () {
    return view('sharma');
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

Route::get('hsse',function () {
    return view('hsse');
});

Route::get('community',function () {
    return view('community');
});

Route::get('road_safety',function () {
    return view('road_safety');
});

Route::get('/', 'App\Http\Controllers\BlogController@index');

Route::get('single-blog/{id}', 'App\Http\Controllers\BlogController@show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

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

Route::prefix('/media')->group(function(){
    Route::get('',function(){return view('media');})->name('media');
    Route::get('/gallery',function(){return view('gallery');})->name('media.gallery');
    Route::get('/press',function(){return view('press');})->name('media.press');
});
Route::get('products', function () {
    return view('products');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


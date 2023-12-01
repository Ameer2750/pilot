<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/services', function () {
    return view('services');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('/song', function () {
    return view('song');
});

Route::get('/photo', function () {
    return view('photo');
});

Route::get('/donation', function () {
    return view('donation');
});

Route::get('/contact-us', function () {
    return view('contact');
});



Route::get('/annual-events', function () {
    return view('annual-events');
});


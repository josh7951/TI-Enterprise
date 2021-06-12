<?php

use Illuminate\Support\Facades\Auth;
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
    return view('landingpage');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/team-gallery', function() {
    return view('gallery');
});

Route::get('/store', function() {
    return view('store');
});

Route::get('/contact', [App\Http\Controllers\ContactFormController::class, 'createForm']);
Route::post('/contact', [App\Http\Controllers\ContactFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/ray-caldwell', function() {
    return view('caldwell');
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['prevent-back-history']],function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

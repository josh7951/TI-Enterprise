<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\GalleryController;

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

Route::get('/team-gallery', [GalleryController::class, 'index']);

/*Route::get('/store', function() {
    return view('store');
});*/

Route::get('/tournament-schedule', function() {
    return view('tournaments');
});

Route::get('/contact', [ContactFormController::class, 'createForm']);
Route::post('/contact', [ContactFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/ray-caldwell', function() {
    return view('caldwell');
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['prevent-back-history']],function(){

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('tournament-editor', TournamentController::class);

});

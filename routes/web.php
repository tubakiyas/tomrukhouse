<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});


Route::controller(PagesController::class)->group(function () {
    Route::get('/hakkimizda', 'about')->name('about');
    Route::get('/katplanlari', 'floorPlans')->name('floor.plans');
    Route::get('/katplandetay', 'floorDetail')->name('floor.detail');
    Route::get('/fotograflar', 'photos')->name('photos');
    Route::get('/tum/fotograflar', 'allPhotos')->name('allPhotos');
    Route::get('/videolar', 'videos')->name('videos');
    Route::get('/tum/videolar', 'allVideos')->name('allVideos');
    Route::get('/surec', 'process')->name('process');
    Route::get('/etkinlikler', 'events')->name('events');
    Route::get('/iletisim', 'contact')->name('contact');

    Route::get('/form', 'form')->name('form');
    Route::get('/gizlilik', 'privacy')->name('privacy');
    Route::get('/kvkk', 'kvkk')->name('kvkk');
});

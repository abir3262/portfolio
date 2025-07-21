<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


// admin view
Route::get('/messages', [ContactController::class, 'messages'])->name('messages');

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/education', function () {
    return view('pages.education');
});

Route::get('/skills', function () {
    return view('pages.skills');
});

Route::get('/projects', function () {
    return view('pages.projects');
});

Route::get('/resume', function () {
    return view('pages.resume');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/achivement', function () {
    return view('pages.achivement');
});


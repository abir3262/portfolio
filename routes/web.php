<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('pages.home');
});
//login routes
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthenticationController::class, 'login']);

//registration routes
Route::get('/registration', function () {
    return view('auth.registration');
});
Route::post('/registration', [AuthenticationController::class, 'registration']);




Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/education', function () {
    return view('pages.education');
});

Route::get('/skills', [App\Http\Controllers\SkillController::class, 'index'])->name('skills.index');
Route::middleware('auth')->group(function () {
    Route::get('/skills/create', [App\Http\Controllers\SkillController::class, 'create'])->name('skills.create');
    Route::post('/skills', [App\Http\Controllers\SkillController::class, 'store'])->name('skills.store');
});

Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');

Route::get('/resume', function () {
    return view('pages.resume');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/achivement', function () {
    return view('pages.achivement');
});


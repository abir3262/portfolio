<?php

use Illuminate\Support\Facades\Route;

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

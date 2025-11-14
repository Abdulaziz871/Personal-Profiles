<?php

use Illuminate\Support\Facades\Route;

// Home Page Route
Route::get('/', function () {
    return view('home');
});

// Note: The main /about page was removed in favor of individual About-Me pages per member.

// Contact Page Route
Route::get('/contact', function () {
    return view('contact');
});

// Individual About-Me Pages for team members
Route::view('/about/AboutMe_CB22019', 'abouts.AboutMe_CB22019');
Route::view('/about/AboutMe_Othman', 'abouts.AboutMe_Othman');
Route::view('/about/AboutMe_CB22015', 'abouts.AboutMe_CB22015');
Route::view('/about/AboutMe_Elyas', 'abouts.AboutMe_Elyas');

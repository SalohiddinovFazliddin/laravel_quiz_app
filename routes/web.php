<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('dashboard.home');});
Route::get('/register', function () {return view('auth.register');});
Route::get('/login', function () {return view('auth.login');});
Route::get('/take-quiz', function () {return view('quiz.take-quiz');});
Route::get('/about', function () {return view('about');});

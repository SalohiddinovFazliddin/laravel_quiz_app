<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('dashboard.home');});
Route::get('/take-quiz', function () {return view('quiz.take-quiz');});
Route::get('/about', function () {return view('about');});
Route::get('/create-quiz', function () {return view('dashboard.create-quiz');});
Route::get('/quizzes', function () {return view('dashboard.quizzes');});
Route::get('/statistics', function () {return view('dashboard.statistics');});

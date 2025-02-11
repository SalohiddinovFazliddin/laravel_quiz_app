<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/take-quiz', [QuizController::class, 'take'])->middleware('auth')->name('take-quiz');

Route::get('/create-quiz', [DashboardController::class, 'createQuiz'])->middleware('auth')->name('create-quiz');
Route::get('/home', [DashboardController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/statistics', [DashboardController::class, 'statistics'])->middleware('auth')->name('statistics');
Route::get('/quizzes', [DashboardController::class, 'quizzes'])->middleware('auth')->name('quizzes');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

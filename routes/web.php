<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/take-quiz', [QuizController::class, 'take'])->middleware('auth')->name('take-quiz');

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/home', [DashboardController::class, 'dashboard'])->middleware('auth')->name('dashboard');
    Route::get('/statistics', [DashboardController::class, 'statistics'])->middleware('auth')->name('statistics');

    Route::get('/quizzes', [QuizController::class, 'index'])->middleware('auth')->name('quizzes');
    Route::get('/quizzes/{quiz}', [QuizController::class, 'edit'])->middleware('auth')->name('edit.quiz');
    Route::post('/quizzes/{quiz}/update', [QuizController::class, 'update'])->middleware('auth')->name('update.quiz');

    Route::get('/create-quiz', [QuizController::class, 'create'])->middleware('auth')->name('create-quiz');
    Route::get('/create-quiz', [QuizController::class, 'store'])->middleware('auth')->name('store-quiz');

});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

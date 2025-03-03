<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResultController;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/paginate', [DashboardController::class, 'paginate'])->name('paginate-quiz');

Route::middleware('auth')->group(function(){
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/home', [DashboardController::class, 'dashboard'])->name('home');
    Route::get('/statistics', [ResultController::class, 'index'])->name('statistics');

Route::prefix('quizzes')->group(function () {
    Route::get('/', [QuizController::class, 'index'])->name('quizzes');
    Route::get('/{quiz}', [QuizController::class, 'edit'])->name('edit.quiz');
    Route::post('/{quiz}/update', [QuizController::class, 'update'])->name('update.quiz');
    Route::get('/{quiz}/destroy', [QuizController::class, 'destroy'])->name('destroy.quiz');
    Route::get('/results/{result}', [ResultController::class, 'show'])->name('my-results');
});

    Route::get('/create-quiz', [QuizController::class, 'create'])->name('create.quiz');

    Route::post('/create-quiz', [QuizController::class, 'store'])->name('create-quiz');

});
    Route::get('/show-quiz/{slug}', [QuizController::class, 'show'])->name('show-quiz');
    Route::post('/start-quiz/{slug}', [QuizController::class, 'startQuiz'])->name('start-quiz');
    Route::post('/take-quiz/{slug}', [QuizController::class, 'takeQuiz'])->name('take-quiz');

});



//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';

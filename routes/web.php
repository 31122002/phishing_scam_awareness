<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckerController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/checker', [CheckerController::class, 'index'])->name('checker');
Route::post('/checker', [CheckerController::class, 'check'])->name('checker.check');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/quiz', [QuizController::class, 'index'])->name('quiz');
Route::post('/quiz', [QuizController::class, 'submit'])->name('quiz.submit');

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/reports', [AdminController::class, 'reports'])->name('admin.reports');
    Route::get('/questions', [AdminController::class, 'questions'])->name('admin.questions');
    Route::post('/questions', [AdminController::class, 'storeQuestion'])->name('admin.questions.store');
    Route::delete('/questions/{question}', [AdminController::class, 'deleteQuestion'])->name('admin.questions.delete');
});

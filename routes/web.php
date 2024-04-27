<?php

use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;

Route::get('/quizzes', function () {
    return view('quiz');
});


Route::get('/', [SettingsController::class, 'showDashboard'])->name('dashboard');
Route::get('/configure', [SettingsController::class, 'showConfiguration'])->name('configure');
Route::post('/configure/save', [SettingsController::class, 'saveConfiguration'])->name('configure.save');
Route::post('/settings/save', [SettingsController::class, 'saveSettings'])->name('settings.save');
// quiz routes
Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
Route::get('/quiz/create', [QuizController::class, 'create'])->name('quiz.create');
Route::post('/quiz', [QuizController::class, 'store'])->name('quiz.store');
Route::get('/quiz/{quiz}', [QuizController::class, 'show'])->name('quiz.show');
Route::get('/quiz/{quiz}/edit', [QuizController::class, 'edit'])->name('quiz.edit');
Route::put('/quiz/{quiz}', [QuizController::class, 'update'])->name('quiz.update');
Route::delete('/quiz/{quiz}', [QuizController::class, 'destroy'])->name('quiz.destroy');
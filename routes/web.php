<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;

// Route::get('/', function () {
//     return view('dashboard');
// });


Route::post('/settings/save', [SettingsController::class, 'saveSettings'])->name('settings.save');
Route::get('/', [SettingsController::class, 'showDashboard'])->name('dashboard');
Route::post('/configure/save', [SettingsController::class, 'saveSettings'])->name('configure.save');
Route::get('/configure', [SettingsController::class, 'showDashboard'])->name('dashboard');

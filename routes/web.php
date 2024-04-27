<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;

// Route::get('/', function () {
//     return view('dashboard');
// });


Route::get('/', [SettingsController::class, 'showDashboard'])->name('dashboard');
Route::get('/configure', [SettingsController::class, 'showConfiguration'])->name('configure');
Route::post('/configure/save', [SettingsController::class, 'saveConfiguration'])->name('configure.save');
Route::post('/settings/save', [SettingsController::class, 'saveSettings'])->name('settings.save');


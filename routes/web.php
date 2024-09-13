<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TemplateController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/form', [FormController::class, 'index'])->name('form');
    Route::post('/form', [FormController::class, 'store'])->name('form.store');
    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::get('/template', [TemplateController::class, 'index'])->name('template.show');

});

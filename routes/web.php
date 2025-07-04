<?php

use Illuminate\Support\Facades\Route;





use App\Http\Controllers\RegistrationController;

Route::get('/', [RegistrationController::class, 'create'])->name('register');
Route::post('/register', [RegistrationController::class, 'store']);

Route::get('/login', [RegistrationController::class, 'loginForm'])->name('login');
Route::post('/login', [RegistrationController::class, 'login']);

Route::get('/list', [RegistrationController::class, 'index']);
Route::get('/edit/{id}', [RegistrationController::class, 'edit']);
Route::post('/update/{id}', [RegistrationController::class, 'update']);
Route::get('/delete/{id}', [RegistrationController::class, 'destroy']);
Route::get('/logout', [RegistrationController::class, 'logout'])->name('logout');

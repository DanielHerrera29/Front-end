<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EncuestaController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.process');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/registrate', function () {
    return view('registrate');
})->name('register');
Route::resource('usuarios', UsuarioController::class);
Route::resource('encuestas', EncuestaController::class);

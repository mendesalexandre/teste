<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\RateCalculateController;
use App\Http\Controllers\TabelaGeralController;

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/reset-password', [ResetPasswordController::class, 'index']);
Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/me', [LoginController::class, 'me']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/rate-calculate', [RateCalculateController::class, 'index']);
    Route::get('/clientes', [ClienteController::class, 'index']);
    Route::post('/cliente/filter', [ClienteController::class, 'filter']);
    Route::get('/tabela-geral', [TabelaGeralController::class, 'index']);
});

Route::get('/age', function () {
    // return \Carbon\Carbon::parse('1994-04-28')->age;

    return \Carbon\Carbon::createFromDate(1991, 7, 19)->diff(\Carbon\Carbon::now())->format('%y anos, %m meses e %d dias');
});

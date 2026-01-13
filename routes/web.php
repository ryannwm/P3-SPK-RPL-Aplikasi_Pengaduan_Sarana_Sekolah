<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function(){
    Route::controller(AuthController::class)->prefix('auth')->group(function(){
        Route::get('/', 'loginPage')
            ->name('login');
        Route::post('/login', 'login')
            ->name('auth.login');
    });
});
            
Route::middleware('auth')->group(function(){
    Route::get('/', function(){
        return view('dashboard');
        });
    Route::post('/logout', [AuthController::class, 'logout'])
            ->name('auth.logout');
});

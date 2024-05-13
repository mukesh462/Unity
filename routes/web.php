<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::post('login-response', [AuthController::class, 'login'])->name('login');
Route::get('/login', function () {
    return view('layouts.login');
})->middleware('auth.redirect');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['auth.verify'])->group(function () {
    Route::get('/', function () {
        return view('layouts.Dashboard');
    });
    Route::get('adminMenu', [AuthController::class, 'adminMenu'])->name('menu');
});

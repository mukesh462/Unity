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
    Route::get('menuform', [AuthController::class, 'menuform'])->name('menu.form');
    Route::post('menu_save', [AuthController::class, 'menu_save'])->name('menu.save');
    Route::get('menu/{id}/edit', [AuthController::class, 'menuform'])->name('menu.edit');
    Route::get('menu/{id}/delete', [AuthController::class, 'deleteFormData'])->name('menu.delete');
});

<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::post('login-response', [AuthController::class, 'login'])->name('login');
Route::get('/login', function () {
    return view('layouts.login');
})->middleware('auth.redirect');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['auth.verify', 'user_access'])->group(function () {
    Route::get('/', function () {
        return view('layouts.Dashboard');
    });
    Route::get('menu/view', [AuthController::class, 'adminMenu'])->name('menu');
    Route::get('menu/create', [AuthController::class, 'menuform'])->name('menu.form');
    Route::post('menu_save', [AuthController::class, 'menu_save'])->name('menu.save');
    Route::get('menu/edit/{id}', [AuthController::class, 'menuform'])->name('menu.edit');
    Route::get('menu/delete/{id}', [AuthController::class, 'deleteFormData'])->name('menu.delete');
    Route::get('list/view', [AuthController::class, 'listmenu'])->name('list');
    Route::get('list/create', [AuthController::class, 'menuform'])->name('list.form');
    Route::post('list_save', [AuthController::class, 'menu_save'])->name('list.save');
    Route::get('list/edit/{id}', [AuthController::class, 'menuform'])->name('list.edit');
    Route::get('list/delete/{id}', [AuthController::class, 'deleteFormData'])->name('list.delete');
});

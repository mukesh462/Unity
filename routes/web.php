<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventoryController;
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
    // Route::get('menu/{id}/edit', [AuthController::class, 'menuform'])->name('menu.edit');
    // Route::get('menu/{id}/delete', [AuthController::class, 'deleteFormData'])->name('menu.delete');
    Route::get('items/view', [InventoryController::class, 'index'])->name('items.index');
    Route::get('items/edit/{item}', [InventoryController::class, 'edit'])->name('items.edit');
    Route::put('items/{item}', [InventoryController::class, 'update'])->name('items.update');
    Route::get('items/delete/{item}', [InventoryController::class, 'destroy'])->name('items.destroy');
    Route::get('/items/create', [InventoryController::class, 'create'])->name('items.create');
    Route::post('/items/add', [InventoryController::class, 'store'])->name('items.store');
    Route::get('/itemhistory/{item}', [InventoryController::class, 'showHistory'])->name('items.history');
    Route::get('users/view', [InventoryController::class, 'subAdminList'])->name('subAdmin.list');
  
    Route::get('users/create', [InventoryController::class, 'subAdminCreate'])->name('subAdmin.create');
    Route::post('subAdmin_save', [InventoryController::class, 'subAdmin_save'])->name('subAdmin.save');
    Route::get('menu/edit/{id}', [AuthController::class, 'menuform'])->name('menu.edit');
    Route::get('menu/delete/{id}', [AuthController::class, 'deleteFormData'])->name('menu.delete');
    // Route::get('list/view', [AuthController::class, 'listmenu'])->name('list');
    // Route::get('list/create', [AuthController::class, 'menuform'])->name('list.form');
    // Route::post('list_save', [AuthController::class, 'menu_save'])->name('list.save');
    // Route::get('list/edit/{id}', [AuthController::class, 'menuform'])->name('list.edit');
    // Route::get('list/delete/{id}', [AuthController::class, 'deleteFormData'])->name('list.delete');
});
Route::get('items/pdf', [InventoryController::class, 'exportPdf'])->name('exportPdf');
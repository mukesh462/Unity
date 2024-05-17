<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;



//  list pattern i have used
// Route::get('list/view');
// Route::get('list/create');
// Route::post('list_save');
// Route::get('list/edit/{id}');
// Route::get('list/delete/{id}';

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
    Route::get('product/view', [InventoryController::class, 'index'])->name('items.index');
    Route::get('product/edit/{item}', [InventoryController::class, 'edit'])->name('items.edit');
    Route::put('product/{item}', [InventoryController::class, 'update'])->name('items.update');
    Route::get('product/delete/{item}', [InventoryController::class, 'destroy'])->name('items.destroy');
    Route::get('product/create', [InventoryController::class, 'create'])->name('items.create');
    Route::post('items/add', [InventoryController::class, 'store'])->name('items.store');
    Route::get('itemhistory/{item}', [InventoryController::class, 'showHistory'])->name('items.history');
    Route::get('users/view', [InventoryController::class, 'subAdminList'])->name('subAdmin.list');
    Route::get('users/delete/{item}', [InventoryController::class, 'userDestroy'])->name('subAdmin.delete');

    Route::get('users/create', [InventoryController::class, 'subAdminCreate'])->name('subAdmin.create');
    Route::get('users/edit/{id}', [InventoryController::class, 'subAdminCreate'])->name('subAdmin.edit');
    Route::post('subAdmin_save', [InventoryController::class, 'subAdmin_save'])->name('subAdmin.save');
    Route::get('menu/edit/{id}', [AuthController::class, 'menuform'])->name('menu.edit');
    Route::get('menu/delete/{id}', [AuthController::class, 'deleteFormData'])->name('menu.delete');
});

// pdf ,excel

Route::get('items/pdf', [InventoryController::class, 'exportPdf'])->name('exportPdf');
Route::get('items/excel', [InventoryController::class, 'exportExcel'])->name('exportExcel');
Route::get('product/search', [InventoryController::class, 'productSearchView'])->name('productSearchView');
Route::post('productSearch', [InventoryController::class, 'productSearch'])->name('productSearch');

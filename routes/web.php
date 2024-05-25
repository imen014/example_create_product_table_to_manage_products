<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

Route::get('/', [FirstController::class, 'index'])->name('index_page');
Route::get('/create_product', [FirstController::class, 'create'])->name('create_product');
Route::post('/create_product', [FirstController::class, 'store'])->name('store_product');

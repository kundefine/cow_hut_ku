<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group([
    "prefix" => "admin",
    "as" => "admin."
], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::resource('products', ProductController::class)->names('products');
});


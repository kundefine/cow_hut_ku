<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DropzoneController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/product/{slug}', [ProductController::class, 'show']);


Route::group([
    "prefix" => "admin",
    "as" => "admin."
], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::resource('products', ProductController::class)->names('products');
    Route::post('products/upload/images', [ProductController::class, 'uploadImages'])->name('products.upload.images');

    Route::post('/dropzone/upload', [DropzoneController::class, 'dropzoneUpload'])->name('dropzone.upload');
});


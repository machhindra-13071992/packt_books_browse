<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('search');
});

use App\Http\Controllers\ProductsController;

Route::get('/search/', [ProductsController::class,'search'])->name('search');


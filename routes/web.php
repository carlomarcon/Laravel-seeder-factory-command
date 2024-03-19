<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function() {
//   return view('home');
// })->name('home');

Route::get('/',[ProductsController::class, 'index'])->name('home');
Route::get('products/{id}',[ProductsController::class, 'show'])->name('product');
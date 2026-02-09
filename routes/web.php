<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;



/* Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about'); */

Route::resource('categories', CategoryController::class);

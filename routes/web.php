<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('checkout', function() {
    return view('checkout');
})->name('checkout');

Route::get('success-checkout', function() {
    return view('success_checkout');
})->name('success_checkout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CacheController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
#Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/clear-cache', [CacheController::class, 'clear']);
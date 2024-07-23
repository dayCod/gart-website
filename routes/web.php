<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Gart\HomeController as GartHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/about-me', [HomeController::class, 'aboutMe'])->name('about-me');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');

Route::group(['prefix' => '/gart', 'as' => 'gart.'], function () {
    Route::get('/index', [GartHomeController::class, 'index'])->name('index');
    Route::get('/category', [GartHomeController::class, 'categories'])->name('categories');
    Route::get('/category/{slug}', [GartHomeController::class, 'category'])->name('category');
    Route::get('/gallery', [GartHomeController::class, 'galleries'])->name('galleries');
    Route::get('/gallery/{slug}', [GartHomeController::class, 'gallery'])->name('gallery');
});

Route::group(['prefix' => 'reise', 'as' => 'reise.'], function () {
    //
});

// Admin Route Lists
include __DIR__ . '/admin.php';

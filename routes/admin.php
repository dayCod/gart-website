<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/profile', [DashboardController::class, 'profileView'])->name('dashboard.profile.view');
    Route::post('/profile', [DashboardController::class, 'profileAction'])->name('dashboard.profile.action');
});

Route::group(['prefix' => 'auth', 'as' => 'auth.', 'middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'loginView'])->name('login.view');
    Route::post('/login', [LoginController::class, 'loginAction'])->name('login.action');

    Route::get('/logout', [LogoutController::class, 'logoutAction'])
        ->withoutMiddleware(['guest'])
        ->middleware(['auth'])
        ->name('logout.action');
});

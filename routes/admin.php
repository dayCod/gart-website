<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', function () { dd('login success'); });
});

Route::group(['prefix' => 'auth', 'as' => 'auth.', 'middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'loginView'])->name('login.view');
    Route::post('/login', [LoginController::class, 'loginAction'])->name('login.action');

    Route::get('/logout', [LogoutController::class, 'logoutAction'])
        ->withoutMiddleware(['guest'])
        ->middleware(['auth'])
        ->name('logout.action');
});

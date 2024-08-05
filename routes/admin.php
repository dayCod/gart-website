<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Admin\Gart\CategoryController as GartCategoryController;
use App\Http\Controllers\Admin\Gart\GalleryController as GartGalleryController;
use App\Http\Controllers\Admin\Gart\GalleryImageController as GartGalleryImageController;
use App\Http\Controllers\Admin\Reise\CategoryController as ReiseCategoryController;
use App\Http\Controllers\Admin\Reise\GalleryController as ReiseGalleryController;
use App\Http\Controllers\Admin\Reise\GalleryImageController as ReiseGalleryImageController;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/profile', [DashboardController::class, 'profileView'])->name('dashboard.profile.view');
    Route::post('/profile', [DashboardController::class, 'profileAction'])->name('dashboard.profile.action');

    // All These Resources under Gart Prefix
    Route::group(['prefix' => 'gart', 'as' => 'gart.'], function () {

        // Category Resources
        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
            Route::get('/', [GartCategoryController::class, 'index'])->name('index');
            Route::get('/create', [GartCategoryController::class, 'create'])->name('create');
            Route::post('/store', [GartCategoryController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [GartCategoryController::class, 'edit'])->name('edit');
            Route::put('/{id}/update', [GartCategoryController::class, 'update'])->name('update');
            Route::delete('/{id}/destroy', [GartCategoryController::class, 'destroy'])->name('destroy');
        });

        // Gallery Resources
        Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function () {
            Route::get('/', [GartGalleryController::class, 'index'])->name('index');
            Route::get('/create', [GartGalleryController::class, 'create'])->name('create');
            Route::post('/store', [GartGalleryController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [GartGalleryController::class, 'edit'])->name('edit');
            Route::put('/{id}/update', [GartGalleryController::class, 'update'])->name('update');
            Route::delete('/{id}/destroy', [GartGalleryController::class, 'destroy'])->name('destroy');

            // Gallery Form Image Resources
            Route::group(['prefix' => '/{id}/image', 'as' => 'image.'], function () {
                Route::get('/form', [GartGalleryImageController::class, 'form'])->name('form');
                Route::post('/form', [GartGalleryImageController::class, 'formSave'])->name('form.save');
                Route::delete('/{pictureId}/destroy', [GartGalleryImageController::class, 'destroy'])->name('destroy');
            });
        });

    });

    // All These Resources under Reise Stories Prefix
    Route::group(['prefix' => 'reise', 'as' => 'reise.'], function () {

        // Category Resources
        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
            Route::get('/', [ReiseCategoryController::class, 'index'])->name('index');
            Route::get('/create', [ReiseCategoryController::class, 'create'])->name('create');
            Route::post('/store', [ReiseCategoryController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [ReiseCategoryController::class, 'edit'])->name('edit');
            Route::put('/{id}/update', [ReiseCategoryController::class, 'update'])->name('update');
            Route::delete('/{id}/destroy', [ReiseCategoryController::class, 'destroy'])->name('destroy');
        });

        // Gallery Resources
        Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function () {
            Route::get('/', [ReiseGalleryController::class, 'index'])->name('index');
            Route::get('/create', [ReiseGalleryController::class, 'create'])->name('create');
            Route::post('/store', [ReiseGalleryController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [ReiseGalleryController::class, 'edit'])->name('edit');
            Route::put('/{id}/update', [ReiseGalleryController::class, 'update'])->name('update');
            Route::delete('/{id}/destroy', [ReiseGalleryController::class, 'destroy'])->name('destroy');

            // Gallery Form Image Resources
            Route::group(['prefix' => '/{id}/image', 'as' => 'image.'], function () {
                Route::get('/form', [ReiseGalleryImageController::class, 'form'])->name('form');
                Route::post('/form', [ReiseGalleryImageController::class, 'formSave'])->name('form.save');
                Route::delete('/{pictureId}/destroy', [ReiseGalleryImageController::class, 'destroy'])->name('destroy');
            });
        });

    });
});

Route::group(['prefix' => 'auth', 'as' => 'auth.', 'middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'loginView'])->name('login.view');
    Route::post('/login', [LoginController::class, 'loginAction'])->name('login.action');

    Route::get('/logout', [LogoutController::class, 'logoutAction'])
        ->withoutMiddleware(['guest'])
        ->middleware(['auth'])
        ->name('logout.action');
});

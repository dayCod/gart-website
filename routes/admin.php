<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WebsiteVisitorController;
use App\Http\Controllers\Admin\WhatsappClickController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Admin\CustomerMessageController;

use App\Http\Controllers\Admin\Gart\{
    CategoryController as GartCategoryController,
    GalleryController as GartGalleryController,
    GalleryImageController as GartGalleryImageController,
    ServiceController as GartServiceController,
};

use App\Http\Controllers\Admin\Reise\{
    CategoryController as ReiseCategoryController,
    GalleryController as ReiseGalleryController,
    GalleryImageController as ReiseGalleryImageController,
    ServiceController as ReiseServiceController,
};

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/location/{modelId}', [DashboardController::class, 'location'])->name('dashboard.location');

    // All These Resource under Dashboard Profile Prefix
    Route::group(['prefix' => 'profile', 'as' => 'dashboard.profile.'], function () {
        Route::get('/', [DashboardController::class, 'profileView'])->name('view');
        Route::post('/', [DashboardController::class, 'profileAction'])->name('action');
    });

    // All These Resource under Dashboard Web Visitor Prefix
    Route::group(['prefix' => 'webvisitor', 'as' => 'dashboard.webvisitor.'], function () {
        Route::get('/', [WebsiteVisitorController::class, 'index'])->name('index');
    });

    // All These Resources under Whatsapp Click Prefix
    Route::group(['prefix' => 'waclick', 'as' => 'dashboard.waclick.'], function () {
        Route::get('/', [WhatsappClickController::class, 'index'])->name('index');
    });

    // All These Resource under Customer Message Prefix
    Route::group(['prefix' => 'customer-message', 'as' => 'dashboard.customermessage.'], function () {
        Route::get('/', [CustomerMessageController::class, 'index'])->name('index');
    });

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

        // Service Resources
        Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
            Route::get('/', [GartServiceController::class, 'index'])->name('index');
            Route::get('/create', [GartServiceController::class, 'create'])->name('create');
            Route::post('/store', [GartServiceController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [GartServiceController::class, 'edit'])->name('edit');
            Route::put('/{id}/update', [GartServiceController::class, 'update'])->name('update');
            Route::delete('/{id}/destroy', [GartServiceController::class, 'destroy'])->name('destroy');
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

        // Service Resources
        Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
            Route::get('/', [ReiseServiceController::class, 'index'])->name('index');
            Route::get('/create', [ReiseServiceController::class, 'create'])->name('create');
            Route::post('/store', [ReiseServiceController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [ReiseServiceController::class, 'edit'])->name('edit');
            Route::put('/{id}/update', [ReiseServiceController::class, 'update'])->name('update');
            Route::delete('/{id}/destroy', [ReiseServiceController::class, 'destroy'])->name('destroy');
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

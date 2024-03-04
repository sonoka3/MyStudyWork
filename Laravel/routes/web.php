<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebServiceController,
    App\Http\Controllers\AuthController,
    App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/web-service')->group(function(){
    Route::controller(WebServiceController::class)->group(function(){
        Route::get('/', 'index')->name('web_service');
        Route::post('/', 'post');
        Route::get('/confirm', 'showConfirm');
        Route::post('/confirm', 'send');
        Route::get('/complete', 'showComplete');
    });

    Route::controller(AuthController::class)->group(function(){
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'login');
        Route::post('/logout', 'logout')->name('logout');
    });

    Route::controller(AdminController::class)->group(function(){
        Route::middleware('auth')->group(function(){
            Route::prefix('/dashboard')->group(function(){
                Route::get('/', 'index')->name('dashboard');

                Route::post('/', 'store');
                Route::get('/store', 'showStoreResult')->name('store');

                Route::get('/{web_service}/edit', 'showEdit')->name('edit');
                Route::put('/{web_service}/edit', 'upload');
                Route::get('/{web_service}/upload', 'showUploadResult');
                Route::post('/{web_service}/edit', 'uploadImg');

                Route::delete('/{web_service}/edit', 'delete');
                Route::get('/{web_service}/delete', 'showDeleteResult');
            });
        });
    });
});
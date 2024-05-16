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
    //return view('welcome');
    return redirect()->route('web_service');
});

Route::prefix('/web-service')->group(function(){
    Route::controller(WebServiceController::class)->group(function(){
        Route::get('/', 'index')->name('web_service');
        Route::post('/', 'post')->name('post');
        Route::get('/confirm', 'showConfirm')->name('confirm');
        Route::post('/confirm', 'send')->name('send');
        Route::get('/complete', 'showComplete')->name('complete');
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

                Route::post('/', 'store')->name('store');
                Route::get('/store', 'showStoreResult')->name('store_result');

                Route::get('/{web_service}/edit', 'showEdit')->name('edit');
                Route::patch('/{web_service}/edit', 'upload');
                Route::get('/{web_service}/upload', 'showUploadResult')->name('upload_result');

                Route::delete('/{web_service}/delete', 'delete')->name('delete');
                Route::get('/delete', 'showDeleteResult')->name('delete_result');
            });
        });
    });
});
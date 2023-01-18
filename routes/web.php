<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebContactController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/cms/product/')->group(function () {
    Route::view('parantt','cms.parent');
    Route::resource('products' , ProductController::class);
    Route::post('update-products/{id}' , [ProductController::class , 'update'])->name('update-products');

    Route::resource('contacts' , ContactController::class);
    Route::post('update-contacts/{id}' , [ContactController::class , 'update'])->name('update-contacts');
});


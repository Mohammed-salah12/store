<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
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


    Route::resource('admins' , AdminController::class);
    Route::post('update-admins/{id}' , [AdminController::class , 'update'])->name('update-admins');

    Route::resource('categories' , CategoryController::class);

    Route::post('update-categories/{id}' , [CategoryController::class , 'update'])->name('update-categories');


    Route::resource('comments' , CommentController::class);
    Route::post('update-comments/{id}' , [CommentController::class , 'update'])->name('update-comments');


});


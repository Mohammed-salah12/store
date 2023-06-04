<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\API\AdminController as APIAdminController;
use App\Http\Controllers\API\CategoryController as APICategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserAuthConroller;
use App\Http\Controllers\UserAuthController;
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

Route::prefix('cms/')->middleware('guest:admin')->group(function () {
    // Route::get('{guard}/login' , [UserAuth\Controller::class , 'showlogin'])->name('view.login');
    Route::get('{guard}/login' , [UserAuthConroller::class , 'showlogin'])->name('view.login');
    Route::post('{guard}/login' , [UserAuthConroller::class , 'login']);
 });


 Route::prefix('cms/admin/')->middleware('auth:admin')->group(function(){
    Route::get('logout' , [UserAuthConroller::class , 'logout'] )->name('view.test');
});


Route::prefix('cms/regester')->group(function () {
    Route::post('regesterr' , [AdminController::class , 'regester'])->name('Admin.regester');
    Route::get('showregesterr' , [AdminController::class , 'showregester'])->name('Admin.showregester');

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

    Route::resource('companies' , CompanyController::class);
    Route::post('update-companies/{id}' , [CompanyController::class , 'update'])->name('update-companies');


});

Route::prefix('front/')->group(function(){
    Route::get('Homee' , [HomeController::class , 'Home']);

});

Route::view('pearant','contacts.pearant');
Route::resource('contacts' , ContactController::class);
Route::get('home' , [HomeController::class , 'Home'])->name('store.home');;
Route::resource('comments' , CommentController::class);

Route::apiResource('admins' , APIAdminController::class) ;
Route::apiResource('categories' , APICategoryController::class) ;

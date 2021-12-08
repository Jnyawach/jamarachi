<?php

use Illuminate\Support\Facades\Route;
/*Admin Routes*/
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminRoleController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\AdminFaqsController;
use App\Http\Controllers\Admin\AdminFaqsCategoryController;
use App\Http\Controllers\Admin\AdminPolicyController;
use App\Http\Controllers\Admin\AdminBrandController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminSubCategoryController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\DisablePost;
use App\Http\Controllers\Admin\UnpublishPost;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\ProductStoreStepTwo;

/*General Routes*/
use App\Http\Controllers\General\StoriesController;
use App\Http\Controllers\General\BrandController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group([], function (){
    Route::resource('admin',AdminController::class);
    Route::resource('admin/homepage/roles',AdminRoleController::class);
    Route::resource('admin/homepage/users',AdminUSersController::class);
    Route::resource('admin/homepage/faqs',AdminFaqsController::class);
    Route::resource('admin/homepage/faqs-category',AdminFaqsCategoryController::class);
    Route::resource('admin/homepage/policy',AdminPolicyController::class);
    Route::resource('admin/homepage/brand',AdminBrandController::class);
    Route::resource('admin/homepage/category',AdminCategoryController::class);
    Route::resource('admin/homepage/subcategory',AdminSubCategoryController::class);
    Route::resource('admin/homepage/blog',AdminBlogController::class);
    Route::get('subCategory',[AdminProductController::class, 'subCategory'])->name('subCategory');
    Route::get('admin/homepage/products/step-two',[AdminProductController::class, 'productStepTwo'])->name('productStepTwo');
    Route::resource('admin/homepage/products',AdminProductController::class);
    Route::patch('disable/{id}',['as'=>'disable','uses'=>DisablePost::class]);
    Route::post('stepTwoStore',['as'=>'stepTwoStore','uses'=>ProductStoreStepTwo::class]);
    Route::patch('publish/{id}',['as'=>'publish','uses'=>UnpublishPost::class] );

});
Route::group([], function (){
    Route::resource('stories',StoriesController::class);
    Route::resource('brands',BrandController::class);
});

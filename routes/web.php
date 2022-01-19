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
use App\Http\Controllers\Admin\ProductStoreStepThree;
use App\Http\Controllers\Admin\ProductStoreStepFour;
use App\Http\Controllers\Admin\ProductStoreStepFive;
use App\Http\Controllers\Admin\ProductRemoveColor;
use App\Http\Controllers\Admin\ProductCreateFinish;
use App\Http\Controllers\Admin\ChangeProductStatus;
use App\Http\Controllers\Admin\AdminPromotionController;
use App\Http\Controllers\Admin\AddProductPromotion;
use App\Http\Controllers\Admin\UnPromoteProductController;
use App\Http\Controllers\Admin\AdminInterfaceController;
use App\Http\Controllers\Admin\HomeSlideController;


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
    Route::get('admin/homepage/promotions/products/{id}',[AdminPromotionController::class, 'productAdd'])->name('productAdd');
    Route::resource('admin/homepage/promotions',AdminPromotionController::class);
    Route::post('promoteProduct',['as'=>'promoteProduct','uses'=>AddProductPromotion::class]);
    Route::patch('unPromoteProduct/{id}',['as'=>'unPromoteProduct','uses'=>UnPromoteProductController::class]);
    Route::get('subCategory',[AdminProductController::class, 'subCategory'])->name('subCategory');
    Route::get('admin/homepage/products/step-two',[AdminProductController::class, 'productStepTwo'])->name('productStepTwo');
    Route::get('admin/homepage/products/step-three',[AdminProductController::class, 'productStepThree'])->name('productStepThree');
    Route::get('admin/homepage/products/step-four',[AdminProductController::class, 'productStepFour'])->name('productStepFour');
    Route::get('admin/homepage/products/step-five',[AdminProductController::class, 'productStepFive'])->name('productStepFive');
    Route::get('admin/homepage/products/active',[AdminProductController::class, 'productActive'])->name('productActive');
    Route::get('admin/homepage/products/inactive',[AdminProductController::class, 'productInactive'])->name('productInactive');
    Route::get('admin/homepage/products/selling',[AdminProductController::class, 'selling'])->name('selling');
    Route::get('admin/homepage/products/soldout',[AdminProductController::class, 'soldOut'])->name('soldOut');
    Route::resource('admin/homepage/products',AdminProductController::class);
    Route::patch('disable/{id}',['as'=>'disable','uses'=>DisablePost::class]);
    Route::post('stepTwoStore',['as'=>'stepTwoStore','uses'=>ProductStoreStepTwo::class]);
    Route::post('stepThreeStore',['as'=>'stepThreeStore','uses'=>ProductStoreStepThree::class]);
    Route::post('stepFourStore',['as'=>'stepFourStore','uses'=>ProductStoreStepFour::class]);
    Route::post('stepFiveStore',['as'=>'stepFiveStore','uses'=>ProductStoreStepFive::class]);
    Route::patch('publish/{id}',['as'=>'publish','uses'=>UnpublishPost::class] );
    Route::patch('createFinish/{id}',['as'=>'createFinish','uses'=>ProductCreateFinish::class] );
    Route::patch('productStatus/{id}',['as'=>'productStatus','uses'=>ChangeProductStatus::class] );
    Route::delete('removeColor/{id}',['as'=>'removeColor','uses'=>ProductRemoveColor::class]);
    Route::resource('admin/homepage/interface',AdminInterfaceController::class);
    Route::resource('admin/homepage/slide',HomeSlideController::class);

});
Route::group([], function (){
    Route::resource('stories',StoriesController::class);
    Route::resource('brands',BrandController::class);
});

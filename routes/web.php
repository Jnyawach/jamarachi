<?php

use Illuminate\Support\Facades\Route;
/*Admin Routes*/
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminRoleController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\AdminFaqsController;
use App\Http\Controllers\Admin\AdminFaqsCategoryController;
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
});

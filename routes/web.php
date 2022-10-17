<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\FrontController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[FrontController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('admin/dashboard',[DashboardController::class,'index'])->name('admin/dashboard');

Route::get('admin/blog/create',[BlogController::class,'index'])->name('admin.blog.create');
Route::post('admin/blog/store',[BlogController::class,'store'])->name('admin.blog.store');
Route::get('admin/blog/table',[BlogController::class,'table'])->name('admin.blog.table');
Route::get('admin/blog/edit/{id}',[BlogController::class,'edit'])->name('admin.blog.edit');
Route::post('admin/blog/update/{id}',[BlogController::class,'update'])->name('admin.blog.update');
Route::get('admin/blog/delete/{id}',[BlogController::class,'delete'])->name('admin.blog.delete');

Route::get('admin/category/create',[CategoryController::class,'index'])->name('admin.category.create');
Route::post('admin/category/store',[CategoryController::class,'store'])->name('admin.category.store');
Route::get('admin/category/table',[CategoryController::class,'table'])->name('admin.category.table');
Route::get('admin/category/edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit');
Route::post('admin/category/update/{id}',[CategoryController::class,'update'])->name('admin.category.update');
Route::get('admin/category/delete/{id}',[CategoryController::class,'delete'])->name('admin.category.delete');


Route::get('/detail/{id}',[FrontController::class,'detail'])->name('detail');

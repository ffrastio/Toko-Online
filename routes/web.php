<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ProductGalleryController as AdminProductGalleryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\DashboardTransactionsController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\SuccessController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/{id}', [CategoryController::class, 'detail'])->name('category-detail');
Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail');
Route::post('/detail/{id}', [DetailController::class, 'add'])->name('detail-add');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart-delete');
Route::get('/success', [SuccessController::class, 'index'])->name('success');

Route::get('/register-success', [SuccessController::class, 'registerSuccess'])->name('register-success');

// User Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/products', [DashboardProductController::class, 'index'])->name('dashboard-products');
Route::get('/dashboard/product/create', [DashboardProductController::class, 'add'])->name('dashboard-product-create');
Route::get('/dashboard/product/{id}', [DashboardProductController::class, 'details'])->name('dashboard-product-details');
Route::get('/dashboard/transactions', [DashboardTransactionsController::class, 'index'])->name('dashboard-transaction');
Route::get('/dashboard/transaction/{id}', [DashboardTransactionsController::class, 'details'])->name('dashboard-transaction-details');
Route::get('/dashboard/settings', [DashboardSettingController::class, 'store'])->name('dashboard-setting-store');
Route::get('/dashboard/account', [DashboardSettingController::class, 'account'])->name('dashboard-setting-account');

// Admin Dashboard
Route::prefix('admin')
    ->name('Admin')
    ->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard-admin');
        Route::resource('category', AdminCategoryController::class);
        Route::resource('user', AdminUserController::class);
        Route::resource('product', AdminProductController::class);
        Route::resource('product-gallery', AdminProductGalleryController::class);
    });

Auth::routes();

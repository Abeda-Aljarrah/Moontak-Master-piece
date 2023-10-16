<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PaymentDetailController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'show'])->name('home');
Route::get('/category/{id}', [ProductController::class, 'show'])->name('category');
Route::get('/product/{id}', [ProductController::class, 'showsingle'])->name('product');
Route::get('/list/{id}', [CartController::class, 'show'])->name('list');
Route::post('/addToCart/{id}', [ProductController::class, 'addToCart'])->name('addToCart');
Route::get('/checkout/{id}', [OrderDetailController::class, 'show'])->name('checkout1');
Route::post('/checkout2/{id}', [OrderDetailController::class, 'update'])->name('checkout2');
Route::post('/checkoutsub/{userId}/{planId}', [OrderDetailController::class, 'edit'])->name('checkoutsub');
Route::post('/checkout3/{userId}/{periodId?}', [PeriodController::class, 'show'])->name('checkout3');
Route::post('/checkout4/{userId}', [OrderController::class, 'show'])->name('checkout4');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard_welcome', function () {
    return view('welcome-dashboard');
})->name('dashboard.dashboard_login');

Route::resource('dashboard/users', UserController::class);
Route::resource('dashboard/categories', CategoryController::class);
Route::resource('dashboard/products', ProductController::class);
Route::resource('dashboard/orders', OrderController::class);
Route::resource('dashboard/plans', PlanController::class);
Route::resource('dashboard/periods', PeriodController::class);
Route::resource('dashboard/coupons', CouponController::class);
Route::resource('dashboard/orderdetails', OrderDetailController::class);
Route::resource('dashboard/paymentdetails', PaymentDetailController::class);
Route::resource('dashboard/subscriptions', SubscriptionController::class);




require __DIR__.'/auth.php';

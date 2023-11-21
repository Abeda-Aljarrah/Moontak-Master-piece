<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CustomAuthController;
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
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/myprofile/{userId}', [UserController::class, 'show'])->name('myprofile');
Route::get('/test', [HomeController::class, 'index'])->name('test');
Route::get('/category/{id}', [ProductController::class, 'show'])->name('category');
Route::get('/product/{id}', [ProductController::class, 'showsingle'])->name('product');
Route::get('/list', [CartController::class, 'show'])->name('list');
Route::post('/addToCart/{id}', [ProductController::class, 'addToCart'])->name('addToCart');
Route::get('/checkout', [OrderDetailController::class, 'show'])->name('checkout1');
Route::post('/checkout2/{id}', [OrderDetailController::class, 'update'])->name('checkout2');
Route::post('/checkoutsub/{planId}', [OrderDetailController::class, 'edit'])->name('checkoutsub');
Route::post('/checkout3/{userId}/{periodId?}', [PeriodController::class, 'show'])->name('checkout3');
Route::post('/checkout4/{userId}', [OrderController::class, 'show'])->name('checkout4');

Route::delete('remove-from-cart/{id}', [CartController::class, 'remove'])->name('remove.from.cart');
Route::post('/updateCartItemQuantity', [CartController::class, 'updateQuantity'])->name('updateCartItemQuantity');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/dashboard_welcome', function () {
//     return view('welcome-dashboard');
// })->name('dashboard.dashboard_login');

Route::get('/dashboard_login', function () {
    return view('dashboard.dashboard_login');
})->name('dashboard.dashboard_login');

Route::resource('dashboard/users', UserController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/categories', CategoryController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/products', ProductController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/orders', OrderController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/plans', PlanController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/periods', PeriodController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/coupons', CouponController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/orderdetails', OrderDetailController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/paymentdetails', PaymentDetailController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/subscriptions', SubscriptionController::class)->middleware('adminMiddleWare');

Route::post('welcome/dashboard', [CustomAuthController::class, 'loginUser'])->name('dashlog');

Route::get('/dashboard_welcome', [CustomAuthController::class, 'sidebar'])->middleware('adminMiddleWare');

Route::get('dashboard_logout', [CustomAuthController::class, 'logout']);




require __DIR__.'/auth.php';

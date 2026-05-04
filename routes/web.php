<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MemberAuthController;

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

// Website Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [HomeController::class, 'show'])->name('product.show');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Member Auth Routes
Route::get('/login', [MemberAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [MemberAuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [MemberAuthController::class, 'logout'])->name('logout');

// Member Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('member.dashboard');
    })->name('member.dashboard');
});

// Admin Panel Login Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});

// Protected Admin Panel Routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Products CRUD
    Route::resource('products', ProductController::class);
    Route::delete('product-images/{image}', [ProductController::class, 'deleteImage'])->name('product-images.destroy');
    Route::post('product-images/{image}/set-primary', [ProductController::class, 'setPrimaryImage'])->name('product-images.set-primary');

    // Members CRUD
    Route::resource('members', \App\Http\Controllers\Admin\MemberController::class);

    // Banners CRUD
    Route::resource('banners', \App\Http\Controllers\Admin\BannerController::class);
});


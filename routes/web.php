<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Products
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Auth
// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/register', [AuthController::class, 'store'])->name('register.store');
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
// Route::get('/login/google', [AuthController::class, 'loginGoogle'])->name('login_google');
// Route::get('/login/google/callback', [AuthController::class, 'loginGoogleCallback'])->name('callback_google');

//Profile
// Route::get('/dashboard', [AuthController::class, 'profile'])->middleware(['authentication','role:superadmin|user'])->name('profile');



// Dashboard
// Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
// Route::prefix('dashboard')->middleware('authentication')->group(function () {

    // Products
    // Route::prefix('products')->middleware(['authentication','role:superadmin|user'])->group(function () {
    //     Route::get('/', [DashboardController::class, 'products'])->name('dashboard.products');
    //     Route::get('/add', [DashboardController::class, 'addProduct'])->name('dashboard.products.add');
    //     Route::post('/store', [DashboardController::class, 'storeProduct'])->name('dashboard.products.store');
    //     Route::get('/edit/{id}', [DashboardController::class, 'editProduct'])->name('dashboard.products.edit');
    //     Route::put('/update/{id}', [DashboardController::class, 'updateProduct'])->name('dashboard.products.update');
    //     Route::post('/delete/{id}', [DashboardController::class, 'deleteProduct'])->name('dashboard.products.delete');
    //     Route::get('/export', [DashboardController::class, 'exportProduct'])->name('dashboard.products.export');

        // store product with transaction
        // Route::get('/store-transaction/{id}', [TransactionController::class, 'storeProductTransaction'])->name('dashboard.products.store-transaction');
        // Route::post('/progress-transaction/{id}',[TransactionController::class, 'loadingProductTransaction'])->name('dashboard.products.progress-transaction');
        // Route::get('/transaction-detail/{id}',[TransactionController::class,'storeDetailTransaction'])->name('dashboard.products.detail-transaction');
        // update pcc
        // Route::put('/update-pcc/{id}', [DashboardController::class, 'updateProductPCC'])->name('dashboard.products.update-pcc');

        // // update occ
        // Route::put('/update-occ/{id}', [DashboardController::class, 'updateProductOCC'])->name('dashboard.products.update-occ');
    // });

    // Users
    // Route::prefix('users')->middleware('role:superadmin')->group(function () {
    //     Route::get('/', [DashboardController::class, 'users'])->name('dashboard.users');
    //     Route::get('/add', [DashboardController::class, 'addUser'])->name('dashboard.users.add');
    //     Route::post('/store', [DashboardController::class, 'storeUser'])->name('dashboard.users.store');
    //     Route::get('/edit/{id}', [DashboardController::class, 'editUser'])->name('dashboard.users.edit');
    //     Route::put('/update/{id}', [DashboardController::class, 'updateUser'])->name('dashboard.users.update');
    //     Route::post('/delete/{id}', [DashboardController::class, 'deleteUser'])->name('dashboard.users.delete');
    // });


    



    // Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    // Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
    // Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    // Profile route
    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');

    // Route::post('/register', [RegisterController::class, 'store'])->name('register.store');



// });

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/login/google', [AuthController::class, 'loginGoogle'])->name('login_google');
Route::get('/login/google/callback', [AuthController::class, 'loginGoogleCallback'])->name('callback_google');

// Profile
Route::get('/profile', [AuthController::class, 'profile'])->middleware('auth')->name('profile');

// Dashboard
Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::prefix('dashboard')->middleware('auth')->group(function () {
    
    // Products
    // Route::prefix('products')->middleware('role:superadmin|user')->group(function () {
    //     Route::get('/', [DashboardController::class, 'products'])->name('dashboard.products');
    //     Route::get('/add', [DashboardController::class, 'addProduct'])->name('dashboard.products.add');
    //     Route::post('/store', [DashboardController::class, 'storeProduct'])->name('dashboard.products.store');
    //     Route::get('/edit/{id}', [DashboardController::class, 'editProduct'])->name('dashboard.products.edit');
    //     Route::put('/update/{id}', [DashboardController::class, 'updateProduct'])->name('dashboard.products.update');
    //     Route::post('/delete/{id}', [DashboardController::class, 'deleteProduct'])->name('dashboard.products.delete');
    //     Route::get('/export', [DashboardController::class, 'exportProduct'])->name('dashboard.products.export');

    //     // store product with transaction
    //     Route::get('/store-transaction/{id}', [TransactionController::class, 'storeProductTransaction'])->name('dashboard.products.store-transaction');
    //     Route::post('/progress-transaction/{id}', [TransactionController::class, 'loadingProductTransaction'])->name('dashboard.products.progress-transaction');
    //     Route::get('/transaction-detail/{id}', [TransactionController::class, 'storeDetailTransaction'])->name('dashboard.products.detail-transaction');
    // });

    // Users
    Route::prefix('users')->middleware('role:superadmin')->group(function () {
        Route::get('/', [DashboardController::class, 'users'])->name('dashboard.users');
        Route::get('/add', [DashboardController::class, 'addUser'])->name('dashboard.users.add');
        Route::post('/store', [DashboardController::class, 'storeUser'])->name('dashboard.users.store');
        Route::get('/edit/{id}', [DashboardController::class, 'editUser'])->name('dashboard.users.edit');
        Route::put('/update/{id}', [DashboardController::class, 'updateUser'])->name('dashboard.users.update');
        Route::post('/delete/{id}', [DashboardController::class, 'deleteUser'])->name('dashboard.users.delete');
    });


    // Products
    // Route::prefix('products')->middleware('role:superadmin|user')->group(function () {
    //     Route::get('/', [DashboardController::class, 'products'])->name('dashboard.products');
    //     Route::get('/add', [DashboardController::class, 'addProduct'])->name('dashboard.products.add');
    //     Route::post('/store', [DashboardController::class, 'storeProduct'])->name('dashboard.products.store');
    //     Route::get('/edit/{id}', [DashboardController::class, 'editProduct'])->name('dashboard.products.edit');
    //     Route::put('/update/{id}', [DashboardController::class, 'updateProduct'])->name('dashboard.products.update');
    //     Route::post('/delete/{id}', [DashboardController::class, 'deleteProduct'])->name('dashboard.products.delete');
    //     Route::get('/export', [DashboardController::class, 'exportProduct'])->name('dashboard.products.export');
    // });

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');

});
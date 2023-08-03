<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('dashboard', DashboardController::class);
    // Route::resource('account', UserController::class);
    Route::get('/account', [AccountController::class, 'account'])->name('account');
    Route::post('/account/{redirect}', [AccountController::class, 'update'])->name('account-update');
});

Route::group(['middleware' => ['auth','admin']], function() {
    Route::resource('invitation', DashboardController::class);
    // Route::resource('user', UserController::class);
});
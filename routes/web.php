<?php

// use App\Http\Controllers\PDFController;

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login-user', [LoginController::class, 'login'])->name('login-user');
Route::middleware('auth')->group(function () {

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\AccountController::class, 'index'])->name('home');
Route::get('/edit/{id}', [App\Http\Controllers\AccountController::class, 'edit'])->name('edit');
Route::post('/store', [App\Http\Controllers\AccountController::class, 'store'])->name('store');
Route::post('/delete', [App\Http\Controllers\AccountController::class, 'delete'])->name('delete');
Route::post('/update', [App\Http\Controllers\AccountController::class, 'update'])->name('update');
Route::post('/payment', [App\Http\Controllers\AccountController::class, 'payment'])->name('payment');
});
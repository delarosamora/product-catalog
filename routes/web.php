<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function(){
    return redirect('products');
})->name('index');

Route::get('/home', function(){
    return redirect('products');
})->name('home');

Route::resource('/products', ProductController::class)->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'doLogin'])->name('do-login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/change-password', [UserController::class, 'changePassword'])->name('changePassword')->middleware('auth');
Route::post('/change-password', [UserController::class, 'doChangePassword'])->name('do-changePassword')->middleware('auth');

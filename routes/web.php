<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

//Auth route
Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login_post'])->name('admin.login.post');
Route::get('/admin/register', [AuthController::class, 'register'])->name('admin.register');
Route::post('/admin/register', [AuthController::class, 'register_post'])->name('admin.register.post');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

//Admin route
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
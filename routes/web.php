<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::resource('/blog', BlogController::class);
Route::resource('/team', TeamController::class);

Route::resource('/blog-details', BlogDetailsController::class);

Auth::routes();

//Route::get('/logins', [LoginController::class, 'showLoginForm'])->name('login');//menampilkan login
//Route::post('admin/dashboard', [LoginController::class, 'login'])->name('login.post');//submit login
//Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


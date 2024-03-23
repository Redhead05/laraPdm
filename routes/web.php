<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;



//Route::get('/', function () {
////    return view('Pages/test');
//    return Inertia\Inertia::render('index');
//});
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::resource('/blog', BlogController::class);
Route::resource('/team', TeamController::class);

Route::resource('/blog-details', BlogDetailsController::class);

Route::get('/logins', [LoginController::class, 'showLoginForm'])->name('login');



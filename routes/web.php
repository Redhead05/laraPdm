<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;



//Route::get('/', function () {
////    return view('Pages/test');
//    return Inertia\Inertia::render('index');
//});
Route::get('/', [IndexController::class, 'index']);
Route::resource('/blog', BlogController::class);
Route::resource('/blog-details', BlogDetailsController::class);

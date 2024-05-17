<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('error', function () {
    return view('404');
})->name('error');
Route::get('indx', [IndexController::class,'indx'])->name('indx');
Route::get('about', [IndexController::class,'about'])->name('about');
Route::get('contact', [IndexController::class,'contact'])->name('contact');
Route::get('cart', [IndexController::class,'cart'])->name('cart');
Route::get('checkout', [IndexController::class,'checkout'])->name('checkout');
Route::get('news', [IndexController::class,'news'])->name('news');
Route::get('shop', [IndexController::class,'shop'])->name('shop');
Route::get('singleNews', [IndexController::class,'singleNews'])->name('singleNews');
Route::get('singleProduct', [IndexController::class,'singleProduct'])->name('singleProduct');
Route::get('dyHome', [IndexController::class,'dyHome'])->name('dyHome');


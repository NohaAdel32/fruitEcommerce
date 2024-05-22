<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

// Route::get('ft', function () {
//     return view('admin.category.addCategory');
// });
Route::prefix('admin')->group(function () {
    
    //categories
    Route::get('addCategory', [CategoryController::class,'create'])->name('addCategory');
    Route::post('storeCat', [CategoryController::class,'store'])->name('storeCat');
    Route::get('category', [CategoryController::class,'index'])->name('category');
    Route::get('updateCategory/{id}', [CategoryController::class,'edit']);
    Route::put('updateCat/{id}', [CategoryController::class,'update'])->name('updateCat');
    Route::get('deleteCategory/{id}', [CategoryController::class,'destroy']);
});

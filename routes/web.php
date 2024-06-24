<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Backend;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace'=>'Backend','prefix'=>'admin'], function () {
    Route::get('/',[Backend\HomeController::class,'index'])->name('get_admin.home');
    Route::group(['prefix'=>'category'],function(){
        Route::get('/',[Backend\CategoryController::class,'index'])->name('get_admin.category.index');
    });
});


Route::group(['namespace'=>'Frontend'], function () {
    Route::get('',[Frontend\HomeController::class,'index'])->name('get.home');
    
});
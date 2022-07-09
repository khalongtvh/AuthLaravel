<?php

use App\Http\Controllers\Auth\BookController;
use App\Http\Controllers\Auth\CategoryController;
use App\Http\Controllers\Auth\LandingPageController;
use App\Http\Controllers\Auth\OrderController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=> 'admin'], function (){
    Route::get('', [LandingPageController::class, 'index'])->name('landingPage');

    Route::group(['prefix'=>'category'], function (){
        Route::get('', [CategoryController::class, 'index'])->name('category');
        // Route::get('')
    });

    Route::group(['prefix'=>'book', 'middleware' => 'auth'], function(){
        Route::get('', [BookController::class, 'index'])->name('book');
        Route::get('create', [BookController::class, 'create'])->name('bookCreate');
    });
    Route::group(['prefix'=>'order'], function(){
        Route::get('', [OrderController::class, 'index'])->name('order');
    });
});
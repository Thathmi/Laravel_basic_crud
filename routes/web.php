<?php

use App\Http\Controllers\products_controller;
use App\Http\Controllers\user;
use App\Http\Controllers\user_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product',[products_controller::class ,'index'])->name('product.index');
Route::get('/product/Create',[products_controller::class ,'create'])->name('product.create');
Route::post('/product',[products_controller::class ,'store'])->name('product.store');
Route::get('/product/{product}/edit',[products_controller::class ,'edit'])->name('product.edit');
Route::put('/product/{product}/edit',[products_controller::class ,'update'])->name('product.update');
Route::delete('/product/{product}/destroy',[products_controller::class ,'destroy'])->name('product.destroy');


Route::get('/user',[user_controller::class,'UserIndex'])->name('user.index');
Route::get('/user/create',[user_controller::class,'saveuser'])->name('user.store');
ROute::post('/user',[user_controller::class,'storeUser'])->name('user.save');



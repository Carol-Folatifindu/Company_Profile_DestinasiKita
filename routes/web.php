<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GaleryController;

Route::get('/',[HomePageController::class,'index'])->name('home');;
Route::get('/contact',[HomePageController::class,'contact'])->name('contact');
Route::get('/galery',[GaleryController::class,'index'])->name('galery');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserController;

Route::get('/',[HomePageController::class,'index'])->name('home');;
Route::get('/contact',[HomePageController::class,'contact'])->name('contact');
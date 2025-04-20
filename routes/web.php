<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'index'])->name('home');

Route::get('about-us',[MainController::class,'about_us'])->name('about');

Route::get('contact-us',[MainController::class,'contact_us'])->name('contact');

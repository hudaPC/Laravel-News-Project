<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'index']);

Route::get('about-us',[MainController::class,'about_us']);

Route::get('contact-us',[MainController::class,'contact_us']);

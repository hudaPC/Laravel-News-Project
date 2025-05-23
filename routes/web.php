<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'index'])->name('home');

Route::get('about-us',[MainController::class,'about_us'])->name('about');

Route::get('contact-us',[MainController::class,'contact_us'])->name('contact');
Route::get('model-saving', [MainController::class, 'model_saving'])->name('model-saving');
Route::get('model-querying', [MainController::class, 'model_querying'])->name('model-querying');


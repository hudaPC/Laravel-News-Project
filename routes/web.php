<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





Route::get('about-us',function(){
    return route('contact');    
})->name('about');


Route::get('news-details/{id}',function($id){
    return 'News details Post ID => '.$id;    
});




Route::get('contact-us',function(){
    // code here
       // echo 'This is about us page';
    return 'This is  contact us page';    
})->name('contact');
    

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        // logic....
        return view('home');

    }
    public function about_us(){
      //return view('others.about-us'); also ok
      return view('others.about-us');
 
    }
    public function contact_us(){
        return view('others.contact-us');
       // return ("This is contact us from main controller");

    }
}

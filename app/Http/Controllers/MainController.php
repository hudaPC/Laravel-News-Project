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
      return view('others.about-us');
        //return ("This is about us from main controller");

    }
    public function contact_us(){
        return view('others.contact-us');
       // return ("This is contact us from main controller");

    }
}

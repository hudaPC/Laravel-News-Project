<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $name='Bodrul Huda';
        $sex = 'Male';
        $dob = '01/03/1967';
        $colors = [
            'Black',
            'White',
            'Green',
            'Yellow',
            'Blue',
            'Pink',
        ];
        return view('home',[
            'name' => $name,
            'sex' => $sex,
            'dob' => $dob,
            'colors' => $colors
        ]);

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

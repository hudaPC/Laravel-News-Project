<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
       return view('index');
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
      return view('others.about-us'); 
    }
    public function contact_us(){
        return view('others.contact-us');
       // return ("This is contact us from main controller");

    }
    public function model_saving(){
      // die('Time to save the model.......');
      $m = new NewsCategory();
      $m->name = 'Cinemas';
      $m->photo = 'no_image.jpg';
      $m->details = 'Cinemas news details.';
      //$m->save();

      die('Done processing');

    }
    public function model_querying(){
    

      die('Done qurrying');

    }




}

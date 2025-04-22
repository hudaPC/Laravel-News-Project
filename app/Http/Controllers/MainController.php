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
      $m->name = 'Local News';
      $m->photo = 'no_image.jpg';
      $m->details = 'Local News details.';
      //$m->save();

      die('Done processing');

    }
    public function model_querying(){
       

       // Empty array Order By desc
       $cats = NewsCategory::where([])->orderBy('id','desc')->get();
       echo "<h4>WHERE all desc</h4>";
       foreach ($cats  as $key => $cat) {
         echo "{$cat->id}. {$cat->name}. {$cat->details}<br>";
       }

      // Order By desc
      $cats = NewsCategory::wherein('id',[1,3,5])->orderBy('id','desc')->get();
      echo "<h4>WHERE desc</h4>";
      foreach ($cats  as $key => $cat) {
        echo "{$cat->id}. {$cat->name}. {$cat->details}<br>";
      }

      // WhereIn condition
      $cats = NewsCategory::wherein('id',[1,3,5])->get();
      echo "<h4>WHERE IN</h4>";
      foreach ($cats  as $key => $cat) {
        echo "{$cat->id}. {$cat->name}. {$cat->details}<br>";
      }




      // single Where condition
  $cats = NewsCategory::where('name','Cinema')->get();
    echo "<h4>Single WHERE</h4>";
    foreach ($cats  as $key => $cat) {
      echo "{$cat->id}. {$cat->name}. {$cat->details}<br>";
    }

      // OrWhere condition
       $cats = NewsCategory::where([
        'name' => 'Cinema',
          ])->OrWhere([
            'id' => '4',
          ])->OrWhere([
            'id' => '1'])->get();

          echo "<h4>OR WHERE</h4>";
          foreach ($cats  as $key => $cat) {
            echo "{$cat->id}. {$cat->name}. {$cat->details}<br>";
          }

      // where condition
      $cats = NewsCategory::where([
    'name' => 'Politics',
    'id' => 1
      ])->get();
      echo "<h4>WHERE</h4>";
      foreach ($cats  as $key => $cat) {
        echo "{$cat->id}. {$cat->name}. {$cat->details}<br>";
      }

      // all data
      $categories = NewsCategory::all();
      echo "<h4> All</h4>";
      echo "<h5>ID    Name      Details </h5>";
      foreach ($categories  as $key => $cat) {
        echo "{$cat->id}. {$cat->name}. {$cat->details}<br>";
      }
      //dd($categories);// dump all
      die('.');
    }




}

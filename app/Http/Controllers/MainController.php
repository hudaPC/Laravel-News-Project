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
      $m->name = 'Intenational News';
      $m->photo = 'no_image.jpg';
      $m->details = 'Intenational News details.';
     //$m->save();

      die('Done processing');

    }
    public function model_querying(){




       // Appends => to add a variable in model
       $cats= NewsCategory::where([])
       ->get();
       echo "<h4> QUERY NAME LIKE </h4>";
       foreach ($cats  as $key => $cat) {
         echo "{$cat->id}. {$cat->short_name}. {$cat->details}<br>";
       }
          // scope like 
          $cats= NewsCategory::where('name', 'like', '%t%')
          ->get();
          echo "<h4> QUERY NAME LIKE </h4>";
          foreach ($cats  as $key => $cat) {
            echo "{$cat->id}. {$cat->name}. {$cat->details}<br>";
          }

          // scope >, < , >=, <= , !=
          $cats= NewsCategory::where('id', '<=', 1)
          ->get();
          echo "<h4> QUERY SCOPE</h4>";
          foreach ($cats  as $key => $cat) {
            echo "{$cat->id}. {$cat->name}. {$cat->details}<br>";
          }
          
    
        // average 
        $average= NewsCategory::where([])
        ->avg('id');
        echo "<h4>AVERAGE</h4>";
        echo " $average <br>";
        
  
      
      // agregate sum
      $sum = NewsCategory::where([])
      ->sum('id');
      echo "<h4>SUM</h4>";
      echo " $sum <br>";
      


      // FINDORFAIL if null it goesr 404 not found page
      // $cat = NewsCategory::findorfail(10);
      // echo "<h4>FIND</h4>";
      // if($cat!=null){
      //   echo "{$cat->id}. {$cat->name}. {$cat->details}";
      // }
       // FIND inside find must be an id
      $cat = NewsCategory::find(1);
      echo "<h4>FIND</h4>";
      if($cat!=null){
        echo "{$cat->id}. {$cat->name}. {$cat->details}";
      }
      

      // LIMIT
      $cats = NewsCategory::where([])
      ->limit(2)
      ->get();
      echo "<h4>LIMIT</h4>";
      foreach ($cats  as $key => $cat) {
        echo "{$cat->id}. {$cat->name}. {$cat->details}<br>";
      }

       // Empty array Order By desc
       $cats = NewsCategory::where([])
       ->orderBy('id','desc')
       ->get();
       echo "<h4>WHERE all desc</h4>";
       foreach ($cats  as $key => $cat) {
         echo "{$cat->id}. {$cat->name}. {$cat->details}<br>";
       }

      // Order By desc
      $cats = NewsCategory::wherein('id',[1,3,5])
      ->orderBy('id','desc')
      ->get();
      echo "<h4>WHERE desc</h4>";
      foreach ($cats  as $key => $cat) {
        echo "{$cat->id}. {$cat->name}. {$cat->details}<br>";
      }

      // WhereIn condition
      $cats = NewsCategory::wherein('id',[1,3,5])
      ->get();
      echo "<h4>WHERE IN</h4>";
      foreach ($cats  as $key => $cat) {
        echo "{$cat->id}. {$cat->name}. {$cat->details}<br>";
      }

      // single Where condition
  $cats = NewsCategory::where('name','Cinema')
  ->get();
    echo "<h4>Single WHERE</h4>";
    foreach ($cats  as $key => $cat) {
      echo "{$cat->id}. {$cat->name}. {$cat->details}<br>";
    }

      // OrWhere condition
       $cats = NewsCategory::where(['name' => 'Cinema',
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

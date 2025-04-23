<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
 //creating
//created
//updating
//updated
//deleting
//deleted

    protected $table = 'news_categories';

    public static function boot(){
        parent::boot();

        self::creating(function($m){
            $old = NewsCategory::where('name', $m->name)->first();
            if($old != null){
                return false;
                throw new Exception("News Category with $m->name already exist!");
                }
                return $m;
        });
       
        self::updating(function($m){
            $old = NewsCategory::where('name', $m->name)->first();
            if($old != null){
                return false;
                throw new Exception("News Category with $m->name already exist!");
                }
                return $m;
        });

        self::created(function($m){
            return $m;
        });

        self::updated(function($m){
            return $m;
        });


    }





    // Add this so short_name is included in output
    protected $appends = ['short_name'];

    // Custom accessor for short_name
    public function getShortNameAttribute()
    {
        return substr($this->name, 0, 3);
    }

    // Override name attribute (e.g., make uppercase and add dot)
    public function getNameAttribute($name)
    {
       return $name; // it will dispaly original
        return strtoupper($name) . "."; // it will display Upercase
    }
	
}
/*
	id	name	photo	details	created_at	updated_at	


*/
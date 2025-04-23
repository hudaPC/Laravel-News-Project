<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
 
	//creating
//created
//updating
//updated
//deleting
//deleted

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
        return strtoupper($name) . ".";
    }


	
}
/*
	id	name	photo	details	created_at	updated_at	


*/
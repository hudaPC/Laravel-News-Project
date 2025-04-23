<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
 
	public function getShortNameAttribute(){
		return substr($this->name,0,3);
	}
	protected $appends = ['short_name']; 

	
}
/*
	id	name	photo	details	created_at	updated_at	


*/
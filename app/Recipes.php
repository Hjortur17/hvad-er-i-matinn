<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
	public function ingredients()
	{
		return $this->hasMany('App\Ingredients');
	}	

	public function instructions()
	{
		return $this->hasMany('App\Instructions');
	}
}

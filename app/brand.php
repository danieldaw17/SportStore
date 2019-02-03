<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
	public function brands() {
		return $this->hasMany('App\Brand');
	}
}

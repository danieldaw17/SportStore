<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    public function categories() {
		return $this->belongsTo('App\Category');
	}

	public function products() {
		return $this->hasMany('App\Product');
	}
}

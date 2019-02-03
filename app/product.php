<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function brands() {
		return $this->hasMany('App\Brand');
	}

	public function sports() {
		return $this->hasMany('App\Sport');
	}

	public function stocks() {
		return $this->belongsTo('App\Stock');
	}

	public function images() {
		return $this->hasMany('App\Image');
	}

	public function sub_categories() {
		return $this->belongsTo('App\Sub_category');
	}

	public function invoice_lines() {
		return $this->hasMany('App\Invoice_line');
	}
}

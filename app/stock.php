<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
	protected $fillable = ['amount','size','productId'];
	public function products() {
		return $this->belongsTo('App\Product');
	}
}

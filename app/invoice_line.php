<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice_line extends Model
{
	public function products() {
		return $this->hasMany('App\Product');

		public function invoices() {
			return $this->belongsTo('App\Invoice');
		}
	}
}

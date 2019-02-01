<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
	public function invoice_lines() {
		return $this->hasMany('App\Invoice_line');
	}

	public function users() {
		return $this->belongsTo('App\User');
	}

	public function deliveries() {
		return $this->hasMany('App\Delivery');
	}
}

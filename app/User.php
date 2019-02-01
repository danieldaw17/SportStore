<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	public function invoices() {
		return $this->belongsTo('App\Invoice');
	}

	public function addresses() {
		return $this->hasMany('App\Address');
	}
}

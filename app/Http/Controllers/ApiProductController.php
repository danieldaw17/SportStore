<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ApiProductController extends Controller
{
    public function defuse($productId)
	{
		$product = Product::find($productId);
		if ($product==null) {
			return (string)false;
		}
		$product->active=false;
		return (string)$product->save();
	}
}

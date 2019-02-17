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
			$response = array('deactivated' => false);
			return json_encode($response);
		}

		$product->active=false;
		$product->save();

		$response = array('deactivated' => true);
		return json_encode($response);
	}
}

<?php
namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
class ProductController extends Controller
{
	public function getShow($id){
		$product = Product::find($id);
		return view ('partials.product-detail',['product'=>$product]);
	}

	
}
?>
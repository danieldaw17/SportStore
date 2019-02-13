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

	public function getAddToCart(Request $request,$id){
		$product = Product::find($id);
		$oldCart = Session::has('cart') ? Session::get('cart') :null;
		$cart = new Cart($oldCart);
		$cart->add($product,$product->id);

		$request->session()->put('cart',$cart);
		
	}
	public function getCart(){
		if(!Session::has('cart')){
			return view('partials.cart');
		}
		$oldCart = Session::get('cart');
		$cart = new Cart($oldCart);
		return view ('partials.cart',array('products' =>$cart->items,'totalPrice'=>$cart->totalPrice));

	}
}
?>
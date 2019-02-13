<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sub_category;
use App\Category;
use App\Product;
use App\Image;
use Illuminate\Support\Facades\Input;

class indexController extends Controller
{
    public function getCategorias(){
    	$images = Image::all();
		$categoriesNav=Category::all();
		$sub_categoriesNav=Sub_category::all();
		$productsTopNews = Product::orderBy('created_at', 'desc')->take(6)->paginate(2);
		$productsTopPrices = Product::orderBy('basePrice', 'asc')->take(6)->get();
		return view('partials.index', array('categoriesNav'=> $categoriesNav,'sub_categoriesNav'=>$sub_categoriesNav, 'productsTopNews'=>$productsTopNews, 'productsTopPrices'=>$productsTopPrices, 'images'=>$images));
    }

    public function search(){
        $images = Image::all();
        $text = Input::post('text');
        $product = Product::where('name','LIKE','%'.$text.'%')->paginate(3);
        if(count($product) > 0){
            return view('partials.results', array('images'=>$images))->withDetails($product)->withQuery($text);
        }

    }

}
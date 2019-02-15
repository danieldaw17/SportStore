<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use Illuminate\Support\Facades\Input;
use App\Image;
use App\Product;
use App\Category;
use App\Sub_category;

class SearchController extends Controller
{
    public function search(){
    	// Nav
    	$categoriesNav=Category::all();
		$sub_categoriesNav=Sub_category::all();
    	// Datos bd
        $images = Image::all();
        // Datos formulario
        $text = Input::post('text');
        $subcategory = Input::post('subcategory');
        $brand = Input::post('brand');
        $gender = Input::post('gender');
        // Consulta
        $product = Product::query();

        if(!empty($text)){
        	$product = $product->where('name', 'like', '%' . $text . '%', 'OR', 'description', 'like', '%' .$text.'%');
        }
        if($subcategory != 0){
        	$product = $product->where('subCategoryId', '=', $subcategory);
        }
        if($brand != 0){
        	$product = $product->where('brandId', '=', $brand);
        }
        if($gender != "0"){
        	$product = $product->where('gender', '=', '$gender');
        }

        $product = $product->paginate(5);
        /*
        $product = Product::where('name','LIKE','%'.$text.'%')->orWhere('description','LIKE','%'.$text.'%')->paginate(3);
        */
        // Retorno vista si devuelve resultados
        if (count($product) > 0) {
            return view('partials.results', array('categoriesNav'=> $categoriesNav,'sub_categoriesNav'=>$sub_categoriesNav,'images'=>$images))->withDetails($product);
        } else {
        	return view('partials.results',array('categoriesNav'=> $categoriesNav,'sub_categoriesNav'=>$sub_categoriesNav))->with('message', "No product matches your search");
        }

    }

    public function ajaxSubcategories(){
    	$cat_id = Input::get('cat_id');
		$subcategories = Sub_category::where('categoryId', '=', $cat_id)->get();
		return Response::json($subcategories);
    }

}

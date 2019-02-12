

<?php

namespace App\Http\Controllers;
use App\Sub_category;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

     public function showSubCategory($categoryId){
     	$sub_categories = Sub_category::where('categoryId', $categoryId)->get();
		return view ('partials.showSubCategories', array('subCategory'=> $sub_categories));

      }
      public function showProducts($subCategoryId)
   
    	$products = Product::where('subCategoryId', $subCategoryId)->get();
		return view ('partials.showProducts', array('products'=>$products));
     }

     public function showProduct($productId){
		$product = Product::find($productId);
		return view ('partials.product-detail', array('product'=> $product));
	}

     
}



?>
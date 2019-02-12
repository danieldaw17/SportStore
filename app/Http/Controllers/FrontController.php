

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

    public function showSubCategories($categoryId)
    {
    	$categories = Category::all();
    	$categoriesNav = Category::all();
    	$sub_categoriesNav = Sub_category::all();

    	if (!$category = Category::find($categoryId)) {
    		abort(404);
    	}
    	$categoryId = ($category->id)-1;

     	$sub_categories = Sub_category::where('categoryId', $categoryId)->get();
		return view ('partials.showSubCategories', array('categories'=>$categories,'sub_categories'=> $sub_categories, 'sub_categoriesNav'=>$sub_categoriesNav, 'categoriesNav'=>$categoriesNav, 'categoryId'=>$categoryId));
    }

    public function showProducts($subCategoryId)
    {
    	$categoriesNav = Category::all();
    	$sub_categoriesNav = Sub_category::all();
    	$products = Product::where('subCategoryId', $subCategoryId)->get();
		return view ('partials.showProducts', array('products'=>$products, 'sub_categoriesNav'=>$sub_categoriesNav, 'categoriesNav'=>$categoriesNav));
    }

    public function showProduct($productId){
    	$categoriesNav = Category::all();
    	$sub_categoriesNav = Sub_category::all();
		$product = Product::find($productId);
		return view ('partials.product-detail', array('product'=> $product, 'sub_categoriesNav'=>$sub_categoriesNav, 'categoriesNav'=>$categoriesNav));
	}

}

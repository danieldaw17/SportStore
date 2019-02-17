<?php

namespace App\Http\Controllers;

use App\Sub_category;
use App\Product;
use App\Category;
use App\Image;
use App\Stock;
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
    	$categoryName = $category->name;

     	$sub_categories = Sub_category::where('categoryId', $categoryId)->get();
		return view ('partials.showSubCategories', array('categories'=>$categories,'sub_categories'=> $sub_categories, 'sub_categoriesNav'=>$sub_categoriesNav, 'categoriesNav'=>$categoriesNav, 'categoryName'=>$categoryName));
    }

    public function showProducts($subCategoryId)
    {
    	$categoriesNav = Category::all();
    	$sub_categoriesNav = Sub_category::all();
		if (!$sub_category = Sub_Category::find($subCategoryId)) {
			abort(404);
		}

		$categoryId = $sub_category->id;
		$subCategoryName = $sub_category->name;
    	$products = Product::where('subCategoryId', $subCategoryId)->get();
		$images = Image::all();
		return view ('partials.showProducts', array('products'=>$products, 'sub_categoriesNav'=>$sub_categoriesNav, 'categoriesNav'=>$categoriesNav, 'subCategoryName'=>$subCategoryName, 'images'=>$images));
    }

    public function showProduct($productId){
    	$categoriesNav = Category::all();
    	$sub_categoriesNav = Sub_category::all();
		$images = Image::where('productId', $productId)->get();
		$stocks = Stock::where('productId', $productId)->get();
		if (!$product = Product::find($productId)) {
			abort(404);
		}
		return view ('partials.product-detail', array('product'=> $product, 'sub_categoriesNav'=>$sub_categoriesNav, 'categoriesNav'=>$categoriesNav, 'images'=>$images, 'stocks'=>$stocks));
	}

}

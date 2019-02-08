<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Sub_category;
use App\Sport;
use App\Brands;
use App\Stock;

class ProductsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($userId, $categoryId, $subCategoryId)
    {
		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		$stocks = Stock::where('productId', $productId)->get();
		return view('partials.admin.formProduct', array('userId'=>$userId, 'categoryId'=>$categoryId, 'subCategoryId'=>$subCategoryId, 'stocks'=>$stocks));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $userId, $categoryId, $subCategoryId)
    {
		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		$validateData = $request->validate([
			'name' => 'required|max:100',
    		'description' => 'required',
    		'shortDescription' => 'required|max:50',
    		'basePrice' => 'required|numeric',
    		'typeSupplement' => 'max:50',
    		'volume' => 'numeric',
    		'shifts' => 'integer',
    		'wheelsAmount' => 'integer',
    		'weight' => 'numeric',
    		'subCategoryId' => 'required|integer',
    		'brandId' => 'required|integer',
    		'sportId' => 'required|integer',
			'XXS'=> 'integer',
			'XS'=> 'integer',
			'S'=> 'integer',
			'M'=> 'integer',
			'L'=> 'integer',
			'XL'=> 'integer',
			'XXL'=> 'integer'
	  	]);

		$product = new Product();
        $product->name = $request->input('name');
		$product->description = $request->input('description');
		$product->shortDescription = $request->input('shortDescription');
		$product->basePrice = $request->input('basePrice');
		$product->gender = $request->input('gender');
		$product->typeSupplement = $request->input('typeSupplement');
		$product->volume = $request->input('volume');
		$product->shifts = $request->input('shifts');
		$product->wheelsAmount = $request->input('wheelsAmount');
		$product->weight = $request->input('weight');
		$product->subCategory = $subCategoryId;
		$product->brandId = $brandId;
		$product->sportId = $sportId;

		$product->save();

		if ($request->input('XXS')!="") {
			$stock = new Stock();
			$stock->size = "XXS";
			$stock->amount = $request->input('M');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('XS')!="") {
			$stock = new Stock();
			$stock->size = "XS";
			$stock->amount = $request->input('XS');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('S')!="") {
			$stock = new Stock();
			$stock->size = "S";
			$stock->amount = $request->input('S');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('M')!="") {
			$stock = new Stock();
			$stock->size = "M";
			$stock->amount = $request->input('M');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('L')!="") {
			$stock = new Stock();
			$stock->size = "L";
			$stock->amount = $request->input('L');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('XL')!="") {
			$stock = new Stock();
			$stock->size = "XL";
			$stock->amount = $request->input('XL');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('XXL')!="") {
			$stock = new Stock();
			$stock->size = "XXL";
			$stock->amount = $request->input('XXL');
			$stock->productId = $product->id;
			$stock->save();
		}
		redirect("user/$userId/categories/$categoryId/sub_categories/$subCategoryId");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId, $categoryId, $subCategoryId, $productId)
    {
		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$product = Product::find($productId)) {
			abort(404);
		}

		return view('partials.product-detail', array('product'=>$product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($userId, $categoryId, $subCategoryId, $productId)
    {
		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$product = Sub_category::find($productId)) {
			abort(404);
		}

		$stocks = Stock::where('productId', $productId)->get();
		return view('partials.admin.formProduct', array('userId'=>$userId, 'categoryId'=>$categoryId, 'subCategoryId'=>$subCategoryId, 'product'=>$product, 'stocks'=>$stocks));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId, $categoryId, $subCategoryId, $productId)
    {
		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$product = Product::find($productId)) {
			abort(404);
		}

		$validateData = $request->validate([
			'name' => 'required|max:100',
    		'description' => 'required',
    		'shortDescription' => 'required|max:50',
    		'basePrice' => 'required|numeric',
    		'typeSupplement' => 'max:50',
    		'volume' => 'numeric',
    		'shifts' => 'integer',
    		'wheelsAmount' => 'integer',
    		'weight' => 'numeric',
    		'subCategoryId' => 'required|integer',
    		'brandId' => 'required|integer',
    		'sportId' => 'required|integer',
			'XXS'=> 'integer',
			'XS'=> 'integer',
			'S'=> 'integer',
			'M'=> 'integer',
			'L'=> 'integer',
			'XL'=> 'integer',
			'XXL'=> 'integer'
	  	]);

        $product->name = $request->input('name');
		$product->description = $request->input('description');
		$product->shortDescription = $request->input('shortDescription');
		$product->basePrice = $request->input('basePrice');
		$product->gender = $request->input('gender');
		$product->typeSupplement = $request->input('typeSupplement');
		$product->volume = $request->input('volume');
		$product->shifts = $request->input('shifts');
		$product->wheelsAmount = $request->input('wheelsAmount');
		$product->weight = $request->input('weight');
		$product->subCategory = $subCategoryId;
		$product->brandId = $brandId;
		$product->sportId = $sportId;

		$product->save();


		if ($request->input('XXS')!="") {

			if (!$stock = Stock::where('productId', $productId)->where('size', 'XXS')->get()) {
				$stock = new Stock();
			}
			$stock->size = "XXS";
			$stock->amount = $request->input('M');
			$stock->productId = $product->id;
			$stock->save();
		}


		if ($request->input('XS')!="") {

			if (!$stock = Stock::where('productId', $productId)->where('size', 'XS')->get()) {
				$stock = new Stock();
			}
			$stock->size = "XS";
			$stock->amount = $request->input('XS');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('S')!="") {

			if (!$stock = Stock::where('productId', $productId)->where('size', 'S')->get()) {
				$stock = new Stock();
			}
			$stock->size = "S";
			$stock->amount = $request->input('S');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('M')!="") {

			if (!$stock = Stock::where('productId', $productId)->where('size', 'M')->get()) {
				$stock = new Stock();
			}
			$stock->size = "M";
			$stock->amount = $request->input('M');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('L')!="") {

			if (!$stock = Stock::where('productId', $productId)->where('size', 'L')->get()) {
				$stock = new Stock();
			}
			$stock->size = "L";
			$stock->amount = $request->input('L');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('XL')!="") {

			if (!$stock = Stock::where('productId', $productId)->where('size', 'XL')->get()) {
				$stock = new Stock();
			}
			$stock->size = "XL";
			$stock->amount = $request->input('XL');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('XXL')!="") {

			if (!$stock = Stock::where('productId', $productId)->where('size', 'XXL')->get()) {
				$stock = new Stock();
			}
			$stock->size = "XXL";
			$stock->amount = $request->input('XXL');
			$stock->productId = $product->id;
			$stock->save();
		}
		redirect("user/$userId/categories/$categoryId/sub_categories/$subCategoryId");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId, $categoryId, $subCategoryId, $productId)
    {
		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$product = Product::find($productId)) {
			abort(404);
		}

		$images = Image::where('productId', $productId)->get();
		if (count($images)>0) {
			$errors = array();
			$errors[0] = "This product contains images and can not be delete";
			return view('inc.admin.showProducts', array('userId'=>$userId, 'categoryId'=>$categoryId, 'subCategoryId'=>$subCategoryId,'errors'=>$errors));
		}

		$stocks = Stock::where('productId', $productId)->get();
		if (count($stocks)>0) {
			$errors = array();
			$errors[0] = "This product contains stocks and can not be delete";
			return view('inc.admin.showProducts', array('userId'=>$userId, 'categoryId'=>$categoryId, 'subCategoryId'=>$subCategoryId,'errors'=>$errors));
		}

		$product->delete();
		redirect("user/$userId/categories/$categoryId/sub_categories/$subCategoryId");
    }
}

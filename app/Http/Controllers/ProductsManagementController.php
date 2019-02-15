<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Sub_category;
use App\Sport;
use App\Brand;
use App\Stock;
use App\Image;
use Auth;

class ProductsManagementController extends Controller
{

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userId, $categoryId, $subCategoryId)
    {
		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		$images = Image::all();
		$products = Product::where('subCategoryId', $subCategoryId)->where('active', true)->get();
		return view ('partials.admin.productManagement', array('userId'=>$userId, 'categoryId'=>$categoryId, 'subCategoryId'=>$subCategoryId, 'products'=>$products, 'images'=>$images));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($userId, $categoryId, $subCategoryId)
    {
		if (!Auth::check() || Auth::user()->role!="root"){
			abort(404);
		}


		$brands = Brand::all();
		if (count($brands)<1) {
			$errors = array();
			$errors[0] = "There are no brands available. Create one brand first";
			return view('partials.admin.productManagement', array('errors'=>$errors));
		}

		$sports = Sport::all();
		if (count($sports)<1) {
			$errors = array();
			$errors[0] = "There are no sports available. Create one sport first";
			return view('partials.admin.productManagement', array('errors'=>$errors));
		}

		return view('partials.admin.formProduct', array('userId'=>$userId, 'categoryId'=>$categoryId, 'subCategoryId'=>$subCategoryId, 'brands'=>$brands, 'sports'=>$sports));
    }

    /**
     * Store a newly created resource in /storage.
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
		$product->brandId = $request->input('brandId');
		$product->sportId = $request->input('sportId');

		$product->save();

		if ($request->hasFile('imageFront')) {

			$extension = $request->imageFront->extension();
			$imageName = $product->id.".".$extension;
			$foldPath = '/storage/images/products';
			if (!is_dir($foldPath)) {
				mkdir($foldPath, 0777, true);

			}
			$request->imageFront->move($foldPath, $imageName);
			$fullPath = $foldPath."/".$imageName;

			$image = new Image();
			$image->name = "front";
			$image->path = $fullPath;
			$image->productId = $product->id;
			$image->save();
		}

		if ($request->hasFile('imageBack')) {

			$extension = $request->imageBack->extension();
			$imageName = $product->id.".".$extension;
			$foldPath = '/storage/images/products';
			if (!is_dir($foldPath)) {
				mkdir($foldPath, 0777, true);

			}
			$request->imageBack->move($foldPath, $imageName);
			$fullPath = $foldPath."/".$imageName;

			$image = new Image();
			$image->name = "back";
			$image->path = $fullPath;
			$image->productId = $product->id;
			$image->save();
		}

		if ($request->hasFile('imageSideL')) {

			$extension = $request->imageSideL->extension();
			$imageName = $product->id.".".$extension;
			$foldPath = '/storage/images/products';
			if (!is_dir($foldPath)) {
				mkdir($foldPath, 0777, true);

			}
			$request->imageSideL->move($foldPath, $imageName);
			$fullPath = $foldPath."/".$imageName;

			$image = new Image();
			$image->name = "sideL";
			$image->path = $fullPath;
			$image->productId = $product->id;
			$image->save();
		}

		if ($request->hasFile('imageSideR')) {

			$extension = $request->imageSideR->extension();
			$imageName = $product->id.".".$extension;
			$foldPath = '/storage/images/products';
			if (!is_dir($foldPath)) {
				mkdir($foldPath, 0777, true);

			}
			$request->imageSideR->move($foldPath, $imageName);
			$fullPath = $foldPath."/".$imageName;

			$image = new Image();
			$image->name = "sideR";
			$image->path = $fullPath;
			$image->productId = $product->id;
			$image->save();
		}

		if ($request->input('XXS')!="") {
			$stock = new Stock();
			$stock->size = "XXS";
			$stock->amount = $request->input('XXS');
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
    /*public function show($userId, $categoryId, $subCategoryId, $productId)
    {
		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$product = Product::find($productId)) {
			abort(404);
		}

		return view('partials.product-detail', array('product'=>$product));
    }*/

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

		if (!$product = Product::find($productId)->get()) {
			abort(404);
		}

		$brands = Brand::all();
		if (count($brands)<1) {
			$errors = array();
			$errors[0] = "There are no brands available. Create one brand first";
			return view('partials.admin.productManagement', array('errors'=>$errors));
		}

		$sports = Sport::all();
		if (count($sports)<1) {
			$errors = array();
			$errors[0] = "There are no sports available. Create one sport first";
			return view('partials.admin.productManagement', array('errors'=>$errors));
		}

		//$stocks = Product::find($productId)->stocks()->get();
		$stocks = Stock::where('productId', $productId)->get();
		$product = Product::find($productId);
		return view('partials.admin.formProduct', array('userId'=>$userId, 'categoryId'=>$categoryId, 'subCategoryId'=>$subCategoryId, 'product'=>$product, 'stocks'=>$stocks, 'brands'=>$brands, 'sports'=>$sports));
    }

    /**
     * Update the specified resource in /storage.
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
    		'volume' => 'max:255',
    		//'shifts' => 'integer'
    		//'wheelsAmount' => 'integer',
    		'weight' => 'numeric',
    		'brandId' => 'required|integer',
    		'sportId' => 'required|integer',
			/*'XXS'=> 'integer',
			'XS'=> 'integer',
			'S'=> 'integer',
			'M'=> 'integer',
			'L'=> 'integer',
			'XL'=> 'integer',
			'XXL'=> 'integer'*/
	  	]);
        $product->name = $request->input('name');
		$product->description = $request->input('description');
		$product->shortDescription = $request->input('shortDescription');
		$product->basePrice = $request->input('basePrice');
		$product->gender = $request->input('gender');
		//$product->active = 1;

		if ($request->input('typeSupplement')!="") {
			$product->typeSupplement = $request->input('typeSupplement');
		}

		if ($request->input('volume')!="") {
			$product->volume = $request->input('volume');
		}

		if ($request->input('shifts')!="") {
			$product->shifts = $request->input('shifts');
		}

		if ($request->input('wheelsAmount')!="") {
			$product->wheelsAmount = $request->input('wheelsAmount');
		}

		if($request->input('weight')!="") {
			$product->weight = $request->input('weight');
		}

		if ($request->input('brandId')!="") {
			$product->brandId = $request->input('brandId');
		}

		if ($request->input('sportId')!="") {
			$product->sportId = $request->input('sportId');
		}

		$product->save();

		if ($request->hasFile('imageFront')) {

			$extension = $request->imageFront->extension();
			if ($extension=="jpeg") $extension = "jpg";


			$imageName = $product->id."-front.".$extension;
			$foldPath =  'storage/images/products';

			//check if exists a previous file with the same name

			$fullPath = $foldPath."/".$imageName;
			if ($image = Image::where('productId', $product->id)->where('name', "front")->first()) {
				$imagePath = $image->path;
				$imagePath[0]=" ";
				if (file_exists($imagePath)) {
   					unlink($imagePath);
   				}

			} else {
				$image = new Image();
			}

			$request->imageFront->move($foldPath, $imageName);

			$foldPathDB =  '/storage/images/products';
			$fullPathDB = $foldPathDB."/".$imageName;

			$image->name = "front";
			$image->path = $fullPathDB;
			$image->productId = $product->id;
			$image->save();
		}

		if ($request->hasFile('imageBack')) {

			$extension = $request->imageBack->extension();
			if ($extension=="jpeg") $extension = "jpg";


			$imageName = $product->id."-back.".$extension;
			$foldPath =  'storage/images/products';

			//check if exists a previous file with the same name

			$fullPath = $foldPath."/".$imageName;
			if ($image = Image::where('productId', $product->id)->where('name', "back")->first()) {
				$imagePath = $image->path;
				$imagePath[0]=" ";
				if (file_exists($imagePath)) {
   					unlink($imagePath);
   				}

			} else {
				$image = new Image();
			}

			$request->imageBack->move($foldPath, $imageName);

			$foldPathDB =  '/storage/images/products';
			$fullPathDB = $foldPathDB."/".$imageName;

			$image->name = "back";
			$image->path = $fullPathDB;
			$image->productId = $product->id;
			$image->save();
		}

		if ($request->hasFile('imageSideL')) {

			$extension = $request->imageSideL->extension();
			if ($extension=="jpeg") $extension = "jpg";


			$imageName = $product->id."-sideL.".$extension;
			$foldPath =  'storage/images/products';

			//check if exists a previous file with the same name

			$fullPath = $foldPath."/".$imageName;
			if ($image = Image::where('productId', $product->id)->where('name', "sideL")->first()) {
				$imagePath = $image->path;
				$imagePath[0]=" ";
				if (file_exists($imagePath)) {
   					unlink($imagePath);
   				}

			} else {
				$image = new Image();
			}

			$request->imageSideL->move($foldPath, $imageName);

			$foldPathDB =  '/storage/images/products';
			$fullPathDB = $foldPathDB."/".$imageName;

			$image->name = "sideL";
			$image->path = $fullPathDB;
			$image->productId = $product->id;
			$image->save();
		}

		if ($request->hasFile('imageSideR')) {

			$extension = $request->imageSideR->extension();
			if ($extension=="jpeg") $extension = "jpg";


			$imageName = $product->id."-sideR.".$extension;
			$foldPath =  'storage/images/products';

			//check if exists a previous file with the same name

			$fullPath = $foldPath."/".$imageName;
			if ($image = Image::where('productId', $product->id)->where('name', "sideR")->first()) {
				$imagePath = $image->path;
				$imagePath[0]=" ";
				if (file_exists($imagePath)) {
   					unlink($imagePath);
   				}

			} else {
				$image = new Image();
			}

			$request->imageSideR->move($foldPath, $imageName);

			$foldPathDB =  '/storage/images/products';
			$fullPathDB = $foldPathDB."/".$imageName;

			$image->name = "sideR";
			$image->path = $fullPathDB;
			$image->productId = $product->id;
			$image->save();
		}


		if ($request->input('XXS')!="") {

			if (!$stock = Stock::where('productId', $productId)->where('size', 'XXS')->first()) {
				$stock = new Stock();
			}
			$stock->size = "XXS";
			$stock->amount = $request->input('XXS');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('XS')!="") {

			if (!$stock = Stock::where('productId', $productId)->where('size', 'XS')->first()) {
				$stock = new Stock();
			}
			$stock->size = "XS";
			$stock->amount = $request->input('XS');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('S')!="") {

			if (!$stock = Stock::where('productId', $productId)->where('size', 'S')->first()) {
				$stock = new Stock();
			}
			$stock->size = "S";
			$stock->amount = $request->input('S');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('M')!="") {

			if (!$stock = Stock::where('productId', $productId)->where('size', 'M')->first()) {
				$stock = new Stock();
			}
			$stock->size = "M";
			$stock->amount = $request->input('M');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('L')!="") {

			if (!$stock = Stock::where('productId', $productId)->where('size', 'L')->first()) {
				$stock = new Stock();
			}
			$stock->size = "L";
			$stock->amount = $request->input('L');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('XL')!="") {

			if (!$stock = Stock::where('productId', $productId)->where('size', 'XL')->first()) {
				$stock = new Stock();
			}
			$stock->size = "XL";
			$stock->amount = $request->input('XL');
			$stock->productId = $product->id;
			$stock->save();
		}

		if ($request->input('XXL')!="") {

			if (!$stock = Stock::where('productId', $productId)->where('size', 'XXL')->first()) {
				$stock = new Stock();
			}
			$stock->size = "XXL";
			$stock->amount = $request->input('XXL');
			$stock->productId = $product->id;
			$stock->save();
		}
		return redirect("user/$userId/Categories/$categoryId/Sub_categories/$subCategoryId/Products");
    }

    /**
     * Remove the specified resource from /storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId, $categoryId, $subCategoryId, $productId)
    {
		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}
		/*
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
		*/
		if (!$product = Product::find($productId)) {
			abort(404);
		}
		$product->active=false;
		$product->save();
		return back();
    }

	/*public function defuse($productId)
	{
		return "llego aquí";


    }*/
}

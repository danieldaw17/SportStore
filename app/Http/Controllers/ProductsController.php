<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
	{
		if (!$products = Product::all()) {
			abort(404);
		}


		return view('partials.products', array('products'=>$products));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //llamar a vista de crear producto
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Product $request)
    {
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
		$product->subCategory = $request->input('subCategory');
		$product->brandId = $request->input('brandId');
		$product->sportId = $request->input('sportId');

		$product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($productId)
    {
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
    public function edit($productId)
    {
		if (!$product = Sub_category::find($productId)) {
			abort(404);
		}

		//llamar a vista de editar producto
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $request, $productId)
    {
		if (!$product = Product::find($productId)) {
			abort(404);
		}

		$product->description = $request->input('description');
		$product->shortDescription = $request->input('shortDescription');
		$product->basePrice = $request->input('basePrice');
		$product->gender = $request->input('gender');
		$product->typeSupplement = $request->input('typeSupplement');
		$product->volume = $request->input('volume');
		$product->shifts = $request->input('shifts');
		$product->wheelsAmount = $request->input('wheelsAmount');
		$product->weight = $request->input('weight');
		$product->subCategory = $request->input('subCategory');
		$product->brandId = $request->input('brandId');
		$product->sportId = $request->input('sportId');

		$product->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($productId)
    {
		if (!$product = Product::find($productId)) {
			abort(404);
		}

		$product->delete();
    }
}

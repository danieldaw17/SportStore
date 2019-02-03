<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
use App\Product;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();

		//llamar a la vista devolciendo bras
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //devolver vista crear brand
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Brand $request)
    {
		$brand = new Brand();
		$brand->name = $request->input('name');

		$brand->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($brandId)
    {
		if (!$brand = Brand::find($brandId)) {
			abort(404);
		}

		//devolver vista de mostrar
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($brandId)
    {

		if (!$brand = Brand::find($brandId)) {
			abort(404);
		}
		//llamar a vista con brand
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Brand $request, $brandId)
    {
		if (!$brand = Brand::find($brandId)) {
			abort(404);
		}
		$brand->name = $request->input('name');

		$brand->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($brandId)
    {
		if (!$brand = Brand::find($brandId)) {
			abort(404);
		}

		$products = Product::where('brandId', $brandId)->get();

		$products->delete();
		$brand->delete();
    }
}

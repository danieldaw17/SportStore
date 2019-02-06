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

		//llamar a la vista devolciendo brands
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($userId)
    {
        return view('brandForm', array('userId'=>$userId));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $userId)
    {
		$validateData = $request->validate([
          'name' => 'required|max:30'
	  	]);

		$brand = new Brand();
		$brand->name = $request->input('name');
		$brand->save();
		return redirect("user/$userId/brands");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($userId, $brandId)
    {

		if (!$brand = Brand::find($brandId)) {
			abort(404);
		}

		return view('brandForm', array('userId'=>$userId, 'brand'=>$brand));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Reuest $request, $userId, $brandId)
    {

		$validateData = $request->validate([
          'name' => 'required|max:30'
	  	]);

		if (!$brand = Brand::find($brandId)) {
			abort(404);
		}

		$brand->name = $request->input('name');
		$brand->save();
		return redirect("user/$userId/brands");
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
		if (count($products)>0) {
			$errors = array();
			$errors[0] = "This brand contains products and can not be delete";
			return view('brands', array('usererrors'=>$errors));
		}

		$brand->delete();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stock;

class StocksController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($userId, $categoryId, $subCategoryId, $productId)
    {
        return view('partials.admin.formStock', array('userId'=>$userId, 'categoryId'=>$categoryId, 'subCategoryId'=>$subCategoryId, 'productId'=>$productId));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

		$validateData = $request->validate([
			'amount' => 'required',
			'size' => 'required|max:10',
			'productId' => 'required'
	  	]);

        $stock = new Stock();

		$stock->amount = $request->input('amount');
		$stock->size = $request->input('size');
		$stock->productId = $request->input('productId');

		$stock->save();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($stockId)
    {
		if (!$stock = Stock::find($stockId)) {
			abort(404);
		}

		//llamar a vista de editar stock
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $stockId)
    {
		if (!$stock = Stock::find($stockId)) {
			abort(404);
		}

		$validateData = $request->validate([
			'amount' => 'required',
			'size' => 'required|max:10',
			'productId' => 'required'
	  	]);

		$stock->amount = $request->input('amount');
		$stock->size = $request->input('size');
		$stock->productId = $request->input('productId');

		$stock->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($stockId)
    {
		if (!$stock = Stock::find($stockId)) {
			abort(404);
		}

		$stock->delete();
    }
}

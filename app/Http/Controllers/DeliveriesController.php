<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Delivery;

class DeliveriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$deliveries = Delivery::all();
		//llamar a vista que muestra deliveries
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //llamar a vista que crea deliveries
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Delivery $request)
    {
        $delivery = new Delivery();

		$delivery->name = $request->input('name');
		$delivery->hoursMax = $request->input('hoursMax');
		$delivery->price = $request->input('price');

		$delivery->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($deliveryId)
    {
		if (!$delivery = Delivery::find($deliveryId)) {
			abort(404);
		}
		//llamar vista con datos de delivery
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Delivery $request, $deliveryId)
    {
		if (!$delivery = Delivery::find($deliveryId)) {
			abort(404);
		}

		$delivery->name = $request->input('name');
		$delivery->hoursMax = $request->input('hoursMax');
		$delivery->price = $request->input('price');

		$delivery->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($deliveryId)
    {
		if (!$delivery = Delivery::find($deliveryId)) {
			abort(404);
		}

		$delivery->delete();
    }
}

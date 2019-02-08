<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Delivery;
use Auth;

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
    public function create($userId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

        return view('partials.admin.deliveryForm', array('userId'=>$userId));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $userId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		$validateData = $request->validate([
			'name' => 'required|max:30',
  			'hoursMax' => 'required|numeric',
  		  	'price' => 'required|numeric'
	  	]);

        $delivery = new Delivery();

		$delivery->name = $request->input('name');
		$delivery->hoursMax = $request->input('hoursMax');
		$delivery->price = $request->input('price');

		$delivery->save();
		return redirect("user/$userId/deliveries");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($userId, $deliveryId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$delivery = Delivery::find($deliveryId)) {
			abort(404);
		}

		return view('partials.admin.deliveryForm', array('userId'=>$userId, 'delivery'=>$delivery));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId, $deliveryId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$delivery = Delivery::find($deliveryId)) {
			abort(404);
		}

		$validateData = $request->validate([
			'name' => 'required|max:30',
  			'hoursMax' => 'required|numeric',
  		  	'price' => 'required|numeric'
	  	]);

		$delivery->name = $request->input('name');
		$delivery->hoursMax = $request->input('hoursMax');
		$delivery->price = $request->input('price');

		$delivery->save();
		return redirect("user/$userId/deiveries");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId, $deliveryId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$delivery = Delivery::find($deliveryId)) {
			abort(404);
		}

		$delivery->delete();
		return redirect("user/$userId/deiveries");
    }

}

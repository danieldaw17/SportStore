<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Address;
use Auth;

class shippingAddressController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($userId)
    {
		if (!Auth::check() || Auth::user()->id!=$userId) {
			abort(404);
		}


        return view('inc.shippingAddressForm', array('userId'=>$userId));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $userId)
    {
		if (!Auth::check() || Auth::user()->id!=$userId) {
			abort(404);
		}

		$validateData = $request->validate([
			'line' => 'required|integer',
			'roadType' => 'required',
			'roadName' => 'required|max:70',
			'city' => 'required|max:40',
			'province' => 'required|max:40',
			'zipCode' => 'required',
			'country' => 'required|max:25'
	  	]);

        $address = new Address();

		$address->roadType = $request->input('address');
		$address->roadName = $request->input('roadName');
		$address->city = $request->input('city');
		$address->province = $request->input('province');
		$address->zipCode = $request->input('zipCode');
		$address->country = $request->input('country');
		$address->typeAddress = "billing ";
		$address->userId = $userId;

		$address->save();

		return redirect("user/$userId");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($userId, $addressId)
    {
		if (!Auth::check() || Auth::user()->id!=$userId) {
			abort(404);
		}

		if (!$address = Address::find($addressId)) {
			abort(404);
		}

		return view('inc.billingAddressForm', array('userId'=>$userId, 'address'=>$address));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId, $addressId)
    {
		if (!Auth::check() || Auth::user()->id!=$userId) {
			abort(404);
		}

		if (!$address = Address::find($addressId)) {
			abort(404);
		}

		$validateData = $request->validate([
			'line' => 'required|integer',
			'roadType' => 'required',
			'roadName' => 'required|max:70',
			'city' => 'required|max:40',
			'province' => 'required|max:40',
			'zipCode' => 'required',
			'country' => 'required|max:25'
	  	]);

		$address->roadType = $request->input('address');
		$address->roadName = $request->input('roadName');
		$address->city = $request->input('city');
		$address->province = $request->input('province');
		$address->zipCode = $request->input('zipCode');
		$address->country = $request->input('country');

		$address->save();

		return redirect("user/$userId");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId, $addressId)
    {
		if (!Auth::check() || Auth::user()->id!=$userId) {
			abort(404);
		}

        if (!$address = Address::find($addressId)) {
			abort(404);
		}

		$address->delete();

		return redirect("user/$userId");

    }
}

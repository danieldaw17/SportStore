<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Address;

class AddressesController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //abrir formulario para incluir nueva direccion
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Address $request)
    {
        $address = new Address();

		$address->roadType = $request->input('address');
		$address->roadName = $request->input('roadName');
		$address->city = $request->input('city');
		$address->province = $request->input('province');
		$address->zipCode = $request->input('zipCode');
		$address->country = $request->input('country');
		$address->typeAddress = $request->input('typeAddress');
		$address->userId = $request->input('userId');

		$address->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($addressId)
    {
		if (!$address = Address::find($addressId)) {
			abort(404);
		}

		//llamar a formulario direccion con datos
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Address $request, $addressId)
    {
		if (!$address = Address::find($addressId)) {
			abort(404);
		}

		$address->roadType = $request->input('address');
		$address->roadName = $request->input('roadName');
		$address->city = $request->input('city');
		$address->province = $request->input('province');
		$address->zipCode = $request->input('zipCode');
		$address->country = $request->input('country');
		$address->typeAddress = $request->input('typeAddress');
		$address->userId = $request->input('userId');

		$address->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($addressId)
    {
        if (!$address = Address::find($addressId)) {
			abort(404);
		}

		$address->delete();

    }
}

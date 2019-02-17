<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Invoice;
use App\Invoice_line;
use App\Address;
use App\User;
use Carbon\Carbon;

class profileController extends Controller
{

public function saveBillingAddress(Request $request) {
	if (!Auth::check()) {
		abort(404);
	}

	if (!$billingAddress = Address::where('userId',  Auth::user()->id)->where('typeAddress', 'billing')->first()) {
		$billingAddress = new Address();
	}

	$billingAddress->roadType = $request->roadType;
	$billingAddress->roadName = $request->roadName;
	$billingAddress->city = $request->city;
	$billingAddress->province = $request->province;
	$billingAddress->zipCode = $request->zipCode;
	$billingAddress->country = $request->country;
	$billingAddress->typeAddress = "billing";
	$billingAddress->userId = Auth::user()->id;

	$billingAddress->save();
	return back();
}

public function saveShippingAddress(Request $request) {
	if (!Auth::check()) {
		abort(404);
	}

	if (!$shippingAddress = Address::where('userId',  Auth::user()->id)->where('typeAddress', 'shipping')->first()) {
		$shippingAddress = new Address();
	}

	$shippingAddress->roadType = $request->roadType;
	$shippingAddress->roadName = $request->roadName;
	$shippingAddress->city = $request->city;
	$shippingAddress->province = $request->province;
	$shippingAddress->zipCode = $request->zipCode;
	$shippingAddress->country = $request->country;
	$shippingAddress->typeAddress = "shipping";
	$shippingAddress->userId = Auth::user()->id;

	$shippingAddress->save();
	return back();
}

public function savePersonalInformation(Request $request) {
	if (!Auth::check()) {
		abort(404);
	}
	$userId = Auth::user()->id;
	if (!$user = User::find($userId)) {
		abort(404);
	}

	$user->name = $request->name;
	$user->lastName = $request->lastName;
	$user->nif = $request->nif;

	$user->save();
	return back();
}

public function saveAccount(Request $request) {
	if (!Auth::check()) {
		abort(404);
	}
	$userId = Auth::user()->id;
	if (!$user = User::find($userId)) {
		abort(404);
	}
$user->nick = $request->nick;
$user->email = $request->email;

$user->save();
return back();
}

public function verifiedEmail(){
    $userId = Auth::user()->id;
    if (!$user = User::find($userId)) {
		abort(404);
	}
    $mytime=Carbon::now();
    
    $user->email_verified_at=$mytime->toDateTimeString();
    $user->save();
    return back();
}

}

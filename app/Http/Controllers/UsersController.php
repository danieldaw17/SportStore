<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Address;
use App\Invoice;
use App\User;
use DB;

class UsersController extends Controller
{

	public function index() {

		if (!Auth::check()) {
			abort(404);
		}

		if (Auth::user()->role=="root") {
			return view('partials.admin.userManagement');

		} else if (Auth::user()->role=="user") {
			$type = DB::select(DB::raw("SHOW COLUMNS FROM Addresses WHERE Field = 'roadType'"))[0]->Type;
			preg_match('/^enum\((.*)\)$/', $type, $matches);
			$roadTypes = array();
			foreach( explode(',', $matches[1]) as $value )
			{
				$v = trim( $value, "'" );
				$roadTypes = array_add($roadTypes, $v, $v);
			}

			$billingAddress = Address::where('typeAddress', 'billing')->where('userId',  Auth::user()->id)->first();
			$shippingAddress = Address::where('typeAddress', 'shipping')->where('userId',  Auth::user()->id)->first();

			$user = User::find(Auth::user()->id);

			$invoices = Invoice::where('userId', Auth::user()->id)->get();

			return view('partials.profile', array('roadTypes'=>$roadTypes, 'billingAddress'=>$billingAddress, 'shippingAddress'=>$shippingAddress, 'user'=>$user, 'invoices'=>$invoices));

		}
	}

	public function productManagement($userId) {
		return view('partials.admin.productManagement', array('userId', $userId));
	}
}

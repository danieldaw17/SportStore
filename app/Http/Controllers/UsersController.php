<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Address;
use App\User;
use DB;
use App\Category;
//use App\Http\Controllers\Address;
use App\Sub_category;

class UsersController extends Controller
{

	public function index() {

		if (!Auth::check()) {
			abort(404);
		}

		if (Auth::user()->role=="root") {
            $users=User::all();
            $addresses=Address::all();
			return view('partials.admin.userManagement',array('users'=>$users , 'addresses'=>$addresses));

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


			/*if ($billingAddress==null) {
				return view('partials.profile', array('roadTypes'=>$roadTypes));

			} else {*/
				$categoriesNav = Category::all();
        		$sub_categoriesNav = Sub_category::all();

				return view('partials.profile', array('sub_categoriesNav'=>$sub_categoriesNav, 'categoriesNav'=>$categoriesNav,'roadTypes'=>$roadTypes, 'billingAddress'=>$billingAddress, 'shippingAddress'=>$shippingAddress, 'user'=>$user));
			//}
		}
	}

	public function productManagement($userId) {
		return view('partials.admin.productManagement', array('userId', $userId));
	}
}

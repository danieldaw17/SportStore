<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UsersController extends Controller
{

	public function index() {

		if (!Auth::check()) {
			abort(404);
		}

		if (Auth::user()->role=="root") {
			return view('partials.admin.userManagement');

		} else if (Auth::user()->role=="user") {
			return view('partials.profile');
		}
	}

	public function productManagement($userId) {
		return view('partials.admin.productManagement', array('userId', $userId));
	}
}

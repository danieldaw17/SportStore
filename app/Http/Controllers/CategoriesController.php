<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{

	public function index()
	{
        	$categories = Category::all();
			return view('partials.categories', array('categories'=>$categories));
    }
}

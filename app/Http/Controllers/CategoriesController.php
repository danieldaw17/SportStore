<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Sub_category;
use Auth;

class CategoriesController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userId)
    {

		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

        $brands = Category::all();

		return view('partials.admin.showCategories', array('userId'=>$userId));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

	 //for creating a new subcategory with a form
    public function create($userId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		$categories = Category::all();

        return view('partials.admin.formCategory', array('userId'=>$userId));
    }

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId, $categoryId)

		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		//show its subcategories
		$sub_categories = Sub_category::where('categoryId', $categoryId)->get();
        return view('partials.admin.showSubcategories', array('userId'=>$userId, 'sub_categories'=>$sub_categories));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

	 //it receives the data of a new category from a form and save it in the database
    public function store(Request $request)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		$validateData = $request->validate([
			'name' => 'required|max:30',
			'imagePath' => 'required|max:100',
			'taxes' => 'required|numeric'
	  	]);

        $category = new Category();
		$subCategory->name = $request->input('name');
		$subCategory->imagePath = $request->input('imagePath');
		$subCategory->taxes = $request->input('taxes');

		$category->save();
		return redirect("user/$userId/categories");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

	 //it looks for subcategories where categoryid is this and call the view
    public function show($categoryId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$sub_categories = Sub_category::where('categoryId', $categoryId)->get()) {
			abort(404);
		}

		return view('partials.subcategories', array('sub_categories'=>$sub_categories));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($userId, $categoryId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		$sports = Sport::all();

		if (!$category = Sub_category::find($categoryId)) {
			abort(404);
		}
        return view('partials.admin.formCategory', array('userId'=>$userId, 'category'=>$category));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$category = Category::find($categoryId)) {
			abort(404);
		}

		$validateData = $request->validate([
			'name' => 'required|max:30',
			'imagePath' => 'required|max:100',
			'taxes' => 'required|numeric'
	  	]);

		$subCategory->name = $request->input('name');
		$subCategory->imagePath = $request->input('imagePath');
		$subCategory->taxes = $request->input('taxes');

		$category->save();
		return redirect("user/$userId/categories");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId, $categoryId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$category = Category::find($categoryId)) {
			abort(404);
		}

		$sub_categories = Sub_category::where('categoryId', $categoryId)->get();
		if (count($sub_categories)>0) {
			$errors = array();
			$errors[0] = "This category contains sub categories and can not be delete";
			return view('partials.admin.showCategories', array('userId'=>$userId, 'categoryId'=>$categoryId, 'errors'=>$errors));
		}


		$category->delete();
		return redirect("user/$userId/categories");
    }
}

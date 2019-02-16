<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Sub_category;
use App\Sport;
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

        $categories = Category::all();
        $subcategories = Sub_category::all();

		return view('partials.admin.showCategories', array('userId'=>$userId, 'categories'=>$categories, 'subcategories'=>$subcategories));
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

		return view('partials.admin.formCategory', array('userId'=>$userId));
    }

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId, $categoryId)
	{
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		//show its subcategories
		if (!$sub_categories = Sub_category::where('categoryId', $categoryId)->get()) {
			abort(404);
		}
        return view('partials.admin.showSubcategories', array('userId'=>$userId, 'sub_categories'=>$sub_categories));;
	}

	public function store(Request $request, $userId)
    {

		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		$validateData = $request->validate([
			'name' => 'required|max:30',
			'taxes' => 'required|numeric'
	  	]);

        $category = new Category();
		$category->name = $request->name;
		$category->taxes = $request->taxes;
		$category->imagePath = "";

		$category->save();

		if ($request->hasFile('image')) {

			$extension = $request->image->extension();
			$imageName = $category->id.".".$extension;
			$foldPath = '/storage/images/categories';
			if (!is_dir($foldPath)) {
				mkdir($foldPath, 0777, true);

			}
			$request->image->move($foldPath, $imageName);
			$fullPath = $foldPath."/".$imageName;
			$category->imagePath = $fullPath;
			$category->save();
		}
		return redirect("user/$userId/Categories");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function edit($userId, $categoryId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$category = Category::find($categoryId)) {
			abort(404);
		}
        return view('partials.admin.formCategory', array('userId'=>$userId, 'category'=>$category));
    }

    /**
     * Update the specified resource in /storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId, $categoryId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$category = Category::find($categoryId)) {
			abort(404);
		}
		$validateData = $request->validate([
			'name' => 'required|max:30',
			'taxes' => 'required|numeric'
	  	]);

		$category->name = $request->input('name');
		$category->taxes = $request->input('taxes');


		if ($request->hasFile('image')) {
			if (file_exists($category->imagePath)) {
				unlink($category->imagePath);
			}

			$extension = $request->image->extension();
			$imageName = $category->id.".".$extension;
			$foldPath = '/storage/images/categories';
			if (!is_dir($foldPath)) {
				mkdir($foldPath, 0777, true);

			}
			$request->image->move($foldPath, $imageName);
			$fullPath = $foldPath."/".$imageName;
			$category->imagePath = $fullPath;
			$category->save();
		}

		$category->save();
		return redirect("user/$userId/Categories");
    }

    /**
     * Remove the specified resource from /storage.
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

<?php

namespace App\Http\Controllers;
use App\Sub_category;
use App\Product;
use Auth;

use Illuminate\Http\Request;

class Sub_CategoriesController extends Controller
{

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userId, $categoryId)
    {
		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		$sub_categories = Sub_category::where('categoryId', $categoryId)->get();
		return view ('partials.admin.showSubcategories', array('userId'=>$userId, 'categoryId'=>$categoryId, 'sub_categories'=>$sub_categories));
    }

	//for creating a new subcategory with a form
	public function create($userId, $categoryId)
	{
		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		return view('partials.admin.formSubcategory', array('userId'=>$userId, 'categoryId'=>$categoryId));

	}

	//for editing a subcategory loading its data in the form
	public function edit($userId, $categoryId, $sub_categoryId)
	{
		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$sub_category = Sub_category::find($sub_categoryId)) {
			abort(404);
		}

		return view('partials.admin.formSubcategory', array('userId'=>$userId, 'categoryId'=>$categoryId, 'sub_category'=>$sub_category));

	}

	//it receives the data of a new subcategory from a form and save it in the database
	public function store(Request $request, $userId, $categoryId) {

		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		$validateData = $request->validate([
			'name' => 'required|unique:sub_categories|max:30'
	  	]);

		$sub_category = new Sub_category();

		$sub_category->name = $request->input('name');
		$sub_category->imagePath = "";
		$sub_category->categoryId = $request->input('categoryId');
		$sub_category->save();

		if ($request->hasFile('image')) {

			$extension = $request->image->extension();
			$imageName = $sub_category->id.".".$extension;
			$foldPath = 'storage/images/subcategories';
			if (!is_dir($foldPath)) {
				mkdir($foldPath, 0777, true);

			}
			$request->image->move($foldPath, $imageName);
			$fullPath = $foldPath."/".$imageName;
			$sub_category->imagePath = $fullPath;
			$sub_category->save();
		} else {
			return "no image";
		}

		return redirect("user/$userId/categories/$categoryId/sub_categories");
	}

	public function update(Request $request, $userId, $categoryId, $subCategoryId)
	//it updates a subcategory in the database
	{
		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$subCategory = Sub_category::find($subCategoryId)) {
			abort(404);
		}

		$validateData = $request->validate([
			'name' => 'required|unique:sub_categories|max:30'
	  	]);

		$subCategory->name = $request->input('name');
		$subCategory->imagePath = $request->input('imagePath');
		$subCategory->categoryId = $request->input('categoryId');

		$subCategory->save();
		return redirect("user/$userId/categories/$categoryId/sub_categories");
    }

	//for deleting a subcategory
	public function destroy($userId, $categoryId, $subCategoryId)
	{
		if (!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

        if (!$subCategory = Sub_category::find($subCategoryId)) {
			abort(404);
		}

		$products = Product::where('subCategoryId', $subCategoryId)->get();
		if (count($products)>0) {
			$errors = array();
			$errors[0] = "This sub category contains products and can not be delete";
			return view('partials.admin.showCategories', array('userId'=>$userId, 'categoryId'=>$categoryId, 'errors'=>$errors));
		}

		$sub_category->delete();
		return redirect("user/$userId/categories/$categoryId/sub_categories");
    }
}

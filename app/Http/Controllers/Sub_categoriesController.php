<?php

namespace App\Http\Controllers;
use App\Sub_category;
use App\Product;

use Illuminate\Http\Request;

class Sub_CategoriesController extends Controller
{
	//for creating a new subcategory with a form
	public function create()
	{
		//llamar a vista de agregar subcategory

	}

	//for editing a subcategory loading its data in the form
	public function edit($subCategoryId)
	{
		if (!$subCategory = Sub_category::find($subCategoryId)) {
			abort(404);
		}

		//llamar a vista de editar subcategory

	}

	//it receives the data of a new subcategory from a form and save it in the database
	public function store(Sub_category $request) {
		$subCategory = new Sub_category();

		$subCategory->name = $request->input('name');
		$subCategory->imagePath = $request->input('imagePath');
		$subCategory->categoryId = $request->input('categoryId');

		$subCategory->save();
	}

	//it looks for products where subcategoryid is this and call the view
	public function show($subCategoryId)
	{
        if (!$products = Product::where('subCategoryId', $subCategoryId)->get()) {
			abort(404);
		}

		return view('partials.products', array('products'=>$products));
    }

	public function update(Sub_category $request, $subCategoryId)
	//it updates a subcategory in the database
	{
		if (!$subCategory = Sub_category::find($subCategoryId)) {
			abort(404);
		}

		$subCategory->name = $request->input('name');
		$subCategory->imagePath = $request->input('imagePath');
		$subCategory->categoryId = $request->input('categoryId');

		$subCategory->save();
    }

	//for deleting a subcategory
	public function destroy($subCategoryId)
	{
        if (!$subCategory = Sub_category::find($subCategoryId)) {
			abort(404);
		}

		if (!$products = Product::where('subCategoryId', $subCategoryId)->get()) {
			abort(404);
		}

		if ($products->delete()) {
			$subCategory->delete();
		}
    }
}

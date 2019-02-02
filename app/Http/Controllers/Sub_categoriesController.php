<?php

namespace App\Http\Controllers;
use App\Sub_category;

use Illuminate\Http\Request;

class Sub_CategoriesController extends Controller
{

	public function index($categoryId)
	{
        	if (!$subCategories = Sub_category::where('categoryId', $categoryId)->get()) {
				abort(404);
			}

			return view('partials.subcategories', array('subCategories'=>$subCategories));
    }

	public function create()
	{
		//llamar a vista de agregar subcategory

	}

	public function edit($subCategoryId)
	{
		if (!$subCategory = Sub_category::find($subCategoryId)) {
			abort(404);
		}

		//llamar a vista de editar subcategory

	}

	public function store(Sub_category $request) { //recibira un array asociativo con los datos de la subcategoria
		$subCategory = new Sub_category();

		$subCategory->name = $request->input('name');
		$subCategory->imagePath = $request->input('imagePath');
		$subCategory->categoryId = $request->input('categoryId');

		$subCategory->save();
	}

	public function show($subCategoryId)
	{
        if (!$products = Product::where('subCategoryId', $subCategoryId)->get()) {
			abort(404);
		}

		return view('partials.products', array('products'=>$products));
    }

	public function update(Sub_category $request, $subCategoryId, $auxSubCategory)
	{
		if (!$subCategory = Sub_category::find($subCategoryId)) {
			abort(404);
		}

		$subCategory->name = $request->input('name');
		$subCategory->imagePath = $request->input('imagePath');
		$subCategory->categoryId = $request->input('categoryId');

		$subCategory->save();
    }

	public function destroy($subCategoryId)
	{
        if (!$subCategory = Sub_category::find($subCategoryId)) {
			abort(404);
		}

		$subCategory->delete();

    }
}

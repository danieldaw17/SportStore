<?php

namespace App\Http\Controllers;
use App\Sub_category;

use Illuminate\Http\Request;

class Sub_CategoriesController extends Controller
{

	public function index($categoryId)
	{
        	$subCategories = Sub_category::where('categoryId', $categoryId)->get();
			return view('partials.subcategories', array('subCategories'=>$subCategories));
    }

	public function edit($subCategoryId)
	{

	}

	public function store(Request $request) { //recibira un array asociativo con los datos de la subcategoria
		$subCategory = new Sub_category();

		$subCategory->name = $request->input('name');
		$subCategory->imagePath = $request->input('imagePath');
		$subCategory->categoryId = $request->input('categoryId');

		$subCategory->save();
	}

	public function show($subCategoryId)
	{
        	$subCategory = Sub_category::findOrFail($subCategoryId);
			return view('partials.subcategories', array('subcategory'=>$subCategory));
    }

	public function update($subCategoryId, $auxSubCategory)
	{
		$subCategory = Sub_category::findOrFail($subCategoryId);

		$subCategory->name = $auxSubCategory->name;
		$subCategory->imagePath = $auxSubCategory->imagePath;
		$subCategory->category = $auxSubCategory->category;

		$subCategory->save();
    }

	public function destroy($subCategoryId)
	{
        	$subCategory = Sub_category::findOrFail($subCategoryId);
			$subCategory->delete();
    }
}

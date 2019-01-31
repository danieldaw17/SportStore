<?php

namespace App\Http\Controllers;
use App\Sub_category;

use Illuminate\Http\Request;

class Sub_CategoriesController extends Controller
{

	public function index($categoryId)
	{
        	$categories = Sub_category::where('categoryId', $categoryId)->get();
			return view('partials.subcategories', array('categories'=>$categories));
    }

	public function edit($subCategoryId)
	{
		
			// VISTA DE EDITAR SUBCATEGORIA return view('partials.subcategories', array('subcategory'=>$subCategory));*/
    }

	public function show($subCategoryId, $categoryId)
	{
        	$subCategory = Sub_category::find($subCategoryId);
			// VISTA DE EDITAR SUBCATEGORIA return view('partials.subcategories', array('subcategory'=>$subCategory));
    }

	public function update($subCategoryId, $auxSubCategory)
	{
		$subCategory = Sub_category::find($subCategoryId);

		$subCategory->name = $auxSubCategory->name;
		$subCategory->imagePath = $auxSubCategory->imagePath;
		$subCategory->category = $auxSubCategory->category;

		$subCategory->save();
    }

	public function destroy($subCategoryId)
	{
        	$subCategory = Sub_category::find($subCategoryId);
			$subCategory->delete();
			// VISTA DE EDITAR SUBCATEGORIA return view('partials.subcategories', array('subcategory'=>$subCategory));
    }





}

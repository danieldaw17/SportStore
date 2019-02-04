<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sport;
use App\Category;
use App\Sub_category;

class CategoriesController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Category::all();

		//llamar a la vista devolciendo categories
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

	 //for creating a new subcategory with a form
    public function create()
    {
		$sports = Sport::all();

        //llamar a vista de crear category con array sports
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

	 //it receives the data of a new category from a form and save it in the database
    public function store(Category $request)
    {
        $category = new Category();
		$subCategory->name = $request->input('name');
		$subCategory->imagePath = $request->input('imagePath');
		$subCategory->taxes = $request->input('taxes');

		$category->save();
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
    public function edit($categoryId)
    {
		$sports = Sport::all();

		if (!$category = Sub_category::find($categoryId)) {
			abort(404);
		}
        //llamar a vista de editar category
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Category $request, $categoryId)
    {
		if (!$category = Category::find($categoryId)) {
			abort(404);
		}

		$subCategory->name = $request->input('name');
		$subCategory->imagePath = $request->input('imagePath');
		$subCategory->taxes = $request->input('taxes');

		$category->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryId)
    {
		if (!$category = Category::find($categoryId)) {
			abort(404);
		}

		$sub_categories = Sub_category::where('categoryId', $categoryId)->get());

		/*
			DELETE FROM products
			WHERE products.id IN (
	            SELECT P.id
	            FROM (SELECT * FROM products) AS P, sub_categories S, categories C
				WHERE P.subCategoryId=S.id
				AND S.categoryId = 2
	    	);
		*/
		$products = Products::whereIn('id', function($query) {
		    $query->select('paper_type_id')
		    ->from(with(new ProductCategory)->getTable())
		    ->whereIn('category_id', ['223', '15'])
		    ->where('active', 1);
		})->get();


		$category->delete();
    }
}

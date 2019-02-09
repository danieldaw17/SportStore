<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;

class ImagesController extends Controller
{

	//for creating a new image with a form
   public function create($userId, $categoryId, $subCategoryId, $productId)
   {
	   if(!Auth::check() || Auth::user()->role!="root") {
		   abort(404);
	   }

	   $categories = Category::all();

	   return view('partials.admin.formImage', array('userId'=>$userId, 'categoryId'=>$categoryId, 'subCategoryId'=>$subCategoryId, 'productId'=>$productId));
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $userId, $categoryId, $subCategoryId, $productId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		$validateData = $request->validate([
			'name' => 'required|max:50',
			'path' => 'required|max:50'
	  	]);

        $image = new Image();

		$image->name = $request->input('name');
		$image->path = $request->input('path');
		$productId->path = $productId;
		$image->path = "";
		$image->save();

		if ($request->hasFile('image')) {

			$extension = $request->image->extension();
			$imageName = $image->id.".".$extension;
			$foldPath = 'storage/images/products';
			if (!is_dir($foldPath)) {
				mkdir($foldPath, 0777, true);

			}
			$request->image->move($foldPath, $imageName);
			$fullPath = $foldPath."/".$imageName;
			$image->imagePath = $fullPath;
			$image->save();
		}
		return redirect("user/$userId/Categories/$categoryId/Sub_categories/$subCategoryId/Products/$productId/Images");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $userId, $categoryId, $subCategoryId, $productId, $imageId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
 		   abort(404);
 	   }

	   if (!$image = Image::find($imageId)) {
		   abort(404);
	   }

 	   return view('partials.admin.formImage', array('userId'=>$userId, 'categoryId'=>$categoryId, 'subCategoryId'=>$subCategoryId, 'productId'=>$productId, 'image'=>$image));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId, $categoryId, $subCategoryId, $productId, $imageId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$image = Image::find($imageId)) {
			abort(404);
		}

		$image->name = $request->input('name');
		$image->path = $request->input('path');
		$image->path = $request->input('productId');

		if ($request->hasFile('image')) {
			if (file_exists($image->path)) {
				unlink($image->path);
			}

			$extension = $request->image->extension();
			$imageName = $image->id.".".$extension;
			$foldPath = 'storage/images/products';
			if (!is_dir($foldPath)) {
				mkdir($foldPath, 0777, true);
			}

			$request->image->move($foldPath, $imageName);
			$fullPath = $foldPath."/".$imageName;
			$image->path = $fullPath;
		}

		$image->save();
		return redirect("user/$userId/Categories/$categoryId/Sub_categories/$subCategoryId/Products/$productId/Images");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId, $categoryId, $subCategoryId, $productId, $imageId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$image = Image::find($imageId)) {
			abort(404);
		}

		$image->delete();
		return redirect("user/$userId/Categories/$categoryId/Sub_categories/$subCategoryId/Products/$productId/Images");
    }
}

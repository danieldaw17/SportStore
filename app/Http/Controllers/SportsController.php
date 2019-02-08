<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Sport;
use App\Product;
use Auth;

class SportsController extends Controller
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
        $sports = Sport::all();

		return view('partials.admin.showSports', array('userId'=>$userId, 'sports'=>$sports));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($userId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}
		return view('partials.admin.sportForm', array('userId'=>$userId));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request, $userId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		$validateData = $request->validate([
          'name' => 'required|max:30'
	  	]);

		$sport = new Sport();
		$sport->name = $request->input('name');
		$sport->imagePath = "";
		$sport->save();

		if ($request->hasFile('image')) {

			$extension = $request->image->extension();
			$imageName = $sport->id.".".$extension;
			$foldPath = 'storage/images/sports';
			if (!is_dir($foldPath)) {
				mkdir($foldPath, 0777, true);

			}
			$request->image->move($foldPath, $imageName);
			$fullPath = $foldPath."/".$imageName;
			$sport->imagePath = $fullPath;
			$sport->save();
		}
		return redirect("user/$userId/sports");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($userId, $sportId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$sport = Sport::find($sportId)) {
			abort(404);
		}

		return view('partials.admin.sportForm', array('userId'=>$userId, 'sport'=>$sport));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId, $sportId)
    {

		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		$validateData = $request->validate([
          'name' => 'required|max:30'
	  	]);

		if (!$sport = Sport::find($sportId)) {
			abort(404);
		}

		$sport->name = $request->input('name');

		if ($request->hasFile('image')) {
			if (file_exists($sport->imagePath)) {
				unlink($sport->imagePath);
			}

			$extension = $request->image->extension();
			$imageName = $sport->id.".".$extension;
			$foldPath = 'storage/images/sports';
			if (!is_dir($foldPath)) {
				mkdir($foldPath, 0777, true);
			}

			$request->image->move($foldPath, $imageName);
			$fullPath = $foldPath."/".$imageName;
			$sport->imagePath = $fullPath;
		}
		$sport->save();

		return redirect("user/$userId/sports");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId, $sportId)
    {
		if(!Auth::check() || Auth::user()->role!="root") {
			abort(404);
		}

		if (!$sport = Sport::find($sportId)) {
			abort(404);
		}

		$products = Product::where('sportId', $sportId)->get();
		if (count($products)>0) {
			$errors = array();
			$errors[0] = "There are products with this sport and can not be deleted";
			return view('inc.admin.showSports', array('userId'=>$userId, 'sportId'=>$sportId,'errors'=>$errors));
		}

		$sport->delete();
		return redirect("user/$userId/sports");
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use App\Sport;

class SportsController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sports = Sport::all();

		//lamar a la vista y devolver deportes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		//lamar vista de crear deporte

    }

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($sportId)
    {
		if (!$sport = Sport::find($sportId)) {
			abort(404);
		}

		//llamar vista con deporte
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

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
    }

	public function createDirectory($path) {
		//$path = "images/2020/February";

		$arrayPath = explode("/", $path);
		for ($i=0; $i<count($arrayPath); $i++) {
			$j=0;
			$auxPath="";
			while ($j<=$i) {
				$auxPath.= $arrayPath[$j]."/";
				$j++;
			}

			if (!file_exists($auxPath)) {
				mkdir($auxPath, 0777);
			}
		}
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sportId)
    {
		if (!$sport = Sport::find($sportId)) {
			abort(404);
		}

		//lamar vista de editar con el $sport
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Sport $request, $sportId)
    {
		$validateData = $request->validate([
          'name' => 'required|max:30'
	  	]);
		
		if (!$sport = Sport::find($sportId)) {
			abort(404);
		}

		$sport->name = $request->input('name');

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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sportId)
    {
		if (!$sport = Sport::find($sportId)) {
			abort(404);
		}

		$sport->delete();
    }


}

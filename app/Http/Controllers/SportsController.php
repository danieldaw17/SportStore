<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

    public function store(Sport $request, $userId, $sportId)
    {
		return "controller usuario";
		/*
		$sport = new Sport();
		$sport->name = $request->input('name');

		if (isset($_FILES["file"])) {
			$sport->imagePath = uploadImage($sport->id);
		}

		$sport->save();
		*/
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
		return "controlador";
		 /*
		if (!$sport = ::find($sportId)) {
			abort(404);
		}

		$sport->name = $request->input('name');
		$sport->imagePath = $request->input('imagePath');

		$sport->save();*/
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



	function uploadImage($sportId) {
		$rightUploaded = false;

		$errors = array();
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_tmp = $_FILES['image']['tmp_name'];
		$file_type = $_FILES['image']['type'];

		$file_ext = strtolower($file_name);
		$file_ext = explode(".", $file_name);
		$file_ext = end($file_ext);
		$file_name = $sportId.".".$file_ext;

		$extensions= array("jpeg","jpg","png");

		if (in_array($file_ext, $extensions)=== false) {
			array_push($errors, "extension not allowed, please choose a JPEG or PNG file.");
		}

		if ($file_size > 2097152) {
			array_push($errors, 'File size must be excately 2 MB');
		}

		if (empty($errors)==true) {
			$path = "/storage/app/images/sports/";
			createDirectory($path);

			move_uploaded_file($file_tmp, $path."/".$file_name);
			$rightUploaded = true;
			$imagePath = $path."/".$file_name;

		} else {
			$rightUploaded = false;
			$imagePath=null;
		}

		return $imagePath;
	}

	function createDirectory($path) {
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
}

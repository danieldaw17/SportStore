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
		$sport = Sport::find($sportId)) {
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

    public function store(Sport $request)
    {
		$sport = new Sport();
		$sport->name = $request->input('name');
		$sport->imagePath = $request->input('imagePath');

		$sport->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sportId)
    {
		$sport = Sport::find($sportId)) {
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
		if (!$sport = ::find($sportId)) {
			abort(404);
		}

		$sport->name = $request->input('name');
		$sport->imagePath = $request->input('imagePath');

		$sport->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sportId)
    {
		if (!$sport = ::find($sportId)) {
			abort(404);
		}

		$sport->delete();
    }
}

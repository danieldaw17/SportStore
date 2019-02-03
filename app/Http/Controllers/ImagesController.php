<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;

class ImagesController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Image $request)
    {
        $image = new Image();

		$image->name = $request->input('name');
		$image->path = $request->input('path');
		$productId->path = $request->input('productId');

		$image->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($imageId)
    {
		if (!$image = Image::find($imageId)) {
			abort(404);
		}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($imageId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Image $request, $imageId)
    {
		if (!$image = Image::find($imageId)) {
			abort(404);
		}

		$image->name = $request->input('name');
		$image->path = $request->input('path');
		$image->path = $request->input('productId');

		$image->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($imageId)
    {
		if (!$image = Image::find($imageId)) {
			abort(404);
		}

		$image->delete();
    }
}

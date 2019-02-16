<?php

namespace App\Http\Controllers;
use Cart;
use App\Image;
use App\Category;
use App\Sub_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dd(Cart::content());
        $images = Image::all();
		$categoriesNav = Category::all();
    	$sub_categoriesNav = Sub_category::all();
        return view ('partials.cart',array('images' => $images, 'categoriesNav'=>$categoriesNav, 'sub_categoriesNav'=>$sub_categoriesNav));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Cart::add($request->id, $request->name, $request->qty ,$request->price, ['size'=> $request->size,'amount'=>$request->amount] )->associate('App\Product');
        return redirect()->route('cart.index')->with('success_message','Item was added to your cart');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [

            'quantity' => 'required|numeric|between:1,10'
        ]);


        if($validator->fails()){
            session()->flash('errors',collect(['Quantity mush be between 1 and 10']));
            return responde()->json(['success' => false ],400);


        }


            Cart::update($id, $request->quantity);

            session()->flash('success_message','Quantity was updated successfully!');
            return responde()->json(['success' => true ]);







    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success_message','Item has been removed!');
    }
}

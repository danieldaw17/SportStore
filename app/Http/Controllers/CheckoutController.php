<?php

namespace App\Http\Controllers;
use Session;
use App\Image;
use Cart;
use Auth;
use Stripe;
use App\Category;
use App\Http\Controllers\Address;
use App\Sub_category;
use App\Http\Requests\CheckoutRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        if (!Auth::check()) {
                $loginRequire = true;
                session(['loginRequire' => $loginRequire]);
                return redirect('/');
        } else {
            if(session()->has('loginRequire')){
                Session::forget('loginRequire');
            }
			$categoriesNav = Category::all();
	    	$sub_categoriesNav = Sub_category::all();
            return view('partials.checkout',array('images'=>$images, 'sub_categoriesNav'=>$sub_categoriesNav, 'categoriesNav'=>$categoriesNav));
        }
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
    public function store(CheckoutRequest $request)
    {

        $contents=Cart::content()->map(function($item){
            return $item->model->shortDescription.','.$item->qty;


        })->values()->toJson();
        try {
            /*$charge = Stripe::charges()->create([

                'amount'=> Cart::total(),
                'currency' =>'EUR',
                'source' =>$request->stripeToken,
                'description'=>'Order',
                'receipt_email'=>$request->email,
                'metadata' =>[
                    'contents'=>$contents,
                    'quantity'=>Cart::instance('default')->count(),
                ],

            ]);*/
                //succesful payment

            //Cart::instance('default')->destroy();

            //return back()->with('success_message','Thank you!, Your payment has been succesfully accepted');
			return redirect('generateInvoice/delivery/1');
            //return redirect()->route('confirmation.index')->with('success_message','Thank you! Your payment has been successfully accepted!');

        } catch (CardErrorException $e) {

            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

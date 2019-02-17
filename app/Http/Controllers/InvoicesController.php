<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Invoice;
use App\Invoice_line;
use Auth;
use Cart;
use App\Address;
use Stripe;

class InvoicesController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userId)
    {
		if (!Auth::check() || Auth::user()->id!=$userId) {
			abort(404);
		}

        $invoices = Invoice::all();

		return view('partials.showInvoices', array('userId'=>$userId, 'invoices'=>$invoices));
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($userId, $invoiceId)
	{
		if (!Auth::check() || Auth::user()->id!=$userId) {
			abort(404);
		}

		if (!$invoice = Invoice::find($invoiceId)) {
			abort(404);
		}

		//show to the user their invoice but they can not modify it
		return view('partials.showInvoice-detail', array('userId'=>$userId, 'invoice'=>$invoice));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($deliveryId)
    {

		/*$validateData = $request->validate([
			'totalPrice' => 'required|numeric',
			'userId' => 'required|integer',
			'deliveryId' => 'required|integer'
	  	]);*/

		if (Cart::content()->count()>0) {
			$invoice = new Invoice();
			$invoice->totalPrice = Cart::total();
			$invoice->deliveryId = $deliveryId;
			$invoice->paymentMethod = "Stripe";
			$invoice->userId = Auth::user()->id;
			$invoice->basePrice = Cart::subtotal();
			$invoice->taxes = Cart::tax();
			$invoice->basePrice = Cart::subtotal();
			$invoice->totalPrice = Cart::total();
			$invoice->shippingAddress = Address::where('userId', Auth::user()->id)->where('typeAddress', 'shipping')->first()->id;
			$invoice->billingAddress = Address::where('userId', Auth::user()->id)->where('typeAddress', 'billing')->first()->id;
			$invoice->save();

			return redirect('generateInvoiceLines/'.$invoice->id);
		} else {
			return redirect('/');
		}


    }
}

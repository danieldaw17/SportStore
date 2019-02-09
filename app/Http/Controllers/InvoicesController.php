<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Invoice;
use App\Invoice_line;

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

		return view('partials.showInvoices', 'userId'=>$userId, 'invoices'=>$invoices);
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
		return view('partials.showInvoice', array('userId'=>$userId, 'invoice'=>$invoice));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $userId, $invoice)
    {
		if (!Auth::check() || Auth::user()->id!=$userId) {
			abort(404);
		}

		$validateData = $request->validate([
			'totalPrice' => 'required|numeric',
			'userId' => 'required|integer',
			'deliveryId' => 'required|integer'
	  	]);

        $invoice = new Invoice();
		$invoice->totalPrice = $request->input('totalPrice');
		$invoice->userId = $request->input('userId');
		$invoice->deliveryId = $request->input('deliveryId');

		$invoice->save();
		return("user/$userId/invoices");
    }
}

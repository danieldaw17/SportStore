<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Invoice_line;

class Invoice_linesController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $userId, $invoice, $invoiceId)
    {
		if (!Auth::check() || Auth::user()->id!=$userId) {
			abort(404);
		}

		$validateData = $request->validate([
  		   'amount' => 'required|integer',
  		   'basePrice' => 'required|numeric'
	  	]);

		$numberLine = Invoice_line::max('line')->where('invoiceId', $invoiceId)->get();
		$numberLine++;

		$invoice_line = new Invoice_line();

		$invoice_line->line = $numberLine;
		$invoice_line->amount = $request->input('amount');
		$invoice_line->basePrice = $request->input('basePrice');

        $invoice_line->save();
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($invoice_lineId)
    {
		if (!Auth::check() || Auth::user()->id!=$userId) {
			abort(404);
		}

		if (!$invoice_line = Invoice_line::find($invoice_lineId)) {
			abort(404);
		}

		//show to the user their invoice_line of a invoice but they can not modify it
		return view('partials.showInvoiceLine', array('userId'=>$userId, 'invoice'=>$invoice, 'invoiceLine'=>$invoice_line));
    }
}

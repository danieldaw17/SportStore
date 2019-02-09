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
    public function store($userId, $invoice, $invoice_line)
    {
		if (!Auth::check() || Auth::user()->id!=$userId) {
			abort(404);
		}

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

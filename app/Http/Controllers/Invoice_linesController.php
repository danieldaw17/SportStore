<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Invoice_line;
use Cart;
class Invoice_linesController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($invoiceId)
    {
    		$numberLine=0;

		if (Cart::content()->count()>0) {
			foreach (Cart::content() as $item) {
				$invoice_line = new Invoice_line();
				$invoice_lines = Invoice_line::where('invoiceId', $invoiceId)->get();
				if (count($invoice_lines)<1) {
					$numberLine = 1;
				} else {
					$numberLine++;
				}

				$invoice_line->amount = $item->qty;
				$invoice_line->basePrice = $item->subtotal;
				$invoice_line->invoiceId = $invoiceId;
				$invoice_line->line = $numberLine;
				$invoice_line->productId = $item->model->id;

				$invoice_line->save();
			}
			Cart::instance('default')->destroy();
			return redirect()->route('confirmation.index')->with('success_message','Thank you! Your payment has been successfully accepted!');
		} else {
			return redirec('/');
		}
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

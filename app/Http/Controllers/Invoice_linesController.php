<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Invoice_line;

class Invoice_linesController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //llamar a la vista crear linea e factura
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Invoice_line $request)
    {
        $invoice_line = new Invoice_line();

		$invoice_line->line = $request->input('line');
		$invoice_line->amount = $request->input('amount');
		$invoice_line->basePrice = $request->input('basePrice');
		$invoice_line->productId = $request->input('productId');
		$invoice_line->invoiceId = $request->input('invoiceId');

		$invoice_line->save();
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($invoice_lineId)
    {
		if (!$invoice_line = Invoice_line::find($invoice_lineId)) {
			abort(404);
		}

		//llamar vista mostrar line factura
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($invoice_lineId)
    {
		if (!$invoice_line = Invoice_line::find($invoice_lineId)) {
			abort(404);
		}

		//llamar vista editar linea factura
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Invoice_line $request, $invoice_lineId)
    {
		if (!$invoice_line = Invoice_line::find($invoice_lineId)) {
			abort(404);
		}

		$invoice_line->line = $request->input('line');
		$invoice_line->amount = $request->input('amount');
		$invoice_line->basePrice = $request->input('basePrice');
		$invoice_line->productId = $request->input('productId');
		$invoice_line->invoiceId = $request->input('invoiceId');

		$invoice_line->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($invoice_lineId)
    {
        if (!$invoice_line = Invoice_line::find($invoice_lineId)) {
			abort(404);
		}

		$invoice_line->delete();
    }
}

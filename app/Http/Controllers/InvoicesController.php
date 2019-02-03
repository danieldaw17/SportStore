<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Invoice;
use App\Invoice_line;

class InvoicesController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //llamar formulario de crear factura
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Invoice $request)
    {
        $invoice = new Invoice();

		$invoice->totalPrice = $request->input('totalPrice');
		$invoice->userId = $request->input('userId');
		$invoice->deliveryId = $request->input('deliveryId');

		$invoice->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		if (!$invoice = Invoice::find($invoiceId)) {
			abort(404);
		}

		//llamar vista de editar factura
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Invoice $request, $invoiceId)
    {
		if (!$invoice = Invoice::find($invoiceId)) {
			abort(404);
		}

		$invoice->totalPrice = $request->input('totalPrice');
		$invoice->userId = $request->input('userId');
		$invoice->deliveryId = $request->input('deliveryId');

		$invoice->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		if (!$invoice = Invoice::find($invoiceId)) {
			abort(404);
		}

		if (!$invoice_lines = Invoice_line::where('invoiceId', $invoiceId)->get()) {
			abort(404);
		}

		$invoice_lines->delete();
		$invoice->delete();
    }
}

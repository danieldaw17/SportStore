<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_lines', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('line');
			$table->integer('amount', 4);
			$table->float('basePrice' 7,2);
			$table->timestamps();

			$table->integer('productId')->unsigned();
			$table->foreign('productId')->references('id')->on('products');

			$table->integer('invoiceId')->unsigned();
			$table->foreign('invoiceId')->references('id')->on('invoices');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_lines');
    }
}

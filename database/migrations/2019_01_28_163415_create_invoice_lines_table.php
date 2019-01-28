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
			$table->integer('amount');
			$table->float('basePrice');
			$table->integer('category');
			$table->integer('subcategory');

			$table->integer('product')->unsigned();
			$table->foreign('product')->references('id')->on('products');

			$table->integer('invoice')->unsigned();
			$table->foreign('invoice')->references('id')->on('invoices');

            $table->timestamps();
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

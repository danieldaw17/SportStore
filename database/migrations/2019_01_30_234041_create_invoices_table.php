<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
			$table->float('totalPrice', 7,2);
			$table->string('paymentMethod');
            $table->timestamps();

			$table->integer('billingAddress')->unsigned();
			$table->foreign('billingAddress')->references('id')->on('addresses');

			$table->integer('shippingAddress')->unsigned();
			$table->foreign('shippingAddress')->references('id')->on('addresses');

			$table->integer('userId')->unsigned();
			$table->foreign('userId')->references('id')->on('users');

			$table->integer('deliveryId')->unsigned();
			$table->foreign('deliveryId')->references('id')->on('deliveries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}

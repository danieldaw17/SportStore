<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles_stock', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('amount');

			$table->integer('sizeWheel')->unsigned();
			$table->foreign('sizeWheel')->references('id')->on('sizes');

			$table->integer('product')->unsigned();
			$table->foreign('product')->references('id')->on('products');
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
        Schema::dropIfExists('vehicles_stock');
    }
}

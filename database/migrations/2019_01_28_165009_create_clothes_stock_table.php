<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClothesStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothes_stock', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('amount');

			$table->integer('product')->unsigned();
			$table->foreign('product')->references('id')->on('products');

			$table->integer('size')->unsigned();
			$table->foreign('size')->references('id')->on('sizes');

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
        Schema::dropIfExists('clothes_stock');
    }
}

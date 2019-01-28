<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('shortDescription');
			$table->longText('description');
			$table->integer('subcategory');
			$table->float('basePrice');

			$table->integer('category')->unsigned();
			$table->foreign('category')->references('id')->on('categories');

			$table->integer('sport')->unsigned();
			$table->foreign('sport')->references('id')->on('sports');

			$table->integer('provider')->unsigned();
			$table->foreign('provider')->references('id')->on('providers');

			$table->integer('brand')->unsigned();
			$table->foreign('brand')->references('id')->on('brands');


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
        Schema::dropIfExists('products');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothes', function (Blueprint $table) {

			$table->integer('id')->unsigned();
			$table->foreign('id')->references('id')->on('products');

			$table->enum('gender', ['man', 'woman', 'unisex']);

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
        Schema::dropIfExists('clothes');
    }
}

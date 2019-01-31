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
			$table->string('name', 100);
			$table->text('description');
			$table->string('shortDescription', 50);
			$table->float('basePrice', 7,2);
			$table->enum('gender', ['man', 'woman', 'unisex'])->nullable()->change();
			$table->string('typeSupplement', 50)->nullable()->change();
			$table->float('volume', 7,2)->nullable()->change();
			$table->integer('shifts', 2)->nullable()->change();
			$table->integer('wheelsAmount', 1)->nullable()->change();
			$table->float('weight', 7,2)->nullable()->change();

			$table->integer('subCategoryId')->unsigned();
			$table->foreign('subCategoryId')->references('id')->on('sub_categories');

			$table->integer('deliveryId')->unsigned();
			$table->foreign('deliveryId')->references('id')->on('deliveries');

			$table->integer('brandId')->unsigned();
			$table->foreign('brandId')->references('id')->on('brands');

			$table->integer('sportId')->unsigned();
			$table->foreign('sportId')->references('id')->on('sports');

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

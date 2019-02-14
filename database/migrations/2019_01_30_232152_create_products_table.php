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
			$table->enum('gender', ['man', 'woman', 'unisex'])->nullable();
			$table->string('typeSupplement', 50)->nullable();
			$table->string('volume', 255)->nullable();
			$table->integer('shifts')->nullable();
			$table->integer('wheelsAmount')->nullable();
			$table->float('weight', 7,2)->nullable();
			$table->boolean('active')->default(true);

			$table->integer('subCategoryId')->unsigned();
			$table->foreign('subCategoryId')->references('id')->on('sub_categories');

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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_address', function (Blueprint $table) {
            $table->increments('id');
			$table->enum('roadType', ['paseo', 'calle', 'avenida', 'callejon']);
			$table->string('roadName');
			$table->string('city');
			$table->string('province');
			$table->integer('zipCode');
			$table->string('country');
			$table->string('nif');
			$table->string('userName');
			$table->string('lastName');

			$table->integer('user')->unsigned();
			$table->foreign('user')->references('id')->on('users');

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
        Schema::dropIfExists('shipping_address');
    }
}

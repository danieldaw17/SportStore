<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('userId');
			$table->enum('roadType', ['paseo', 'calle', 'avenida', 'callejon']);
			$table->string('roadName', 70);
			$table->string('city', 40);
			$table->string('province', 40);
			$table->integer('zipCode', 10);
			$table->string('country', 25);
			$table->enum('typeAddress', ['billing', 'shipping']);
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
        Schema::dropIfExists('addresses');
    }
}

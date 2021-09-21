<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
              $table->id();
              $table->unsignedBigInteger('user_id_fk');
              $table->string('street')->nullable($value = true);
              $table->string('municipality')->nullable($value = true);
              $table->string('colony')->nullable($value = true);
              $table->string('zipCode')->nullable($value = true);
              $table->string('city')->nullable($value = true);
              $table->string('state')->nullable($value = true);
              $table->string('outerNumber')->nullable($value = true);
              $table->string('innerNumber')->nullable($value = true);
              $table->string('references')->nullable($value = true);
              $table->string('phone')->nullable($value = true);
              $table->foreign('user_id_fk')->references('id')->on('users');
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
        Schema::dropIfExists('user_addresses');
    }
}

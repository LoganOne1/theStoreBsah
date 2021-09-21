<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('userId');
          $table->unsignedBigInteger('addressId');
          $table->foreign('userId')->references('id')->on('users');
          $table->foreign('addressId')->references('id')->on('user_addresses');
          $table->string('status');
          $table->string('paymentType');
          $table->double('total', 10, 1);
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
        Schema::dropIfExists('orders');
    }
}

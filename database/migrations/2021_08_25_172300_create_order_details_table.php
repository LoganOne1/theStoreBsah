<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
          $table->increments('idOrderDetail');
          $table->unsignedBigInteger('idOrder');
          $table->unsignedBigInteger('idProduct')->nullable();
          $table->double('price', 10, 1);
          $table->unsignedBigInteger('amount');
          $table->timestamps();
          $table->foreign('idOrder')->references('id')->on('orders');
          $table->foreign('idProduct')->references('id')->on('product_combinations')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}

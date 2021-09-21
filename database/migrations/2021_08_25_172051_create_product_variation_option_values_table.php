<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVariationOptionValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variation_option_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('products_variations_id');
            $table->string('variationName', 150);
            $table->timestamps();
            $table->foreign('products_variations_id')->references('id')->on('product_variation_options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_variation_option_values');
    }
}

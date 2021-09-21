<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('image_gallery_id');
            $table->unsignedBigInteger('products_variations_value_id');
            $table->boolean('isFeatured');
            $table->timestamps();
            $table->foreign('image_gallery_id')->references('id')->on('image_galleries');
            $table->foreign('products_variations_value_id')->references('id')->on('product_variation_option_values');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_products');
    }
}

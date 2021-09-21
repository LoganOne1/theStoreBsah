<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocallitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locallities', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('fk_municipalities_id');
          $table->string('keyLocallity',150);
          $table->string('name',150);
          $table->timestamps();
          $table->foreign('fk_municipalities_id')->references('id')->on('municipallities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locallities');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipallitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipallities', function (Blueprint $table) {
          $table->id();
         $table->string('keyMunicipallity',150);
         $table->string('name',150);
         $table->unsignedBigInteger('fk_federal_entities_id');
         $table->foreign('fk_federal_entities_id')->references('id')->on('federal_entities');
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
        Schema::dropIfExists('municipallities');
    }
}

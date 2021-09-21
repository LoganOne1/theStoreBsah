<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('nick');
            $table->string('name');
            $table->string('first_surname');
            $table->string('second_surname');
            $table->string('genre')->nullable($value = true);
            $table->string('cell_phone')->nullable($value = true);
            $table->string('credit_Card')->nullable($value = true);
            $table->string('creditCard_Type')->nullable($value = true);
            $table->date('creditCardExpirit')->nullable($value = true);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('status');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

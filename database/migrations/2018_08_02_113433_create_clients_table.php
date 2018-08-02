<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('id');
            $table->string('name', 255);
            $table->string('firstName', 255);
            $table->string('lastName', 255);
            $table->string('email')->unique();
            $table->string('password', 255);
            $table->string('imageUrl', 255);
            $table->string('phoneNumber', 255);
            $table->string('iso8601', 255);
            $table->string('city', 255);
            $table->string('streetAddress', 255);
            $table->string('postcode', 255);
            $table->string('state', 255);
            $table->string('creditCardType', 255);
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
        Schema::dropIfExists('clients');
    }
}

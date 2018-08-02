<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
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
            $table->string('name', 255);
            $table->string('surname', 255);
            $table->string('email')->unique();
            $table->string('password', 255);
            $table->string('img', 255);
            $table->string('phone', 45);
            $table->string('vat', 255);
            $table->string('company', 255);
            $table->string('country', 255);
            $table->string('route', 255);
            $table->string('zip_code', 255);
            $table->string('state', 255);
            $table->string('maps', 255);
            $table->string('payment_method', 255);
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
        Schema::dropIfExists('client');
    }
}

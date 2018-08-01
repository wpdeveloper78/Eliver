<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->string('product_code', 255);
            $table->longText('product_title');
            $table->longText('product_description');
            $table->string('price', 255);
            $table->string('price_sale', 255);
            $table->decimal('product_quantity', 9, 2);
            $table->date('bookable_from');
            $table->date('bookable_to');
            $table->string('product_category', 255);
            $table->string('product_image', 255);
            $table->string('product_video', 255);
            $table->string('product_gallery', 255);
            $table->longText('product_detail');
            $table->longText('product_specification');
            $table->longText('product_futured');
            $table->longText('product_specific_description');
            $table->longText('product_shipping_option');
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
        Schema::dropIfExists('product');
    }
}

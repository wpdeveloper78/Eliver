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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('product_code', 255);
            $table->longText('product_title', 255);
            $table->longText('product_description', 255);
            $table->string('price', 255);
            $table->string('price_sale', 255);
            $table->string('quantity', 255);
            $table->date('bookable_from');
            $table->date('bookable_tu');
            $table->string('product_category', 255);
            $table->string('product_image', 255);
            $table->string('product_video', 255);
            $table->string('product_gallery', 255);
            $table->longText('product_detail', 255);
            $table->longText('product_specification', 255);
            $table->longText('product_futures', 255);
            $table->longText('specific_description', 255);
            $table->longText('shipping_option', 255);
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

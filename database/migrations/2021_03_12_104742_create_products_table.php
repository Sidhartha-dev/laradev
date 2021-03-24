<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("amazon_product_name");
            $table->string("flipk_product_name");
            $table->float("flipkart_prize");
            $table->float("amazon_prize");
            $table->text("amazon_details");
            $table->text("flipkart_details");
            $table->text("flipkart_description");
            $table->text("amazon_description");
            $table->unsignedInteger('category_id');
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
        Schema::dropIfExists('products');
    }
}

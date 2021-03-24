<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrandProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trand_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_slug')->unique();
            $table->text('details');
            $table->text('description');
            $table->string('link');
            $table->string('image')->nullable();
            $table->float('price');
            $table->float('ratings')->nullable();
            $table->boolean('assured')->default(false);
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
        Schema::dropIfExists('trand_products');
    }
}

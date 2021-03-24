<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('slug');
            $table->string('amazon_link');
            $table->string('flipkart_link');
            $table->string('flipkart_image')->nullable();
            $table->string('amazon_image')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('top_two_featured')->default(false);
            $table->boolean('flipkart_assured')->default(false);
            $table->boolean('amazon_verify')->default(false);
            $table->float('flipkart_ratings')->nullable();
            $table->float('amazon_ratings')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('amazon_link');
            $table->dropColumn('flipkart_link');
            $table->dropColumn('flipkart_image');
            $table->dropColumn('amazon_image');
            $table->dropColumn('featured');
            $table->dropColumn('top_two_featured');
            $table->dropColumn('flipkart_assured');
            $table->dropColumn('amazon_verify');
            $table->dropColumn('flipkart_ratings');
            $table->dropColumn('amazon_ratings');
        });
    }
}

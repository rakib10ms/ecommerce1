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
             $table->bigInteger('cate_id');
            $table->string('name');
            $table->string('slug');
            $table->mediumText('small_description');
            $table->longText('description');
            $table->string('original_price');
            $table->string('selling_price');
            $table->string('image');
            $table->string('qty');
            $table->string('tax');
            $table->tinyInteger('status')->comment('0=Inactive,1=Active');
            $table->tinyInteger('trending')->comment('0=negative,1=positive');
            $table->tinyInteger('hot_item')->comment('0=negative,1=positive');
            $table->tinyInteger('on_sale')->comment('0=negative,1=positive');
            $table->tinyInteger('top_viewed')->comment('0=negative,1=positive');
            $table->tinyInteger('best_seller')->comment('0=negative,1=positive');
            $table->mediumText('meta_tittle');
            $table->mediumText('meta_keywords');
            $table->mediumText('meta_description');
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

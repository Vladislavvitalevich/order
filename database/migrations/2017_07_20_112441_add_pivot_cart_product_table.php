<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPivotCartProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_carts', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('cart_id')->unsigned();
            $table->primary(['product_id','cart_id']);
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('cart_id')->references('id')->on('carts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_carts');
    }
}

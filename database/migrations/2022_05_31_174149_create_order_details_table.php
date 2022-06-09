<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('customer_orders');
            $table->bigInteger('order_detailid')->unique();
            $table->integer('order_amount');
            $table->integer('order_price');
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
        Schema::dropIfExists('order_details');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToOrderrowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orderrows', function (Blueprint $table) {
            //order naar orderrow
            $table->unsignedBigInteger('orders_id')->nullable();

            $table->foreign('orders_id')->references('id')->on('orders');

            //product naar orderrow
            $table->unsignedBigInteger('product_id')->nullable();
            
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orderrows', function (Blueprint $table) {
            //
        });
    }
}

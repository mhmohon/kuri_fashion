<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('payment_id');
            $table->unsignedInteger('address_id');
            $table->string('order_description');
            $table->date('order_date');
            $table->date('estimate_delivery_date')->nullable();
            $table->date('delivery_date')->nullable();
            $table->enum('status', ['pending', 'confirm', 'ready', 'delivered', 'returned'])->default('pending');
            $table->tinyInteger('read_status')->default('0');
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
        Schema::dropIfExists('orders');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recharge_orders', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('user_id')->nullable();
            $table->string('recharge_coupon_id')->nullable();
            $table->string('title')->nullable();
            $table->double('price')->nullable();
            $table->string('currency')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->string('pg_transaction_id')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recharge_orders');
    }
};

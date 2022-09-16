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
        Schema::create('points_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('payer_id')->nullable();
            $table->string('payee_id')->nullable();
            $table->string('title')->nullable();
            $table->string('service_type')->nullable();
            $table->string('service_id')->nullable();
            $table->integer('transaction_type')->nullable();
            $table->integer('payment_type')->nullable();
            $table->string('transaction_id')->nullable();
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
        Schema::dropIfExists('points_transactions');
    }
};

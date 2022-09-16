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
        Schema::create('business_leads', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('user_id')->nullable();
            $table->string('heading')->nullable();
            $table->string('type')->nullable();
            $table->string('slug')->nullable();
            $table->json('skills')->nullable();
            $table->integer('expected_duration')->default(0);
            $table->tinyInteger('expected_duration_frequency')->default(0);
            $table->string('payment_currency')->nullable();
            $table->double('payment_cost')->default(0);
            $table->tinyInteger('payment_frequency')->default(0);   
            $table->string('city_id')->nullable();  
            $table->string('state_id')->nullable();
            $table->string('country_id')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_country_code')->nullable();
            $table->string('contact_mobile')->nullable();
            $table->date('expected_start_date')->nullable();
            $table->string('banner_image')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('business_leads');
    }
};

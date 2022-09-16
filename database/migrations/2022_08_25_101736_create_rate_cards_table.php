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
        Schema::create('rate_cards', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('user_id')->nullable();
            $table->string('job_profile')->nullable();
            $table->string('slug')->nullable();
            $table->json('skills')->nullable();
            $table->integer('year_of_experience')->default(0);
            $table->string('payment_currency')->nullable();
            $table->double('payment_cost')->default(0);
            $table->tinyInteger('payment_frequency')->default(0);   
            $table->tinyInteger('expected_duration_frequency')->default(0); 
            $table->string('city_id')->nullable();  
            $table->string('state_id')->nullable();
            $table->string('country_id')->nullable();
            $table->string('industry')->nullable();
            $table->tinyInteger('joining_availability')->default(0);
            $table->tinyInteger('relocation_availability')->default(0);
            $table->longtext('description')->nullable();
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
        Schema::dropIfExists('rate_cards');
    }
};

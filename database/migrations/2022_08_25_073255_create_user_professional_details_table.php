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
        Schema::create('user_professional_details', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('user_id')->nullable();
            $table->string('landline_no')->nullable();
            $table->integer('total_experience_month')->nullable();
            $table->integer('total_experience_year')->nullable();
            $table->string('current_company')->nullable();
            $table->string('current_designation')->nullable();
            $table->integer('availability')->nullable();
            $table->string('joining_availability')->nullable();
            $table->string('resume')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('user_professional_details');
    }
};

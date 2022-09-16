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
        Schema::create('subcontracts', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('user_id')->nullable();
            $table->string('project_name')->nullable();
            $table->string('functional_area')->nullable();
            $table->string('slug')->nullable();
            $table->string('industry')->nullable();
            $table->json('skills')->nullable();
            $table->string('city_id')->nullable();
            $table->string('state_id')->nullable();
            $table->string('country_id')->nullable();
            $table->tinyInteger('joining_availability')->default(0);
            $table->integer('expected_delivery')->default(0);
            $table->tinyInteger('expected_delivery_frequency')->default(0);
            $table->date('expected_start_date')->nullable();
            $table->date('expected_end_date')->nullable();
            $table->string('payment_currency')->default(0);
            $table->double('payment_cost')->default(0);
            $table->tinyInteger('payment_frequency')->default(0);   
            $table->integer('expected_experience_year')->default(0);
            $table->string('expected_qualification')->default(0);
            $table->json('notes')->nullable();
            $table->tinyInteger('recruiter_assignment')->default(0);
            $table->double('recruiter_consultation_percentage')->default(0);
            $table->string('recruiter_email')->nullable();
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
        Schema::dropIfExists('subcontracts');
    }
};

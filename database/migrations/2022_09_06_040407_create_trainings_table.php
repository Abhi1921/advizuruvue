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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('specialized_profile_id')->nullable();
            $table->string('title')->nullable();
            $table->string('agenda')->nullable();
            $table->string('slug')->nullable();
            $table->text('agenda_preface')->nullable();
            $table->json('skills')->nullable();
            $table->tinyInteger('training_mode')->deafult(0);
            $table->date('start_date')->nullable();
            $table->integer('traning_duration')->nullable();
            $table->string('training_duration_frequency')->nullable();
            $table->time('start_time')->nullable();
            $table->string('address')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('city_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->tinyInteger('session_count')->deafult(0);
            $table->integer('available_seats')->nullable();
            $table->integer('conducting_days')->nullable();
            $table->string('banner_image')->nullable();
            $table->longtext('description')->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('trainings');
    }
};

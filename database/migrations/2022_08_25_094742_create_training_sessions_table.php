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
        Schema::create('training_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('training_id')->nullable();
            $table->string('session_duration')->nullable();
            $table->tinyInteger('session_duration_frequency')->nullable();
            $table->integer('points_charge')->nullable();
            $table->string('document')->nullable();
            $table->text('preface')->nullable();
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
        Schema::dropIfExists('training_sessions');
    }
};

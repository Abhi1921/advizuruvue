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
        Schema::create('admin_recommendations', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('user_id')->nullable();
            $table->string('admin_id')->nullable();
            $table->string('service_type')->nullable();
            $table->string('service_id')->nullable();
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
        Schema::dropIfExists('admin_recommendations');
    }
};

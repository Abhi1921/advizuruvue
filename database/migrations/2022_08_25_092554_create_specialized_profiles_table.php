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
        Schema::create('specialized_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('slug')->nullable();
            $table->string('country_code')->nullable();
            $table->string('mobile')->nullable();
            $table->json('skills')->nullable();
            $table->text('short_description')->nullable();
            $table->longtext('description')->nullable();
            $table->string('profile_photo')->nullable();
            $table->integer('certification')->nullable();
            $table->string('document')->nullable();
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
        Schema::dropIfExists('specialized_profiles');
    }
};

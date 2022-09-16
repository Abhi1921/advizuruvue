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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('owner_id')->nullable();
            $table->string('name')->nullable();
            $table->Integer('size')->default(0);
            $table->string('industry_type')->nullable();
            $table->string('profile_type')->nullable();
            $table->string('website')->nullable();
            $table->json('services')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_country_code')->nullable();
            $table->string('contact_person_mobile')->nullable();
            $table->string('contact_person_email')->nullable();
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
        Schema::dropIfExists('organizations');
    }
};

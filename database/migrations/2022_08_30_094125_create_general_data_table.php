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
       
            Schema::create('general_data', function (Blueprint $table) {
                $table->id();
                $table->string('uuid')->nullable();
                $table->string('technology_id')->nullable();
                $table->tinyInteger('type')->nullable();
                $table->string('name')->nullable();
                $table->string('slug')->nullable();
                $table->text('short_description')->nullable();
                $table->longtext('description')->nullable();
                $table->string('image')->nullable();
                $table->string('banner_image')->nullable();
                $table->string('side_image')->nullable();
                $table->string('theme_color')->nullable();
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
        Schema::dropIfExists('general_data');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('restaurant_typology', function (Blueprint $table) {
            $table->unsignedBigInteger('restaurant_id');
            $table->unsignedBigInteger('typology_id');

            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->foreign('typology_id')->references('id')->on('typologies');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('restaurant_typology');
    }
};

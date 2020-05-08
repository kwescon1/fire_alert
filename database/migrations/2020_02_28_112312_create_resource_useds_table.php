<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceUsedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_useds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('firestationid');
            $table->foreign('firestationid')->references('id')->on('users');
            $table->string('water_volume');
            $table->string('fire_extinguisher');
            $table->string('fire_trucks');
            $table->string('number_of_persons');
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
        Schema::dropIfExists('resource_useds');
    }
}

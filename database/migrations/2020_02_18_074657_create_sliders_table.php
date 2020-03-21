<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('image');
            $table->string('position');
            $table->string('caption');
            $table->string('caption-direction');
            $table->string('caption-transition');
            $table->string('header-transition');
            $table->string('header-text');
            $table->string('header-direction');
            $table->string('para-transition');
            $table->string('para-direction');
            $table->string('para-text');
            $table->string('height');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}

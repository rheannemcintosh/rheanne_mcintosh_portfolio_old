<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// @codingStandardsIgnoreLine
class CreateTreehouseTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treehouse_tracks', function (Blueprint $table) {
            $table->id();
            $table->string('track');
            $table->foreignId('treehouse_topic_id')->constrained();
            $table->integer('percentage');
            $table->float('length_hours')->nullable();
            $table->boolean('cv_flag');
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
        Schema::dropIfExists('treehouse_tracks');
    }
}

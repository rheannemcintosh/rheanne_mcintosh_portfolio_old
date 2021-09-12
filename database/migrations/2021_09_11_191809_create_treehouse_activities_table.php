<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreehouseActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treehouse_activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('activity_type')->nullable();
            $table->integer('percentage');
            $table->integer('year');
            $table->foreignId('treehouse_topic_id')->nullable()->constrained();
            $table->boolean('out_of_date');
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
        Schema::dropIfExists('treehouse_activities');
    }
}

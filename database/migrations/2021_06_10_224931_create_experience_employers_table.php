<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceEmployers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_employers', function (Blueprint $table) {
            $table->id();
            $table->text('employer_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('location');
            $table->text('country');
            $table->boolean('example');
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
        Schema::dropIfExists('experiences_employers');
    }
}

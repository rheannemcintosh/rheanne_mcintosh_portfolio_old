<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZtmCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ztm_courses', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->text('description');
            $table->string('instructor');
            $table->float('length_hours')->nullable();
            $table->integer('percentage');
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
        Schema::dropIfExists('ztm_courses');
    }
}

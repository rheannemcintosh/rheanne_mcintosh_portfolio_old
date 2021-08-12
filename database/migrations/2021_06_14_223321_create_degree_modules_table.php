<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDegreeModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degree_modules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('degree_id')->constrained();
            $table->text('name');
            $table->text('description');
            $table->string('grade');
            $table->string('stage');
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
        Schema::dropIfExists('degree_modules');
    }
}

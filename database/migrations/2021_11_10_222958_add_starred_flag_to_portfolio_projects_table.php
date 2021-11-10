<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStarredFlagToPortfolioProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolio_projects', function (Blueprint $table) {
            $table->boolean('starred_flag')->default(false)->after('active_flag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portfolio_projects', function (Blueprint $table) {
            $table->dropColumn('starred_flag');
        });
    }
}

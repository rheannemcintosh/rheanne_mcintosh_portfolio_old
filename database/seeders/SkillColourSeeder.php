<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SkillColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('skill_colours')->delete();

        \DB::table('skill_colours')->insert([
            'skill_id' => '4',
            'colour_id' => '7',
            'created_at' =>  Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        \DB::table('skill_colours')->insert([
            'skill_id' => '6',
            'colour_id' => '3',
            'created_at' =>  Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        \DB::table('skill_colours')->insert([
            'skill_id' => '15',
            'colour_id' => '4',
            'created_at' =>  Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        \DB::table('skill_colours')->insert([
            'skill_id' => '26',
            'colour_id' => '6',
            'created_at' =>  Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

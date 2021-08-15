<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SkillProficiencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('skill_proficiencies')->delete();

        SkillProficiency::create([
            'proficiency' => 'Novice',
        ]);

        SkillProficiency::create([
            'proficiency' => 'Beginner',
        ]);

        SkillProficiency::create([
            'proficiency' => 'Intermediate',
        ]);

        SkillProficiency::create([
            'proficiency' => 'Advanced',
        ]);

        SkillProficiency::create([
            'proficiency' => 'Expert',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SkillTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('skill_types')->delete();

        SkillType::create([
            'type' => 'Language',
        ]);

        SkillType::create([
            'type' => 'Programming Language',
        ]);

        SkillType::create([
            'type' => 'Framework',
        ]);

        SkillType::create([
            'type' => 'Software',
        ]);

        SkillType::create([
            'type' => 'Industry Knowledge',
        ]);

        SkillType::create([
            'type' => 'Technologies',
        ]);

        SkillType::create([
            'type' => 'Interpersonal Skills',
        ]);

        SkillType::create([
            'type' => 'Other',
        ]);
    }
}

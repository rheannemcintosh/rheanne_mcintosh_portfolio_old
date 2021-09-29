<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SkillType;

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
            'type' => 'Languages',
            'ordering' => 7,
            'cv_flag' => true,
        ]);

        SkillType::create([
            'type' => 'Programming Languages',
            'ordering' => 1,
            'cv_flag' => true,
        ]);

        SkillType::create([
            'type' => 'Libraries and Frameworks',
            'ordering' => 2,
            'cv_flag' => true,
        ]);

        SkillType::create([
            'type' => 'Tools and Technologies',
            'ordering' => 3,
            'cv_flag' => true,
        ]);

        SkillType::create([
            'type' => 'Industry Knowledge',
            'ordering' => 4,
            'cv_flag' => true,
        ]);

        SkillType::create([
            'type' => 'Design',
            'ordering' => 5,
            'cv_flag' => true,
        ]);

        SkillType::create([
            'type' => 'Interpersonal Skills',
            'ordering' => 8,
            'cv_flag' => false,
        ]);

        SkillType::create([
            'type' => 'Other',
            'ordering' => 9,
            'cv_flag' => false,
        ]);

        SkillType::create([
            'type' => 'Animation',
            'ordering' => 6,
            'cv_flag' => true,
        ]);
    }
}

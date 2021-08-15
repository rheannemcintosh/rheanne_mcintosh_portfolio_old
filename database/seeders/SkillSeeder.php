<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('skills')->delete();

        Skill::create([
            'name' => 'PHP',
            'skill_type' => 2,
            'skill_proficiency' => 4,
        ]);

        Skill::create([
            'name' => 'SQL',
            'skill_type' => 2,
            'skill_proficiency' => 4,
        ]);

        Skill::create([
            'name' => 'MySQL',
            'skill_type' => 6,
            'skill_proficiency' => 4,
        ]);

        Skill::create([
            'name' => 'Python',
            'skill_type' => 2,
            'skill_proficiency' => 3,
        ]);

        Skill::create([
            'name' => 'JavaScript',
            'skill_type' => 2,
            'skill_proficiency' => 3,
        ]);

        Skill::create([
            'name' => 'Java',
            'skill_type' => 2,
            'skill_proficiency' => 2,
        ]);

        Skill::create([
            'name' => 'HTML',
            'skill_type' => 2,
            'skill_proficiency' => 4,
        ]);

        Skill::create([
            'name' => 'CSS',
            'skill_type' => 2,
            'skill_proficiency' => 3,
        ]);

        Skill::create([
            'name' => 'Laravel',
            'skill_type' => 3,
            'skill_proficiency' => 4,
        ]);

        Skill::create([
            'name' => 'Git',
            'skill_type' => 5,
            'skill_proficiency' => 4,
        ]);

        Skill::create([
            'name' => 'CodeIgniter',
            'skill_type' => 3,
            'skill_proficiency' => 3,
        ]);

        Skill::create([
            'name' => 'Moodle',
            'skill_type' => 8,
            'skill_proficiency' => 2,
        ]);

        Skill::create([
            'name' => 'React JS',
            'skill_type' => 8,
            'skill_proficiency' => 3,
        ]);

        Skill::create([
            'name' => 'Flask',
            'skill_type' => 3,
            'skill_proficiency' => 2,
        ]);

        Skill::create([
            'name' => 'Agile Methodologies',
            'skill_type' => 5,
            'skill_proficiency' => 4,
        ]);

        Skill::create([
            'name' => 'WCAG',
            'skill_type' => 5,
            'skill_proficiency' => 3,
        ]);

        Skill::create([
            'name' => 'Adobe Illustrator',
            'skill_type' => 4,
            'skill_proficiency' => 3,
        ]);

        Skill::create([
            'name' => 'English',
            'skill_type' => 1,
            'skill_proficiency' => 4,
        ]);

        Skill::create([
            'name' => 'French',
            'skill_type' => 1,
            'skill_proficiency' => 2,
        ]);

        Skill::create([
            'name' => 'German',
            'skill_type' => 1,
            'skill_proficiency' => 2,
        ]);
    }
}

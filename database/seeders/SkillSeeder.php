<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

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
            'name' => 'English',
            'skill_type_id' => 1,
            'skill_proficiency_id' => 4,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'French',
            'skill_type_id' => 1,
            'skill_proficiency_id' => 2,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'German',
            'skill_type_id' => 1,
            'skill_proficiency_id' => 2,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'PHP',
            'skill_type_id' => 2,
            'skill_proficiency_id' => 4,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'SQL',
            'skill_type_id' => 2,
            'skill_proficiency_id' => 4,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'Python',
            'skill_type_id' => 2,
            'skill_proficiency_id' => 3,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'JavaScript',
            'skill_type_id' => 2,
            'skill_proficiency_id' => 3,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'Java',
            'skill_type_id' => 2,
            'skill_proficiency_id' => 2,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'HTML',
            'skill_type_id' => 2,
            'skill_proficiency_id' => 4,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'CSS',
            'skill_type_id' => 2,
            'skill_proficiency_id' => 3,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'Sass',
            'skill_type_id' => 2,
            'skill_proficiency_id' => 3,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'Laravel',
            'skill_type_id' => 3,
            'skill_proficiency_id' => 4,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'CodeIgniter',
            'skill_type_id' => 3,
            'skill_proficiency_id' => 3,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'Flask',
            'skill_type_id' => 3,
            'skill_proficiency_id' => 2,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'React JS',
            'skill_type_id' => 3,
            'skill_proficiency_id' => 3,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'MySQL',
            'skill_type_id' => 4,
            'skill_proficiency_id' => 4,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'Git',
            'skill_type_id' => 4,
            'skill_proficiency_id' => 4,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'Moodle',
            'skill_type_id' => 4,
            'skill_proficiency_id' => 2,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'Agile Methodologies',
            'skill_type_id' => 5,
            'skill_proficiency_id' => 4,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'WCAG',
            'skill_type_id' => 5,
            'skill_proficiency_id' => 3,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'Adobe Illustrator',
            'skill_type_id' => 6,
            'skill_proficiency_id' => 3,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'Adobe InDesign',
            'skill_type_id' => 6,
            'skill_proficiency_id' => 3,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'Autodesk 3DS Max',
            'skill_type_id' => 9,
            'skill_proficiency_id' => 3,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'Unity',
            'skill_type_id' => 9,
            'skill_proficiency_id' => 2,
            'cv_flag' => true,
        ]);

        Skill::create([
            'name' => 'ActionScript',
            'skill_type_id' => 9,
            'skill_proficiency_id' => 2,
            'cv_flag' => true,
        ]);
    }
}

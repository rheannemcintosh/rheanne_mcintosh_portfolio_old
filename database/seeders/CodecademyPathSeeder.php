<?php

namespace Database\Seeders;

use App\Models\CodecademyPath;
use Illuminate\Database\Seeder;

class CodecademyPathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('codecademy_paths')->delete();

        CodecademyPath::create([
            'name' => 'Build Python Web Apps with Flask',
            'path' => 'Skill Path',
            'percentage' => 8,
            'length_hours' => null,
            'cv_flag' => false,
        ]);

        CodecademyPath::create([
            'name' => 'Design Databases with PostgreSQL',
            'path' => 'Skill Path',
            'percentage' => 2,
            'length_hours' => null,
            'cv_flag' => false,
        ]);

        CodecademyPath::create([
            'name' => 'Backend Engineer',
            'path' => 'Career Path',
            'percentage' => 25,
            'length_hours' => 350,
            'cv_flag' => true,
        ]);

        CodecademyPath::create([
            'name' => 'Learn React',
            'path' => 'Course',
            'percentage' => 14,
            'length_hours' => 20,
            'cv_flag' => true,
        ]);

        CodecademyPath::create([
            'name' => 'Learn JavaScript',
            'path' => 'Course',
            'percentage' => 100,
            'length_hours' => 20,
            'cv_flag' => true,
        ]);

        CodecademyPath::create([
            'name' => 'Create an Advanced Web App with React and Redux',
            'path' => 'Skill Path',
            'percentage' => 10,
            'length_hours' => null,
            'cv_flag' => false,
        ]);
    }
}

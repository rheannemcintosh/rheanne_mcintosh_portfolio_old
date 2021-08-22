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
            'percentage' => 4,
        ]);

        CodecademyPath::create([
            'name' => 'Design Databases with PostgreSQL',
            'path' => 'Skill Path',
            'percentage' => 5,
        ]);

        CodecademyPath::create([
            'name' => 'Backend Engineer',
            'path' => 'Career Path',
            'percentage' => 0,
        ]);
    }
}

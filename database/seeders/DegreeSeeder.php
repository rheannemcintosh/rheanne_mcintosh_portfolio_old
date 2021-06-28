<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Degree;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('degrees')->delete();

        Degree::create([
            'university_name' => 'Robert Gordon University',
            'degree_name'     => 'Computing (Graphics and Animation)',
            'degree_type'     => 'BSc (Hons)',
            'degree_classification' => '1st Class',
            'start_date' => '2014-09-01 00:00:00',
            'end_date' => '2018-06-01 00:00:00',
        ]);
    }
}

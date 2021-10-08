<?php

namespace Database\Seeders;

use App\Models\ExperienceEmployer;
use Illuminate\Database\Seeder;

class ExperienceEmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('experience_employers')->delete();

        ExperienceEmployer::create([
        'employer_name' => 'Visualsoft',
        'start_date' => '2021-06-01 00:00:00',
        'end_date' => null,
        'location' => 'Remote (Stockton-on-Tees)',
        'country' => 'UK',
        'cv_flag' => true,
        'example' => false,
        ]);

        ExperienceEmployer::create([
        'employer_name' => 'University of Aberdeen',
        'start_date' => '2019-07-01 00:00:00',
        'end_date' => '2021-05-27 00:00:00',
        'location' => 'Polwarth, Aberdeen',
        'country' => 'UK',
        'cv_flag' => true,
        'example' => false,
        ]);

        ExperienceEmployer::create([
        'employer_name' => 'Sainsburys',
        'start_date' => '2014-09-01 00:00:00',
        'end_date' => '2014-09-01 00:00:00',
        'location' => 'Garthdee, Aberdeen',
        'country' => 'UK',
        'cv_flag' => false,
        'example' => false,
        ]);

        ExperienceEmployer::create([
        'employer_name' => 'Stompers Nursery',
        'start_date' => '2014-09-01 00:00:00',
        'end_date' => '2014-09-01 00:00:00',
        'location' => 'Bridge of Don, Aberdeen',
        'country' => 'UK',
        'cv_flag' => false,
        'example' => false,
        ]);

        ExperienceEmployer::create([
        'employer_name' => 'Techno-Play',
        'start_date' => '2014-09-01 00:00:00',
        'end_date' => '2014-09-01 00:00:00',
        'location' => 'Bridge of Don, Aberdeen',
        'country' => 'UK',
        'cv_flag' => false,
        'example' => false,
        ]);

        ExperienceEmployer::create([
        'employer_name' => 'Kapering Kidz',
        'start_date' => '2014-09-01 00:00:00',
        'end_date' => '2014-09-01 00:00:00',
        'location' => 'Bridge of Don, Aberdeen',
        'country' => 'UK',
        'cv_flag' => false,
        'example' => false,
        ]);
    }
}

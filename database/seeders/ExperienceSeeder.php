<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('experiences')->delete();

        Experience::create([
          'experience_employer_id' => 1,
          'role' => 'Developer (Product Discovery)',
          'employment_type' => 'Full Time',
          'start_date' => '2021-06-01 00:00:00',
          'end_date' => null,
          'cv_flag' => true,
          'example' => false,
        ]);

        Experience::create([
          'experience_employer_id' => 2,
          'role' => 'Junior Software Developer',
          'employment_type' => 'Full Time',
          'start_date' => '2019-07-01 00:00:00',
          'end_date' => '2021-05-27 00:00:00',
          'cv_flag' => true,
          'example' => false,
        ]);

        Experience::create([
          'experience_employer_id' => 3,
          'role' => 'Price Controller',
          'employment_type' => 'Full Time',
          'start_date' => '2001-01-01 00:00:00',
          'end_date' => '2001-01-01 00:00:00',
          'cv_flag' => false,
          'example' => false,
        ]);

        Experience::create([
          'experience_employer_id' => 3,
          'role' => 'PR Ambassador',
          'employment_type' => 'Full Time',
          'start_date' => '2001-01-01 00:00:00',
          'end_date' => '2001-01-01 00:00:00',
          'cv_flag' => false,
          'example' => false,
        ]);

        Experience::create([
          'experience_employer_id' => 3,
          'role' => 'Personal Assistant',
          'employment_type' => 'Full Time',
          'start_date' => '2001-01-01 00:00:00',
          'end_date' => '2001-01-01 00:00:00',
          'cv_flag' => false,
          'example' => false,
        ]);

        Experience::create([
          'experience_employer_id' => 3,
          'role' => 'Customer Service Team Leader',
          'employment_type' => 'Part Time',
          'start_date' => '2001-01-01 00:00:00',
          'end_date' => '2001-01-01 00:00:00',
          'cv_flag' => false,
          'example' => false,
        ]);

        Experience::create([
          'experience_employer_id' => 3,
          'role' => 'Customer Service Assistant',
          'employment_type' => 'Part Time',
          'start_date' => '2001-01-01 00:00:00',
          'end_date' => '2001-01-01 00:00:00',
          'cv_flag' => false,
          'example' => false,
        ]);

        Experience::create([
          'experience_employer_id' => 4,
          'role' => 'Childcare Worker',
          'employment_type' => 'Part Time',
          'start_date' => '2001-01-01 00:00:00',
          'end_date' => '2001-01-01 00:00:00',
          'cv_flag' => false,
          'example' => false,
        ]);

        Experience::create([
          'experience_employer_id' => 5,
          'role' => 'Party Host',
          'employment_type' => 'Part Time',
          'start_date' => '2001-01-01 00:00:00',
          'end_date' => '2001-01-01 00:00:00',
          'cv_flag' => false,
          'example' => false,
        ]);

        Experience::create([
          'experience_employer_id' => 6,
          'role' => 'Childcare Assistant',
          'employment_type' => 'Part Time',
          'start_date' => '2001-01-01 00:00:00',
          'end_date' => '2001-01-01 00:00:00',
          'cv_flag' => false,
          'example' => false,
        ]);







    }
}
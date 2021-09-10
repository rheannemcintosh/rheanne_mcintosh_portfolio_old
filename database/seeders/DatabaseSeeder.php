<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ExperienceEmployerSeeder::class,
            ExperienceSeeder::class,
            ExperienceDetailSeeder::class,
            DegreeSeeder::class,
            DegreeModuleSeeder::class,
            CertificateSeeder::class,
            CodecademyPathSeeder::class,
            TreehouseTopicSeeder::class,
            TreehouseTrackSeeder::class,
            ZTMCourseSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\TreehouseActivity;
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
            BlogPostSeeder::class,
            ColourSeeder::class,
            CertificateSeeder::class,
            CodecademyPathSeeder::class,
            DegreeSeeder::class,
            DegreeModuleSeeder::class,
            ExperienceEmployerSeeder::class,
            ExperienceSeeder::class,
            ExperienceDetailSeeder::class,
            LinkTypeSeeder::class,
            SkillProficiencySeeder::class,
            SkillTypeSeeder::class,
            SkillSeeder::class,
            TreehouseTopicSeeder::class,
            TreehouseTrackSeeder::class,
            TreehouseActivitySeeder::class,
            ZTMCourseSeeder::class,
            PortfolioProjectSeeder::class,
        ]);
    }
}

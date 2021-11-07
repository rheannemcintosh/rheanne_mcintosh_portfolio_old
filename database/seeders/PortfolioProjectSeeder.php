<?php

namespace Database\Seeders;

use App\Models\PortfolioProject;
use Illuminate\Database\Seeder;

class PortfolioProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('portfolio')->delete();

        PortfolioProject::create([
            'name' => 'Rheanne McIntosh Portfolio',
            'colour_id' => 6,
            'skill_id' => 4,
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/rheanne_mcintosh_portfolio',
            'url' => null,
        ]);

        PortfolioProject::create([
            'name' => 'London Cocktail Week Scraper',
            'colour_id' => 7,
            'skill_id' => 6,
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/london-cocktail-week-scraper',
            'url' => null,
        ]);

        PortfolioProject::create([
            'name' => 'JustClothing',
            'colour_id' => 3,
            'skill_id' => 15,
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/JustClothing',
            'url' => null,
        ]);

        PortfolioProject::create([
            'name' => 'Gif Finder',
            'colour_id' => 9,
            'skill_id' => 15,
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/th-gif-finder',
            'url' => null,
        ]);

        PortfolioProject::create([
            'name' => 'JustSnecks',
            'colour_id' => 3,
            'skill_id' => 4,
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/JustSnecks',
            'url' => null,
        ]);

        PortfolioProject::create([
            'name' => 'Shape Maker',
            'colour_id' => 4,
            'skill_id' => 26,
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/css-playground',
            'url' => null,
        ]);
    }
}

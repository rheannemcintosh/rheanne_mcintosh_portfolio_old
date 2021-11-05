<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('portfolio')->delete();

        Portfolio::create([
            'name' => 'Rheanne McIntosh Portfolio',
            'language' => 'PHP',
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/rheanne_mcintosh_portfolio',
            'url' => null,
        ]);

        Portfolio::create([
            'name' => 'London Cocktail Week Scraper',
            'language' => 'Python',
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/london-cocktail-week-scraper',
            'url' => null,
        ]);

        Portfolio::create([
            'name' => 'JustClothing',
            'language' => 'React',
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/JustClothing',
            'url' => null,
        ]);

        Portfolio::create([
            'name' => 'Gif Finder',
            'language' => 'React',
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/th-gif-finder',
            'url' => null,
        ]);

        Portfolio::create([
            'name' => 'JustSnecks',
            'language' => 'PHP',
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/JustSnecks',
            'url' => null,
        ]);

        Portfolio::create([
            'name' => 'Shape Maker',
            'language' => 'Vue',
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/css-playground',
            'url' => null,
        ]);
    }
}

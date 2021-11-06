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
            'colour' => 'bg-rmBlue-dark',
            'language' => 'PHP',
            'language_colour' => 'bg-rmTeal',
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/rheanne_mcintosh_portfolio',
            'url' => null,
        ]);

        Portfolio::create([
            'name' => 'London Cocktail Week Scraper',
            'colour' => 'bg-rmTeal',
            'language' => 'Python',
            'language_colour' => 'bg-rmYellow',
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/london-cocktail-week-scraper',
            'url' => null,
        ]);

        Portfolio::create([
            'name' => 'JustClothing',
            'colour' => 'bg-rmYellow',
            'language' => 'React',
            'language_colour' => 'bg-rmBlue-light',
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/JustClothing',
            'url' => null,
        ]);

        Portfolio::create([
            'name' => 'Gif Finder',
            'colour' => 'bg-rmTeal-dark',
            'language' => 'React',
            'language_colour' => 'bg-rmBlue-light',
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/th-gif-finder',
            'url' => null,
        ]);

        Portfolio::create([
            'name' => 'JustSnecks',
            'colour' => 'bg-rmYellow',
            'language' => 'PHP',
            'language_colour' => 'bg-rmTeal',
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/JustSnecks',
            'url' => null,
        ]);

        Portfolio::create([
            'name' => 'Shape Maker',
            'colour' => 'bg-rmBlue',
            'language' => 'Vue',
            'language_colour' => 'bg-rmBlue-dark',
            'image_path' => null,
            'github_url' => 'https://github.com/rheannemcintosh/css-playground',
            'url' => null,
        ]);
    }
}

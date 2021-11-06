<?php

namespace Database\Seeders;

use App\Models\Colour;
use Illuminate\Database\Seeder;

class ColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('colours')->delete();

        Colour::create([
            'colour' => 'rmWhite',
            'hex' => '#F7FAFC',
        ]);

        Colour::create([
            'colour' => 'rmGrey',
            'hex' => '#EAEAEA',
        ]);

        Colour::create([
            'colour' => 'rmYellow',
            'hex' => '#DBAB3A',
        ]);

        Colour::create([
            'colour' => 'rmBlue',
            'hex' => '#021F4B',
        ]);

        Colour::create([
            'colour' => 'rmBlue-light',
            'hex' => '#06396C',
        ]);

        Colour::create([
            'colour' => 'rmBlue-dark',
            'hex' => '#0B1928',
        ]);

        Colour::create([
            'colour' => 'rmTeal',
            'hex' => '#021F4B',
        ]);

        Colour::create([
            'colour' => 'rmTeal-light',
            'hex' => '#015A68',
        ]);

        Colour::create([
            'colour' => 'rmTeal-dark',
            'hex' => '#012C37',
        ]);
    }
}

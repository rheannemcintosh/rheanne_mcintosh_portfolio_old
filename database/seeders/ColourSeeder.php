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
            'colour' => 'bg-rmWhite',
            'hex' => '#F7FAFC',
        ]);

        Colour::create([
            'colour' => 'bg-rmGrey',
            'hex' => '#EAEAEA',
        ]);

        Colour::create([
            'colour' => 'bg-rmYellow',
            'hex' => '#DBAB3A',
        ]);

        Colour::create([
            'colour' => 'bg-rmBlue',
            'hex' => '#021F4B',
        ]);

        Colour::create([
            'colour' => 'bg-rmBlue-light',
            'hex' => '#06396C',
        ]);

        Colour::create([
            'colour' => 'bg-rmBlue-dark',
            'hex' => '#0B1928',
        ]);

        Colour::create([
            'colour' => 'bg-rmTeal',
            'hex' => '#021F4B',
        ]);

        Colour::create([
            'colour' => 'bg-rmTeal-light',
            'hex' => '#015A68',
        ]);

        Colour::create([
            'colour' => 'bg-rmTeal-dark',
            'hex' => '#012C37',
        ]);
    }
}

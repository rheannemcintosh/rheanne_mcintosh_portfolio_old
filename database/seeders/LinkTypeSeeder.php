<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LinkType;

class LinkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('link_types')->delete();

        LinkType::create([
            'type' => 'Social Media',
        ]);
    }
}

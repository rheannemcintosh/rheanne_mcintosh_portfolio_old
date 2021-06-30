<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module;

class DegreeModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('degree_modules')->delete();

        Module::create([
            'degree_id' => 1,
            'name' => '3D Animation',
            'description' => '',
            'grade' => 'A',
            'stage' => '4',
        ]);

        Module::create([
            'degree_id' => 1,
            'name' => 'Audio and Visual Production',
            'description' => '',
            'grade' => 'A',
            'stage' => '4',
        ]);

        Module::create([
            'degree_id' => 1,
            'name' => 'Human Computer Interaction',
            'description' => '',
            'grade' => 'A',
            'stage' => '4',
        ]);

        Module::create([
            'degree_id' => 1,
            'name' => 'Games Development',
            'description' => '',
            'grade' => 'A',
            'stage' => '4',
        ]);

        Module::create([
            'degree_id' => 1,
            'name' => 'Honours Individual Project',
            'description' => '',
            'grade' => 'B',
            'stage' => '4',
        ]);

        Module::create([
            'degree_id' => 1,
            'name' => 'Advanced Multimedia Componenet Design',
            'description' => '',
            'grade' => 'A',
            'stage' => '4',
        ]);
    }
}

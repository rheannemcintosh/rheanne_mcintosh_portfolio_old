<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TreehouseTopic;

class TreehouseTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('treehouse_topics')->delete();

        TreehouseTopic::create([
            'name'   => 'JavaScript',
            'points' => 6133
        ]);

        TreehouseTopic::create([
            'name'   => 'PHP',
            'points' => 4892
        ]);

        TreehouseTopic::create([
            'name'   => 'Python',
            'points' => 4286
        ]);

        TreehouseTopic::create([
            'name'   => 'HTML',
            'points' => 2211
        ]);

        TreehouseTopic::create([
            'name'   => 'Development Tools',
            'points' => 1705
        ]);

        TreehouseTopic::create([
            'name'   => 'C#',
            'points' => 1604
        ]);

        TreehouseTopic::create([
            'name'   => 'Databases',
            'points' => 1543
        ]);

        TreehouseTopic::create([
            'name'   => 'Java',
            'points' => 1464
        ]);

        TreehouseTopic::create([
            'name'   => 'CSS',
            'points' => 1370
        ]);

        TreehouseTopic::create([
            'name'   => 'Android',
            'points' => 996
        ]);

        TreehouseTopic::create([
            'name'   => 'Digital Literacy',
            'points' => 502
        ]);

        TreehouseTopic::create([
            'name'   => 'Design',
            'points' => 366
        ]);

        TreehouseTopic::create([
            'name'   => '21st Century Skills',
            'points' => 243
        ]);

        TreehouseTopic::create([
            'name'   => 'Go',
            'points' => 165
        ]);

        TreehouseTopic::create([
            'name'   => 'Equity, Diversity, and Inclusion',
            'points' => 115
        ]);

        TreehouseTopic::create([
            'name'   => 'APIs',
            'points' => 60
        ]);

        TreehouseTopic::create([
            'name'   => 'Learning Resources',
            'points' => 6
        ]);

        TreehouseTopic::create([
            'name'   => 'Security',
            'points' => 6
        ]);

        TreehouseTopic::create([
            'name'   => 'Computer Science',
            'points' => 0
        ]);

        TreehouseTopic::create([
            'name'   => 'Machine Learning',
            'points' => 0
        ]);

        TreehouseTopic::create([
            'name'   => 'Quality Assurance',
            'points' => 0
        ]);

        TreehouseTopic::create([
            'name'   => 'Data Analysis',
            'points' => 0
        ]);

        TreehouseTopic::create([
            'name'   => 'Business',
            'points' => 0
        ]);

        TreehouseTopic::create([
            'name'   => 'Ruby',
            'points' => 0
        ]);
    }
}

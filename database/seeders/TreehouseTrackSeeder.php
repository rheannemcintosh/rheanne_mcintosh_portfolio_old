<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TreehouseTrack;

class TreehouseTrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('treehouse_tracks')->delete();

        TreehouseTrack::create([
            'track'   => 'Beginning JavaScript',
            'treehouse_topic_id' => 1,
            'percentage' => 100,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Learn React',
            'treehouse_topic_id' => 1,
            'percentage' => 100,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Full Stack JavaScript',
            'treehouse_topic_id' => 1,
            'percentage' => 100,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Beginning PHP',
            'treehouse_topic_id' => 2,
            'percentage' => 100,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Intermediate PHP',
            'treehouse_topic_id' => 2,
            'percentage' => 100,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Object-Oriented PHP',
            'treehouse_topic_id' => 2,
            'percentage' => 100,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Beginning Python',
            'treehouse_topic_id' => 3,
            'percentage' => 100,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Intermediate Python',
            'treehouse_topic_id' => 3,
            'percentage' => 100,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Learn HTML',
            'treehouse_topic_id' => 4,
            'percentage' => 100,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Beginning SQL',
            'treehouse_topic_id' => 7,
            'percentage' => 100,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Beginning Java',
            'treehouse_topic_id' => 8,
            'percentage' => 100,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Digital Literacy',
            'treehouse_topic_id' => 11,
            'percentage' => 100,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Full Stack Foundations',
            'treehouse_topic_id' => 11,
            'percentage' => 76,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'STEM Learning - for Kids!',
            'treehouse_topic_id' => 19,
            'percentage' => 100,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Exploring Flask with Peewee',
            'treehouse_topic_id' => 3,
            'percentage' => 86,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Exploring Flask with SQLAlchemy',
            'treehouse_topic_id' => 3,
            'percentage' => 66,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Beginning Android',
            'treehouse_topic_id' => 10,
            'percentage' => 49,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Front End Web Development',
            'treehouse_topic_id' => 1,
            'percentage' => 61,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Beginning C#',
            'treehouse_topic_id' => 6,
            'percentage' => 57,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Java Web Development',
            'treehouse_topic_id' => 8,
            'percentage' => 22,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Beginning Data Science',
            'treehouse_topic_id' => 22,
            'percentage' => 47,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Start Your Coding Journey',
            'treehouse_topic_id' => 5,
            'percentage' => 89,
            'cv_flag' => false,
        ]);

    }
}

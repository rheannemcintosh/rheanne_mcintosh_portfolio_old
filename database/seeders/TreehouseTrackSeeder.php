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
            'length_hours' => 19,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Learn React',
            'treehouse_topic_id' => 1,
            'percentage' => 100,
            'length_hours' => 9,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Full Stack JavaScript',
            'treehouse_topic_id' => 1,
            'percentage' => 100,
            'length_hours' => 44,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Beginning PHP',
            'treehouse_topic_id' => 2,
            'percentage' => 100,
            'length_hours' => 21,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Intermediate PHP',
            'treehouse_topic_id' => 2,
            'percentage' => 100,
            'length_hours' => 16,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Object-Oriented PHP',
            'treehouse_topic_id' => 2,
            'percentage' => 100,
            'length_hours' => 13,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Beginning Python',
            'treehouse_topic_id' => 3,
            'percentage' => 100,
            'length_hours' => 14,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Intermediate Python',
            'treehouse_topic_id' => 3,
            'percentage' => 100,
            'length_hours' => 10,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Learn HTML',
            'treehouse_topic_id' => 4,
            'percentage' => 100,
            'length_hours' => 11,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Beginning SQL',
            'treehouse_topic_id' => 7,
            'percentage' => 100,
            'length_hours' => 10,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Beginning Java',
            'treehouse_topic_id' => 8,
            'percentage' => 100,
            'length_hours' => 8,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Digital Literacy',
            'treehouse_topic_id' => 11,
            'percentage' => 100,
            'length_hours' => 12,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Full Stack Foundations',
            'treehouse_topic_id' => 11,
            'percentage' => 76,
            'length_hours' => 38,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'STEM Learning - for Kids!',
            'treehouse_topic_id' => 19,
            'percentage' => 100,
            'length_hours' => 5,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Exploring Flask with Peewee',
            'treehouse_topic_id' => 3,
            'percentage' => 100,
            'length_hours' => 18,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Exploring Flask with SQLAlchemy',
            'treehouse_topic_id' => 3,
            'percentage' => 66,
            'length_hours' => 16,
            'cv_flag' => true,
        ]);

        TreehouseTrack::create([
            'track'   => 'Beginning Android',
            'treehouse_topic_id' => 10,
            'percentage' => 49,
            'length_hours' => 11,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Front End Web Development',
            'treehouse_topic_id' => 1,
            'percentage' => 61,
            'length_hours' => 56,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Beginning C#',
            'treehouse_topic_id' => 6,
            'percentage' => 57,
            'length_hours' => 17,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Java Web Development',
            'treehouse_topic_id' => 8,
            'percentage' => 22,
            'length_hours' => 34,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Beginning Data Science',
            'treehouse_topic_id' => 22,
            'percentage' => 47,
            'length_hours' => 25,
            'cv_flag' => false,
        ]);

        TreehouseTrack::create([
            'track'   => 'Start Your Coding Journey',
            'treehouse_topic_id' => 5,
            'percentage' => 89,
            'length_hours' => 28,
            'cv_flag' => false,
        ]);
    }
}

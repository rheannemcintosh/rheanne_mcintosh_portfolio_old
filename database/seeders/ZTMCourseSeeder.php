<?php

namespace Database\Seeders;

use App\Models\ZTMCourse;
use Illuminate\Database\Seeder;

class ZTMCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ztm_courses')->delete();

        ZTMCourse::create([
            'course' => 'Complete React Native',
            'description' =>
                'Master React Native for iOS and Android Mobile App Development using JavaScript.
                 Build a modern e-commerce mobile app!'
            ,
            'instructor' => 'Andrei Neagoie / Mo Binni',
            'length_hours' => '28',
            'percentage' => 0,
            'cv_flag' => false,
        ]);

        ZTMCourse::create([
            'course' => 'Complete React Developer',
            'description' =>
                'Become a Senior React Developer! 
                Build a massive E-commerce app with Redux, Hooks, GraphQL, ContextAPI, Stripe, Firebase.'
            ,
            'instructor' => 'Andrei Neagoie / Yihua Zhang',
            'length_hours' => '42',
            'percentage' => 40,
            'cv_flag' => true,
        ]);

        ZTMCourse::create([
            'course' => 'Complete Python Developer',
            'description' =>
                'How to become a Python 3 Developer and get hired! Build 12+ projects, 
                learn Web Development, Machine Learning + more!'
            ,
            'instructor' => 'Andrei Neagoie',
            'length_hours' => '30.5',
            'percentage' => 25,
            'cv_flag' => true,
        ]);

        ZTMCourse::create([
            'course' => 'The Complete Web Developer',
            'description' =>
                'Learn to code and become a Web Developer in 2021 with HTML, 
                CSS, Javascript, React, Node.js, Machine Learning & more!'
            ,
            'instructor' => 'Andrei Neagoie',
            'length_hours' => '37',
            'percentage' => 25,
            'cv_flag' => true,
        ]);

        ZTMCourse::create([
            'course' => 'Complete Vue Mastery',
            'description' =>
                'Ultimate guide to Vue 3 Development! Build large scale applications
                and deploy to production. Go from Zero To Mastery!'
            ,
            'instructor' => 'Andrei Neagoie / Luis Ramirez Jr',
            'length_hours' => '30.5',
            'percentage' => 25,
            'cv_flag' => true,
        ]);
    }
}

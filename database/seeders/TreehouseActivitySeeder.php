<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TreehouseActivity;

class TreehouseActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('treehouse_activities')->delete();

        TreehouseActivity::create([
            'name' => 'Flask REST API',
            'activity_type' => 'Course',
            'percentage' => 30,
            'year' => 2021,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'A Social Network with Flask',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Flask with SQLAlchemy Basics',
            'activity_type' => 'Course',
            'percentage' => 33,
            'year' => 2021,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'React by Example',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'JavaScript Quickstart',
            'activity_type' => 'Course',
            'percentage' => 14,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Build a REST API with Laravel',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Ethical Design',
            'activity_type' => 'Course',
            'percentage' => 26,
            'year' => 2021,
            'treehouse_topic_id' => 13,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Getting Started with PHP Unit Testing',
            'activity_type' => 'Course',
            'percentage' => 25,
            'year' => 2021,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Build a Basic PHP Website',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Deploying a React App',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'React Hooks',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Data Fetching in React',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Using Treehouse Workspaces',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 5,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'React Context API',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'React Router 4 Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'What\'s New in React 16',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Using Create React App',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'React Components',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Intro to Gender & Sexuality',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 15,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Go Language Overview',
            'activity_type' => 'Course',
            'percentage' => 70,
            'year' => 2021,
            'treehouse_topic_id' => 14,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'React Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Object-Oriented JavaScript: Challenge',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'How To Learn',
            'activity_type' => 'Video',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 17,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Build a Simple Dynamic Site with Node.js',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Treehouse Club: JavaScript',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Treehouse Club: CSS',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 9,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Using Sequelize ORM With Express',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Treehouse Student Orientation',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 17,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Treehouse Club: HTML',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 4,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Interfaces in Java',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 8,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Java Maps',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 8,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Generics in Java',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 8,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Using SQL ORMs with Node.js',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Inheritance in Java',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 8,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Using npm as a Task Runner',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'npm Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'REST APIs with Express',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Jupyter Notebooks',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Introduction to Anaconda',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Debug Node Applications with Visual Studio Code',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Asynchronous Code in Express',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Express Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Responsive Design',
            'activity_type' => 'Workshop',
            'percentage' => 14,
            'year' => 2021,
            'treehouse_topic_id' => 12,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'PHP Standards and Best Practices',
            'activity_type' => 'Course',
            'percentage' => 35,
            'year' => 2021,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Using Cookies and JWTs for Secure Authentication',
            'activity_type' => 'Course',
            'percentage' => 21,
            'year' => 2021,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Working with $_GET and $_POST in PHP',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Computer Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 11,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Understanding MVC',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 5,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Laravel Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Imposter Syndrome',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 13,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Java Lists',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 8,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'How to Give and Receive Feedback',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 13,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Build a Social Network with Flask',
            'activity_type' => 'Course',
            'percentage' => 73,
            'year' => 2021,
            'treehouse_topic_id' => 3,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'CSS Selectors Quickstart',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'CSS Selectors',
            'activity_type' => 'Course',
            'percentage' => 70,
            'year' => 2021,
            'treehouse_topic_id' => 9,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Defining Variables with let and const',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Java Arrays',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 8,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'The Thing About Strings',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 8,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Java Objects',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2021,
            'treehouse_topic_id' => 8,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Information Architecture',
            'activity_type' => 'Course',
            'percentage' => 41,
            'year' => 2021,
            'treehouse_topic_id' => 12,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Introduction to Wireframing',
            'activity_type' => 'Course',
            'percentage' => 80,
            'year' => 2020,
            'treehouse_topic_id' => 12,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Node.js Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Structuring Your Code',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Understanding Closures in JavaScript',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Object-Oriented JavaScript',
            'activity_type' => 'Course',
            'percentage' => 96,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Exploring JavaScript Conditionals',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Working with the Fetch API',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Asynchronous Programming with JavaScript',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Bootstrap Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 9,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'HTTP Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 5,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'AJAX Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'CSS Layout Basics',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 9,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'Accessibility For Web Developers',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 4,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'DOM Scripting By Example',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Flask Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'JavaScript and the DOM (Retiring)',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Setting Up a Local Python Environment (Windows)',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Practice Basic Math Calculations in Python',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Functional Python',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Python Type Hinting',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Python Decorators',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'The Landscape of JavaScript',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Python Testing',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Python Comprehensions',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'SVG Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 4,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'JavaScript Objects',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Using Databases in Python',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'JavaScript Arrays',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'CSV and JSON in Python',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'HTML Video and Audio',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 4,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Python File I/O',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Regular Expressions in Python',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'JavaScript Loops',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'JavaScript Functions',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'JavaScript Numbers',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'JavaScript Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'HTML Tables',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 4,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'HTML Forms',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 4,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Dates and Times in Python',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Object-Oriented Python',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Write Better Python',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Understanding Dunder Main (__main__)',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Introducing Dictionaries',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Python Sequences',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Functions, Packing, and Unpacking',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Introducing Tuples',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Introducing Lists',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Python Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2020,
            'treehouse_topic_id' => 3,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Creating and Modifying Database Tables',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 7,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'How the Web Works',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 11,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'How the Internet Works',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 11,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Debugging a Web App with Chrome Dev Tools',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => null,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'Introducing JavaScript',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 1,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Web Accessibility Compliance',
            'activity_type' => 'Course',
            'percentage' => 62,
            'year' => 2019,
            'treehouse_topic_id' => 5,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Introduction to the Terminal',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 5,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'AWS with S3',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 5,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Templating with Twig',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Markdown Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 5,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Environment Variables with PHP',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Introducing the Atom Text Editor',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 5,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Introducing the VS Code Text Editor',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 5,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'SQLite from the Command Line',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 7,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Using the Github API with PHP',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Practice Including PHP with HTML',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Practice PHP if/else Statements',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Practice Hashing Passwords in PHP',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Windows: Local PHP Dev Environment',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Introduction to Application Security',
            'activity_type' => 'Course',
            'percentage' => 5,
            'year' => 2019,
            'treehouse_topic_id' => 18,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Introduction to User Authentication in PHP',
            'activity_type' => 'Course',
            'percentage' => 20,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Introducing MVC Frameworks in PHP',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Dependency Management with Composer',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Designing Interfaces in PHP',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Introduction to Git',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 5,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Git Branches and Merging',
            'activity_type' => 'Course',
            'percentage' => 11,
            'year' => 2019,
            'treehouse_topic_id' => 5,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Github Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 5,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Extending Object-Oriented PHP',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Laravel 4 Basics',
            'activity_type' => 'Course',
            'percentage' => 14,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'Basic Exception Handling with PHP',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Introduction to PHP7',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Object-Oriented PHP Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Build a REST API with PHP',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Introduction to REST APIs',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 5,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'File Handling with PHP',
            'activity_type' => 'Course',
            'percentage' => 94,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'CRUD Operations with PHP',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Browser Persistent Data with PHP',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Integrating PHP with Databases',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Common Table Expressions Using WITH',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 7,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'SQL Reporting by Example',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 7,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Querying Relational Databases',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 7,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Reporting with SQL',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 7,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Modifying Data with SQL',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 7,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Practice Column Selection and Aliasing with SQL',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 7,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Practice Simple WHERE Clauses with SQL',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 7,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'SQL Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 7,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Intermediate C#',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 6,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Practice PHP Number Variables',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Building Websites with PHP',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'Practice PHP String Manipulation',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'C# Objects',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 6,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Visual Design Foundations',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 12,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'C# Collections',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 6,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'C# Basics (Retired)',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 6,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'CSS Basics (2014)',
            'activity_type' => 'Course',
            'percentage' => 97,
            'year' => 2019,
            'treehouse_topic_id' => 1,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'How to Build a WordPress Plugin',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'The WordPress Template Hierarchy',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'Customizing the WordPress Admin Area',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'WordPress Hooks - Actions and Filters',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'HTML Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 4,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'WordPress Theme Development',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2019,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'Java Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2018,
            'treehouse_topic_id' => 8,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Practice Input and Output in Java',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2018,
            'treehouse_topic_id' => 8,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'PHP for WordPress',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2018,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'Migrating for WordPress',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2018,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'Installing WordPress Locally',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2018,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'Introduction to HTML and CSS',
            'activity_type' => 'Course',
            'percentage' => 44,
            'year' => 2018,
            'treehouse_topic_id' => 4,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Build a Basic PHP Website (2018)',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2018,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'Basic Error Handling in PHP',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2018,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'MAC: Local PHP Dev Environment',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2018,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'PHP Functions',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2018,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'PHP Arrays and Control Structures',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2018,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'PHP Basics',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2018,
            'treehouse_topic_id' => 2,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Android Lists and Adapters (2015)',
            'activity_type' => null,
            'percentage' => 2,
            'year' => 2018,
            'treehouse_topic_id' => 10,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'Build a Weather App (2015)',
            'activity_type' => null,
            'percentage' => 83,
            'year' => 2018,
            'treehouse_topic_id' => null,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'How to Make a Video Game',
            'activity_type' => null,
            'percentage' => 7,
            'year' => 2018,
            'treehouse_topic_id' => null,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'GitHub and Android Studio',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2018,
            'treehouse_topic_id' => 10,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Create an Options Menu',
            'activity_type' => 'Workshop',
            'percentage' => 20,
            'year' => 2018,
            'treehouse_topic_id' => 10,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Git Basics',
            'activity_type' => null,
            'percentage' => 2,
            'year' => 2018,
            'treehouse_topic_id' => null,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'Build an Interactive Story App',
            'activity_type' => 'Course',
            'percentage' => 51,
            'year' => 2017,
            'treehouse_topic_id' => 10,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Getting Started with the Android Emulator',
            'activity_type' => 'Workshop',
            'percentage' => 100,
            'year' => 2017,
            'treehouse_topic_id' => 10,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Build a Simple Android App with Java',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2017,
            'treehouse_topic_id' => 10,
            'out_of_date' => false,
        ]);

        TreehouseActivity::create([
            'name' => 'Build a Website with WordPress',
            'activity_type' => null,
            'percentage' => 83,
            'year' => 2017,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'Local WordPress Development',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2017,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'WordPress User Roles',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2017,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'WordPress Basics',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2017,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'How to Install WordPress on Your Computer',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2017,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'What Is WordPress?',
            'activity_type' => null,
            'percentage' => 100,
            'year' => 2017,
            'treehouse_topic_id' => 2,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'How to Make a Website',
            'activity_type' => null,
            'percentage' => 55,
            'year' => 2016,
            'treehouse_topic_id' => null,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'JavaScript Foundations',
            'activity_type' => null,
            'percentage' => 1,
            'year' => 2014,
            'treehouse_topic_id' => 1,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'The Treehouse Show (2012-2015)',
            'activity_type' => 'Show',
            'percentage' => 100,
            'year' => '2013',
            'treehouse_topic_id' => null,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'HTML',
            'activity_type' => 'Course',
            'percentage' => 48,
            'year' => 2013,
            'treehouse_topic_id' => 4,
            'out_of_date' => true,
        ]);

        TreehouseActivity::create([
            'name' => 'Build a Simple Website',
            'activity_type' => 'Course',
            'percentage' => 100,
            'year' => 2013,
            'treehouse_topic_id' => null,
            'out_of_date' => true,
        ]);
    }
}

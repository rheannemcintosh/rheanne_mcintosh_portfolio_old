<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('blog_posts')->delete();

        BlogPost::create([
            'title' => 'Hello World!',
            'content' => '<p class="mb-4">Hello everyone! This is going to be a quick introductory blog post for me to get used
                                to writing! I wasn\'t originally going to add a blog area to this site, but I thought
                                it might provide useful. If there is anything you\'d like to hear me talk about please
                                let me know!
                            </p>
                            <p class="mb-4">
                                I\'m Rheanne, a 25-year-old Software Developer from Aberdeen, Scotland. I recently
                                moved to London in the summer and I am keen to make some tech friends in the area!
                                I originally developed my passion for computers back in school, from my very first
                                Scratch program to Visual Basic applications and creating 3D models with Autodesk
                                Inventor. From school, I went on to study Computing (Graphics and Animation) at Robert
                                Gordon University. At uni, I realised I preferred the Software Development side of
                                things, and kept the more artistic side as a hobby. After leaving, I decided to
                                learn PHP by myself (mainly using Treehouse). I then landed myself a role as a Junior
                                Software Developer at the University of Aberdeen. This involved developing new
                                applications using Laravel and maintaining VLE\'s built using CodeIgniter. After
                                spending more time working from home due to Covid than in the office, I started work at
                                Visualsoft Ltd. in Newcastle as a full-time remote worker working in the
                                Product Discovery team, helping to maintain a large e-commerce application.
                            </p>
                            <p class="mb-4">
                                Although I predominantly use PHP, Laravel and SQL in my day to day life, I\'m currently
                                learning Python, Vue.js and React. I\'m interested in Gamification and Accessibility.
                                I\'ve created this site as a way to document my coding journey for myself and to share
                                my progress with others. Look out for my next blog post, where I\'ll share how I
                                developed the first launch of my portfolio!
                            </p>',
            'category' => null,
            'published' => true,
            'archived' => true,
            'posted_at' => '2021-10-15 22:00:00'
        ]);

        BlogPost::create([
            'title' => 'Sample Blog Post 2',
            'content' => '<p class="mb-4">Sample Blog Post 2</p>',
            'category' => null,
            'published' => true,
            'archived' => true,
        ]);

        BlogPost::create([
            'title' => 'Sample Blog Post 3',
            'content' => '<p class="mb-4">Sample Blog Post 3</p>',
            'category' => null,
            'published' => true,
            'archived' => true,
        ]);
    }
}

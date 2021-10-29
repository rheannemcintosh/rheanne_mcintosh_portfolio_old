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
            'archived' => false,
            'posted_at' => '2021-10-15 00:00:00'
        ]);

        BlogPost::create([
            'title' => 'My portfolio is now live!',
            'content' => '<p class="mb-4">
                                Yay! Welcome to the first release of my portfolio! I\'ve always wanted to have my own professional portfolio since University and I\'m glad I can finally share it with the world!
                                It definitely is a work in progress, however I wanted to have a site live as soon as possible. At the moment you can view my CV, read my blog (only 2 posts currently - sorry)
                                and contact me via the site. The site is built using Laravel 8, with blade used for the templates, all information is populated through the DB, with tailwindcss being used to make it look nice.
                            </p>
                            <p class="mb-4">So, what will release number two look like? Hopefully with the next release, I can get round to creating a portfolio page. After that, I\'d like to have skills and tags that link together across the site, as well as improving the admin side of the site and maybe even adding comments to my blog.
                            If you have any suggestions or improvements, please feel free to let me know :)
                            </p>',
            'category' => null,
            'published' => true,
            'archived' => false,
            'posted_at' => '2021-10-29 00:00:00'
        ]);
    }
}

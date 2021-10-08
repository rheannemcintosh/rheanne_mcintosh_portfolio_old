<?php

namespace Database\Seeders;

use App\Models\ExperienceDetail;
use Illuminate\Database\Seeder;

class ExperienceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('experience_details')->delete();

        ExperienceDetail::create([
            'experience_id' => 1,
            'detail' =>
                'Assisted in the migration from a waterfall to an agile approach for development. 
                Strong proficiency in agile methodologies, and regularly engaged in all aspects of planning, 
                refinement sessions and retrospectives.'
            ,
            'cv_flag' => true,
        ]);

        ExperienceDetail::create([
            'experience_id' => 1,
            'detail' =>
                'Maintained, supported and improved an existing large eCommerce platform, using PHP.'
            ,
            'cv_flag' => true,
        ]);

        ExperienceDetail::create([
            'experience_id' => 1,
            'detail' =>
                'Worked as part of the Product Discovery team to implement Elasticsearch within an 
                eCommerce application, and utilised Kibana to explore the search data.'
            ,
            'cv_flag' => true,
        ]);

        ExperienceDetail::create([
            'experience_id' => 1,
            'detail' =>
                'Adapted comprehensive SQL queries to support a legacy search system.'
            ,
            'cv_flag' => true,
        ]);

        ExperienceDetail::create([
            'experience_id' => 2,
            'detail' =>
                'Develop new, efficient and well-tested applications using the Laravel framework, and integrate
                 the applications with existing systems.'
            ,
            'cv_flag' => true,
        ]);

        ExperienceDetail::create([
            'experience_id' => 2,
            'detail' =>
                'Manage the implementation of accessibility considerations by supervising a new employee and
                 following Web Content Accessibility Guidelines.'
            ,
            'cv_flag' => true,
        ]);

        ExperienceDetail::create([
            'experience_id' => 2,
            'detail' =>
                'Assist with the migration from PHP 5.6 to 7.4 for a number of applications.'
            ,
            'cv_flag' => true,
        ]);

        ExperienceDetail::create([
            'experience_id' => 2,
            'detail' =>
                'Design, develop and implement new functionalities for current CodeIgniter applications.'
            ,
            'cv_flag' => true,
        ]);

        ExperienceDetail::create([
            'experience_id' => 2,
            'detail' =>
                'Oversee an audit on the department’s documentation and wiki to ensure it is up-to-date,
                 relevant and straightforward to understand for newly hired employees.'
            ,
            'cv_flag' => true,
        ]);

        ExperienceDetail::create([
            'experience_id' => 2,
            'detail' =>
                'Provide daily support to a variety of users and participate in the training of a 
                large number of users.'
            ,
            'cv_flag' => true,
        ]);

        ExperienceDetail::create([
            'experience_id' => 2,
            'detail' =>
                'Modify and upgrade existing applications to correct coding errors; upgrade interfaces; 
                and, improve overall performance.'
            ,
            'cv_flag' => true,
        ]);

        ExperienceDetail::create([
            'experience_id' => 2,
            'detail' =>
                'Implement and test enhancement feature requests to improve product functionality 
                and extend performance.'
            ,
            'cv_flag' => true,
        ]);

        ExperienceDetail::create([
            'experience_id' => 2,
            'detail' =>
                'Use the CodeIgniter framework to build APIs for a variety of applications.'
            ,
            'cv_flag' => true,
        ]);

        ExperienceDetail::create([
            'experience_id' => 2,
            'detail' =>
                'Complete QA on an array of products, ensuring code conforms to PSR standards, 
                and unit testing is implemented successfully.'
            ,
            'cv_flag' => true,
        ]);

        ExperienceDetail::create([
            'experience_id' => 3,
            'detail' =>
                'Responsible for ensuring the store legally complies with pricing and advertising information.'
            ,
            'cv_flag' => false,
        ]);

        ExperienceDetail::create([
            'experience_id' => 3,
            'detail' =>
                'Coordinate large price changes.'
            ,
            'cv_flag' => false,
        ]);

        ExperienceDetail::create([
            'experience_id' => 4,
            'detail' =>
                'Communicate and organise events with local charities and groups.'
            ,
            'cv_flag' => false,
        ]);

        ExperienceDetail::create([
            'experience_id' => 5,
            'detail' =>
                'Produce graphical reports for the company to present sales and 
                customer satisfaction information.'
            ,
            'cv_flag' => false,
        ]);

        ExperienceDetail::create([
            'experience_id' => 5,
            'detail' =>
                'Create newsletters and posters for the store to communicate store news and events.'
            ,
            'cv_flag' => false,
        ]);

        ExperienceDetail::create([
            'experience_id' => 5,
            'detail' =>
                'Regularly update colleague notice boards, to visually 
                engage colleagues with important information.'
            ,
            'cv_flag' => false,
        ]);

        ExperienceDetail::create([
            'experience_id' => 6,
            'detail' =>
                'Managed the colleagues on the Customer Service department.'
            ,
            'cv_flag' => false,
        ]);

        ExperienceDetail::create([
            'experience_id' => 6,
            'detail' =>
                'Organised colleague schedules to ensure the efficient running of each shift.'
            ,
            'cv_flag' => false,
        ]);

        ExperienceDetail::create([
            'experience_id' => 6,
            'detail' =>
                'Ensured legal compliance for colleague training.'
            ,
            'cv_flag' => false,
        ]);

        ExperienceDetail::create([
            'experience_id' => 8,
            'detail' =>
                'Managed relationships between colleagues, parents and children.'
            ,
            'cv_flag' => false,
        ]);

        ExperienceDetail::create([
            'experience_id' => 9,
            'detail' =>
                'Worked as part of a team to ensure the smooth running of the business, by effectively
                splitting up tasks, and ensuring children’s birthday parties ran effortlessly.'
            ,
            'cv_flag' => false,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('certificates')->delete();

        Certificate::create([
            'name' => 'Class Prize for Academic Excellence',
            'description' => 'Class Prize for Academic Excellence in BSc (Hons) Computing (Graphics and Animation) in Stage 4 (2017/18)',
            'date' => '2018-07-01 00:00:00',
        ]);

        Certificate::create([
            'name' => 'ConocoPhillips Award for Academic Excellence',
            'description' => 'ConocoPhillips Award for Academic Excellence in BSc (Hons) Computing (Graphics and Animation) in Stage 2 (2015/16)',
            'date' => '2016-07-01 00:00:00',
        ]);

        Certificate::create([
            'name' => 'Baden-Powell Challenge Award',
            'description' => 'Completed multiple challenges by Girlguiding UK to earn the Baden-Powell Challenge Award.',
            'date' => '2011-02-01 00:00:00',
        ]);
    }
}

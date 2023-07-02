<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class WritingTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topic = [
            [
                'topic_name'=>'Coronavirus and economy',
            ],
            [
                'topic_name'=>'Importance of programming',
            ],
            [
                'topic_name'=>'The Cow',
            ],
        ];

        foreach ($topic as $key => $value) {
            DB::table('writing_topic')->insert([
                $key=>$value
            ]);
        }
    }
}

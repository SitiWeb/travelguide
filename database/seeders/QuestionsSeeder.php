<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'id' => 1,
                'question' => 'A place to stay during a city trip should be...',
                'option_1' => 'an experience',
                'option_2' => 'somewhere to put your head down',
                'created_at' => '2023-07-31 11:33:55',
                'updated_at' => '2023-07-31 11:33:55',
            ],
            [
                'id' => 2,
                'question' => 'Immersing yourself into the culture of a city feels like...',
                'option_1' => 'all things creative',
                'option_2' => 'browsing all things',
                'created_at' => '2023-07-31 11:35:49',
                'updated_at' => '2023-07-31 11:35:49',
            ],
            [
                'id' => 3,
                'question' => 'The best culinary experiences are always',
                'option_1' => 'in the streets with locals',
                'option_2' => 'grand and refined',
                'created_at' => '2023-07-31 11:36:31',
                'updated_at' => '2023-07-31 11:36:31',
            ],
            [
                'id' => 4,
                'question' => 'As day turns to dusk, it\'s time...',
                'option_1' => 'to take a chill moment',
                'option_2' => 'to energise for the night',
                'created_at' => '2023-07-31 11:37:02',
                'updated_at' => '2023-07-31 11:37:02',
            ],
            [
                'id' => 5,
                'question' => 'A walk through the city is all about...',
                'option_1' => 'the journey itself',
                'option_2' => 'the destination',
                'created_at' => '2023-07-31 11:37:32',
                'updated_at' => '2023-07-31 11:37:32',
            ],
        ];

        DB::table('questions')->insert($questions);
    }
}

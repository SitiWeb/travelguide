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
        $questions = array(
            array('id' => '1','question' => 'A place to stay during a city trip should be...','option_1' => 'an experience','option_2' => 'somewhere to put your head down','image_path' => 'Footer2-4x.png','created_at' => '2023-07-31 11:33:55','updated_at' => '2023-07-31 11:33:55'),
            array('id' => '2','question' => 'Immersing yourself into the culture of a city feels like...','option_1' => 'all things creative','option_2' => 'browsing all things','image_path' => 'Footer3-4x.png','created_at' => '2023-07-31 11:35:49','updated_at' => '2023-07-31 11:35:49'),
            array('id' => '3','question' => 'The best culinary experiences are always','option_1' => 'in the streets with locals','option_2' => 'grand and refined','image_path' => 'Footer4-4x.png','created_at' => '2023-07-31 11:36:31','updated_at' => '2023-07-31 11:36:31'),
            array('id' => '4','question' => 'As day turns to dusk, it\'s time...','option_1' => 'to take a chill moment','option_2' => 'to energise for the night','image_path' => 'Footer5-4x.png','created_at' => '2023-07-31 11:37:02','updated_at' => '2023-07-31 11:37:02'),
            array('id' => '5','question' => 'A walk through the city is all about...','option_1' => 'the journey itself','option_2' => 'the destination','image_path' => 'Footer6-4x.png','created_at' => '2023-07-31 11:37:32','updated_at' => '2023-07-31 11:37:32')
        );
        
        DB::table('questions')->insert($questions);
    }
}

<?php

namespace Database\Seeders;
use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answers = array(
            array('id' => '2','type_id' => '2','question_1' => '1','question_2' => '2','question_3' => '1','question_4' => '2','question_5' => '1','created_at' => '2023-08-02 12:25:01','updated_at' => '2023-08-02 13:15:03'),
            array('id' => '3','type_id' => '2','question_1' => '1','question_2' => '2','question_3' => '2','question_4' => '2','question_5' => '2','created_at' => '2023-08-02 13:13:18','updated_at' => '2023-08-02 13:15:08'),
            array('id' => '4','type_id' => '2','question_1' => '1','question_2' => '2','question_3' => '1','question_4' => '1','question_5' => '1','created_at' => '2023-08-02 13:13:31','updated_at' => '2023-08-02 13:15:13'),
            array('id' => '5','type_id' => '2','question_1' => '2','question_2' => '2','question_3' => '2','question_4' => '1','question_5' => '1','created_at' => '2023-08-02 13:14:24','updated_at' => '2023-08-02 13:15:17'),
            array('id' => '6','type_id' => '2','question_1' => '1','question_2' => '2','question_3' => '2','question_4' => '1','question_5' => '2','created_at' => '2023-08-02 13:15:52','updated_at' => '2023-08-02 13:15:52'),
            array('id' => '8','type_id' => '2','question_1' => '1','question_2' => '2','question_3' => '2','question_4' => '1','question_5' => '1','created_at' => '2023-08-02 13:16:38','updated_at' => '2023-08-02 13:16:38'),
            array('id' => '9','type_id' => '2','question_1' => '2','question_2' => '2','question_3' => '1','question_4' => '1','question_5' => '2','created_at' => '2023-08-02 13:16:59','updated_at' => '2023-08-02 13:16:59'),
            array('id' => '10','type_id' => '2','question_1' => '2','question_2' => '2','question_3' => '1','question_4' => '2','question_5' => '2','created_at' => '2023-08-02 13:17:19','updated_at' => '2023-08-02 13:17:19'),
            array('id' => '11','type_id' => '2','question_1' => '1','question_2' => '2','question_3' => '1','question_4' => '1','question_5' => '2','created_at' => '2023-08-02 13:17:46','updated_at' => '2023-08-02 13:17:46'),
            array('id' => '12','type_id' => '2','question_1' => '1','question_2' => '1','question_3' => '1','question_4' => '1','question_5' => '1','created_at' => '2023-08-02 13:17:55','updated_at' => '2023-08-02 13:17:55'),
            array('id' => '13','type_id' => '2','question_1' => '2','question_2' => '1','question_3' => '1','question_4' => '1','question_5' => '1','created_at' => '2023-08-02 13:19:11','updated_at' => '2023-08-02 13:19:11'),
            array('id' => '14','type_id' => '1','question_1' => '2','question_2' => '1','question_3' => '1','question_4' => '2','question_5' => '2','created_at' => '2023-08-02 13:21:44','updated_at' => '2023-08-02 13:21:44'),
            array('id' => '15','type_id' => '1','question_1' => '2','question_2' => '2','question_3' => '1','question_4' => '2','question_5' => '1','created_at' => '2023-08-02 13:22:07','updated_at' => '2023-08-02 13:22:07'),
            array('id' => '16','type_id' => '1','question_1' => '1','question_2' => '1','question_3' => '1','question_4' => '2','question_5' => '1','created_at' => '2023-08-02 13:22:29','updated_at' => '2023-08-02 13:22:29'),
            array('id' => '17','type_id' => '1','question_1' => '2','question_2' => '1','question_3' => '2','question_4' => '2','question_5' => '1','created_at' => '2023-08-02 13:23:33','updated_at' => '2023-08-02 13:23:33'),
            array('id' => '18','type_id' => '1','question_1' => '2','question_2' => '2','question_3' => '2','question_4' => '2','question_5' => '2','created_at' => '2023-08-02 13:23:42','updated_at' => '2023-08-02 13:23:42'),
            array('id' => '19','type_id' => '1','question_1' => '2','question_2' => '1','question_3' => '1','question_4' => '2','question_5' => '1','created_at' => '2023-08-02 13:30:48','updated_at' => '2023-08-02 13:30:48'),
            array('id' => '20','type_id' => '1','question_1' => '1','question_2' => '1','question_3' => '2','question_4' => '2','question_5' => '1','created_at' => '2023-08-02 13:31:00','updated_at' => '2023-08-02 13:31:00'),
            array('id' => '21','type_id' => '1','question_1' => '1','question_2' => '2','question_3' => '1','question_4' => '2','question_5' => '2','created_at' => '2023-08-02 13:31:20','updated_at' => '2023-08-02 13:31:20'),
            array('id' => '22','type_id' => '1','question_1' => '1','question_2' => '2','question_3' => '2','question_4' => '2','question_5' => '1','created_at' => '2023-08-02 13:31:31','updated_at' => '2023-08-02 13:31:31'),
            array('id' => '23','type_id' => '1','question_1' => '2','question_2' => '2','question_3' => '2','question_4' => '2','question_5' => '1','created_at' => '2023-08-02 13:32:10','updated_at' => '2023-08-02 13:32:10'),
            array('id' => '24','type_id' => '3','question_1' => '1','question_2' => '1','question_3' => '2','question_4' => '2','question_5' => '2','created_at' => '2023-08-02 13:32:32','updated_at' => '2023-08-02 13:32:32'),
            array('id' => '25','type_id' => '3','question_1' => '2','question_2' => '1','question_3' => '2','question_4' => '1','question_5' => '2','created_at' => '2023-08-02 13:32:43','updated_at' => '2023-08-02 13:33:48'),
            array('id' => '26','type_id' => '3','question_1' => '1','question_2' => '1','question_3' => '2','question_4' => '1','question_5' => '1','created_at' => '2023-08-02 13:33:33','updated_at' => '2023-08-02 13:34:05'),
            array('id' => '27','type_id' => '3','question_1' => '2','question_2' => '1','question_3' => '1','question_4' => '1','question_5' => '2','created_at' => '2023-08-02 13:34:22','updated_at' => '2023-08-02 13:34:22'),
            array('id' => '28','type_id' => '3','question_1' => '1','question_2' => '1','question_3' => '2','question_4' => '1','question_5' => '2','created_at' => '2023-08-02 13:34:35','updated_at' => '2023-08-02 13:34:35'),
            array('id' => '29','type_id' => '3','question_1' => '2','question_2' => '1','question_3' => '2','question_4' => '2','question_5' => '2','created_at' => '2023-08-02 13:34:49','updated_at' => '2023-08-02 13:34:49'),
            array('id' => '30','type_id' => '3','question_1' => '2','question_2' => '1','question_3' => '2','question_4' => '1','question_5' => '1','created_at' => '2023-08-02 13:35:03','updated_at' => '2023-08-02 13:35:03'),
            array('id' => '31','type_id' => '3','question_1' => '1','question_2' => '1','question_3' => '1','question_4' => '2','question_5' => '2','created_at' => '2023-08-02 13:35:20','updated_at' => '2023-08-02 13:35:20'),
            array('id' => '33','type_id' => '3','question_1' => '2','question_2' => '2','question_3' => '2','question_4' => '1','question_5' => '2','created_at' => '2023-08-02 13:35:57','updated_at' => '2023-08-02 13:35:57'),
            array('id' => '34','type_id' => '3','question_1' => '2','question_2' => '2','question_3' => '1','question_4' => '1','question_5' => '1','created_at' => '2023-08-02 13:36:14','updated_at' => '2023-08-02 13:36:14'),
            array('id' => '35','type_id' => '3','question_1' => '1','question_2' => '1','question_3' => '1','question_4' => '1','question_5' => '2','created_at' => '2023-08-02 13:36:27','updated_at' => '2023-08-02 13:36:27')
          );
          Answer::insert($answers);
    }
}

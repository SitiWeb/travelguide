<?php

namespace Database\Seeders;
use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $destinationsData = [
            [
                'id' => 3,
                'city' => 'Singapore',
                'country' => 'Singapore',
                'description' => 'Singapore',
                'pdf_path' => NULL,
                'created_at' => '2023-08-02 13:27:52',
                'updated_at' => '2023-08-02 13:27:52',
                'type_id' => 3,
            ],
            [
                'id' => 4,
                'city' => 'Penang',
                'country' => 'Penang',
                'description' => 'Penang',
                'pdf_path' => NULL,
                'created_at' => '2023-08-02 13:28:33',
                'updated_at' => '2023-08-02 13:28:33',
                'type_id' => 3,
            ],
            [
                'id' => 5,
                'city' => 'Melbourne',
                'country' => 'Melbourne',
                'description' => 'Melbourne',
                'pdf_path' => NULL,
                'created_at' => '2023-08-02 13:29:15',
                'updated_at' => '2023-08-02 13:29:15',
                'type_id' => 3,
            ],
            [
                'id' => 6,
                'city' => 'Danang',
                'country' => 'Danang',
                'description' => 'Danang',
                'pdf_path' => NULL,
                'created_at' => '2023-08-02 13:29:50',
                'updated_at' => '2023-08-02 13:29:50',
                'type_id' => 1,
            ],
            [
                'id' => 7,
                'city' => 'Chiangmai',
                'country' => 'Chiangmai',
                'description' => 'Chiangmai',
                'pdf_path' => NULL,
                'created_at' => '2023-08-02 13:30:32',
                'updated_at' => '2023-08-02 13:30:32',
                'type_id' => 1,
            ],
            [
                'id' => 8,
                'city' => 'Cappadocia',
                'country' => 'Cappadocia',
                'description' => 'Cappadocia',
                'pdf_path' => NULL,
                'created_at' => '2023-08-02 13:31:08',
                'updated_at' => '2023-08-02 13:31:08',
                'type_id' => 1,
            ],
            [
                'id' => 9,
                'city' => 'Bordeaux',
                'country' => 'Bordeaux',
                'description' => 'Bordeaux',
                'pdf_path' => 'pdfs/BORDEAUX_V1_HR.pdf',
                'created_at' => '2023-08-02 13:31:40',
                'updated_at' => '2023-08-02 14:08:58',
                'type_id' => 2,
            ],
            [
                'id' => 10,
                'city' => 'Battambang',
                'country' => 'Battambang',
                'description' => 'Battambang',
                'pdf_path' => NULL,
                'created_at' => '2023-08-02 13:32:27',
                'updated_at' => '2023-08-02 13:32:27',
                'type_id' => 3,
            ],
            [
                'id' => 11,
                'city' => 'Abu Dhabi',
                'country' => 'Abu Dhabi',
                'description' => 'Abu Dhabi',
                'pdf_path' => NULL,
                'created_at' => '2023-08-02 13:33:20',
                'updated_at' => '2023-08-02 13:33:20',
                'type_id' => 3,
            ],
            
        ];

        // Insert the data into the 'destinations' table
        Destination::insert($destinationsData);
    }
}
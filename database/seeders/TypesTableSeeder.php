<?php

namespace Database\Seeders;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = array(
            array('id' => '1','name' => 'Nigth owl','created_at' => '2023-08-01 09:52:52','updated_at' => '2023-08-01 10:19:57'),
            array('id' => '2','name' => 'City Explorer','created_at' => '2023-08-01 10:20:07','updated_at' => '2023-08-02 12:19:55'),
            array('id' => '3','name' => 'Culture Council','created_at' => '2023-08-01 10:20:14','updated_at' => '2023-08-02 12:20:10')
          );
        Type::insert($types);
    }
}

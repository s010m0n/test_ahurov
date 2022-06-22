<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class CreateRoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i< 10; $i++){
            Room::create([
                'location_id' => random_int(1,6),
                'temperature' => random_int(1,10),
                'number_of_block' => random_int(10,100),
            ]);
        }

    }
}

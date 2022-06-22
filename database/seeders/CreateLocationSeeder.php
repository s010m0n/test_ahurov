<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class CreateLocationSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            'Уилмингтон (Северная Каролина)',
            'Портленд (Орегон)',
            'Торонто',
            'Варшава',
            'Валенсия',
            'Шанхай',
        ];

        foreach ($locations as $location)
        Location::create([
           'name' =>    $location
        ]);
    }
}

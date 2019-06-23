<?php

use Illuminate\Database\Seeder;

class LineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\VehicleReservation\Line::create([
            'name'  => 'Dhaka To Sylhet Route',
            'ta_id' => 1,
            'departure_station' => 1,
            'arrival_station'   => 2,
        ]);

        \App\Model\VehicleReservation\Line::create([
            'name'  => 'Dhaka To Chittagong Route',
            'ta_id' => 1,
            'departure_station' => 1,
            'arrival_station'   => 3,
        ]);

        \App\Model\VehicleReservation\Line::create([
            'name'  => 'Dhaka To Rajshahi Route',
            'ta_id' => 1,
            'departure_station' => 1,
            'arrival_station'   => 4,
        ]);

        \App\Model\VehicleReservation\Line::create([
            'name'  => 'Dhaka To Khulna Route',
            'ta_id' => 1,
            'departure_station' => 1,
            'arrival_station'   => 5,
        ]);

    }
}

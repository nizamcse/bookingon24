<?php

use Illuminate\Database\Seeder;

class TripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\VehicleReservation\Trip::create([
            'line_id'   => 1,
            'vehicle_type'  => 1,
            'vehicle_details'   => '1, Hino 1J Plus',
            'departure_time'    => '10:00:00',
            'arrival_time'    => '17:00:00',
        ]);

        \App\Model\VehicleReservation\Trip::create([
            'line_id'   => 1,
            'vehicle_type'  => 2,
            'vehicle_details'   => '6, Hyundai Universe',
            'departure_time'    => '10:30:00',
            'arrival_time'    => '17:30:00',
        ]);
        \App\Model\VehicleReservation\Trip::create([
            'line_id'   => 2,
            'vehicle_type'  => 1,
            'vehicle_details'   => '1, Hino 1J Plus',
            'departure_time'    => '10:00:00',
            'arrival_time'    => '17:00:00',
        ]);

        \App\Model\VehicleReservation\Trip::create([
            'line_id'   => 2,
            'vehicle_type'  => 2,
            'vehicle_details'   => '6, Hyundai Universe',
            'departure_time'    => '10:30:00',
            'arrival_time'    => '17:30:00',
        ]);

        \App\Model\VehicleReservation\Trip::create([
            'line_id'   => 3,
            'vehicle_type'  => 1,
            'vehicle_details'   => '1, Hino 1J Plus',
            'departure_time'    => '10:00:00',
            'arrival_time'    => '17:00:00',
        ]);

        \App\Model\VehicleReservation\Trip::create([
            'line_id'   => 3,
            'vehicle_type'  => 2,
            'vehicle_details'   => '6, Hyundai Universe',
            'departure_time'    => '10:30:00',
            'arrival_time'    => '17:30:00',
        ]);

        \App\Model\VehicleReservation\Trip::create([
            'line_id'   => 4,
            'vehicle_type'  => 1,
            'vehicle_details'   => '1, Hino 1J Plus',
            'departure_time'    => '10:00:00',
            'arrival_time'    => '17:00:00',
        ]);

        \App\Model\VehicleReservation\Trip::create([
            'line_id'   => 4,
            'vehicle_type'  => 2,
            'vehicle_details'   => '6, Hyundai Universe',
            'departure_time'    => '10:30:00',
            'arrival_time'    => '17:30:00',
        ]);
    }
}

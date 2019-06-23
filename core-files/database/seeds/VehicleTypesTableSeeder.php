<?php

use Illuminate\Database\Seeder;

class VehicleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\VehicleType::create([
            'name'  => 'Double Decker'
        ]);

        \App\Model\VehicleType::create([
            'name'  => 'Sleeper'
        ]);

        \App\Model\VehicleType::create([
            'name'  => 'Business Class'
        ]);

        \App\Model\VehicleType::create([
            'name'  => 'Economy Class'
        ]);
    }
}

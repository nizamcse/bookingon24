<?php

use Illuminate\Database\Seeder;

class StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Station::create([
            'name'  => 'Mohakhali',
            'location_id'   => 1
        ]);
        \App\Model\Station::create([
            'name'  => 'Kodomtali',
            'location_id'   => 2
        ]);
        \App\Model\Station::create([
            'name'  => 'New Market',
            'location_id'   => 3
        ]);
        \App\Model\Station::create([
            'name'  => 'Natore',
            'location_id'   => 4
        ]);
        \App\Model\Station::create([
            'name'  => 'Jessore',
            'location_id'   => 5
        ]);
    }
}

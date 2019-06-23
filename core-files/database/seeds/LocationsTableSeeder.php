<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Location::create([
            'name'  => 'Dhaka',
            'country_id'    => 1,
            'postal_code'   => '1234'
        ]);

        \App\Model\Location::create([
            'name'  => 'Sylhet',
            'country_id'    => 1,
            'postal_code'   => '1234'
        ]);
        \App\Model\Location::create([
            'name'  => 'Chittagong',
            'country_id'    => 1,
            'postal_code'   => '1234'
        ]);
        \App\Model\Location::create([
            'name'  => 'Rajshahi',
            'country_id'    => 1,
            'postal_code'   => '1234'
        ]);
        \App\Model\Location::create([
            'name'  => 'Khulna',
            'country_id'    => 1,
            'postal_code'   => '1234'
        ]);
    }
}

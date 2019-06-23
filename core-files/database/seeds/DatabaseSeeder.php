<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(AdminTableSeeder::class);
        //$this->call(AgentUserTableSeeder::class);
        //$this->call(UserTableSeeder::class);
//        $this->call(CountriesTableSeeder::class);
//        $this->call(LocationsTableSeeder::class);
//        $this->call(StationsTableSeeder::class);
//        $this->call(LineTableSeeder::class);
//        $this->call(TripTableSeeder::class);
        $this->call(VehicleTypesTableSeeder::class);
    }
}

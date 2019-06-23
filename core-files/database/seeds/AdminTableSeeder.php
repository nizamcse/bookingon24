<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Admin\Admin::create([
            'name'  => 'BOOKINGON24',
            'email' => 'admin@bookingon24.com',
            'password'  => \Illuminate\Support\Facades\Hash::make(123456),
            'contact_no'    => '01791944248'
        ]);
    }
}

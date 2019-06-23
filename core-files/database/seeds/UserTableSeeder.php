<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'  => 'Nizam',
            'email' => 'nizamsuet@gmail.com',
            'contact_no'    => '01857444087',
            'password'  => \Illuminate\Support\Facades\Hash::make(123456)
        ]);

        \App\User::create([
            'name'  => 'Noyon',
            'email' => 'talha.noyon10@gmail.com',
            'contact_no'    => '01675095062',
            'password'  => \Illuminate\Support\Facades\Hash::make(123456)
        ]);
    }
}

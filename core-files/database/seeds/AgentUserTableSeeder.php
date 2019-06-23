<?php

use Illuminate\Database\Seeder;

class AgentUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Agent\AgentUser::create([
            'name'  => 'Kholil',
            'email' => 'mkrwinskit2014@gmail.com',
            'contact_no'    => '01630462226',
            'password'  => \Illuminate\Support\Facades\Hash::make(123456)
        ]);

        \App\Model\Agent\AgentUser::create([
            'name'  => 'Badhon',
            'email' => 'badhon@gmail.com',
            'contact_no'    => '01737525434',
            'password'  => \Illuminate\Support\Facades\Hash::make(123456)
        ]);
    }
}

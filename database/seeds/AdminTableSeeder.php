<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class AdminTableSeeder extends Seeder {

    public function run()

    {
        \DB::table('users')->insert(array (
            'first_name'          =>'Eddie',
            'last_name'          =>'Rada',
            'email'         =>'eddierada@gmail.com',
            'password'      =>\Hash::make('7201880130'),
            'type'         => 'admin'
        ));

        \DB::table('user_profiles')->insert(array (
           'user_id' => 1,
            'birthdate' => '1977-12-17'
        ));
    }

 }
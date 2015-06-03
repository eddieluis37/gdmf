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


    }

 }
<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class ProductorTableSeeder extends Seeder {

    public function run()

{
    $faker = Faker::create();
    for ($i = 0; $i < 100; $i++) {
        $firstName = $faker->firstName;
        $lastName = $faker->lastName;
        $id = \DB::table('productors')->insertGetId(array(
            'first_name' => $firstName,
            'last_name' => $lastName,
            'identificacion' => $faker->ean8,
            'phone' => $faker->phoneNumber,
            'celular' => $faker->phoneNumber,
            'email' => $faker->unique()->email,
            'address' => $faker->randomElement(['editor', 'contributor', 'subscriber', 'user']),
            'asociacion' => $faker->lastName,
            'name' => "$firstName $lastName"

        ));

    }
}

 }
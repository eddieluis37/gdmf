<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class ProductorTableSeeder extends Seeder {

    public function run()

{
    $faker = Faker::create();
    for ($i = 0; $i < 100; $i++) {
        $firstName = $faker->firstName;
        $secondName =$faker->firstNameMale;
        $lastName = $faker->lastName;
        $secondlastName = $faker->firstNameFemale;
        $id = \DB::table('productors')->insertGetId(array(

            'full_name' => "$firstName $secondName $lastName $secondlastName",
            'first_name' => $firstName,
            'second_name' => $secondName,
            'last_name' => $lastName,
            'secondlast_name' => $secondlastName,
            'identificacion' => $faker->ean8,
            'phone' => $faker->phoneNumber,
            'celular' => $faker->phoneNumber,
            'email' => $faker->unique()->email,
            'address' => $faker->randomElement(['editor', 'contributor', 'subscriber', 'user']),
            'asociacion' => $faker->lastName


        ));

    }
}

}
<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\en_US\Address($faker));

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip' => $faker->postcode,
        'primary_phone' => $faker->phoneNumber,
        'created_at' => $faker->dateTimeBetween('-5 weeks', 'now')
    ];
});

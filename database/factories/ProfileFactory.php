<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\en_US\Address($faker));

    return [
        'user_id' => factory(App\User::class)->create(),
        'name' => $faker->name,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip' => $faker->postcode,
        'primary_phone' => $faker->phoneNumber
    ];
});

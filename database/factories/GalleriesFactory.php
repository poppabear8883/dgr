<?php

use Faker\Generator as Faker;

$factory->define(App\Gallery::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\en_US\Address($faker));

    return [
        'name' => $faker->firstName,
        'description' => $faker->paragraph,
    ];
});

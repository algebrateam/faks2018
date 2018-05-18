<?php

use Faker\Generator as Faker;

$factory->define(App\Zupanija::class, function (Faker $faker) {
    return [
        'naziv' => $faker->streetName
    ];
});

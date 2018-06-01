<?php

use Faker\Generator as Faker;

/**
 * @author mrvic
 * @example $mcreate = factory(App\Mjesto::class, 100)->create();
 */
$factory->define(App\Mjesto::class, function (Faker $faker) {
  return [
        //'pbr' => $faker->unique()->postcode,
      'pbr' => $faker->unique()->numberBetween($min = 60000, $max = 70000),
        'naziv' => $faker->city,
    'zupanija_id' => \App\Zupanija::all()->random()->id
    ];
});

<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ZupanijasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Factory::create();   
      
      $zupanijas = factory(App\Zupanija::class, 38)->create();
      
      DB::table('zupanijas')->insert([
            'naziv' => $faker->streetName,
        ]);
            DB::table('zupanijas')->insert([
            'naziv' => $faker->streetName,
        ]);
                  DB::table('zupanijas')->insert([
            'naziv' => $faker->streetName,
        ]);
                        DB::table('zupanijas')->insert([
            'naziv' => $faker->streetName,
        ]);
                              DB::table('zupanijas')->insert([
            'naziv' => $faker->streetName,
        ]);
    }
}

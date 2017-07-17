<?php

use Illuminate\Database\Seeder;

class FormationsTableSeeder extends Seeder
{

  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(Faker\Generator $faker)
  {

    DB::table('formations')->insert([
      'name' => 'WebDev1',
      'city' => $faker->city,
      'year' => '2017',
      'begin_session' => $faker->date,
      'end_session' => $faker->date,
    ]);

    DB::table('formations')->insert([
      'name' => 'WebDev2',
      'city' => $faker->city,
      'year' => '2017',
      'begin_session' => $faker->date,
      'end_session' => $faker->date,
    ]);

    DB::table('formations')->insert([
      'name' => 'WebDev3',
      'city' => $faker->city,
      'year' => '2017',
      'begin_session' => $faker->date,
      'end_session' => $faker->date,
    ]);
  }
}

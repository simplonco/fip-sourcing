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
      'description' => 'Cette formation commence le 1er décembre et apprendra à une quinzaine d\'apprenants HTML/CSS/JS/Souffrance.',
      'city' => $faker->city,
      'year' => '2017',
      'begin_session' => $faker->date,
      'end_session' => $faker->date,
    ]);

    DB::table('formations')->insert([
      'name' => 'WebDev2',
      'description' => 'Cette formation commence le 1er décembre et apprendra à une quinzaine d\'apprenants HTML/CSS/JS/Souffrance.',
      'city' => $faker->city,
      'year' => '2017',
      'begin_session' => $faker->date,
      'end_session' => $faker->date,
    ]);

    DB::table('formations')->insert([
      'name' => 'WebDev3',
      'description' => 'Cette formation commence le 1er décembre et apprendra à une quinzaine d\'apprenants HTML/CSS/JS/Souffrance.',
      'city' => $faker->city,
      'year' => '2017',
      'begin_session' => $faker->date,
      'end_session' => $faker->date,
    ]);
  }
}

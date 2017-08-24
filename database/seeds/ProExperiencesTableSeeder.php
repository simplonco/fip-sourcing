<?php

use Illuminate\Database\Seeder;

class ProExperiencesTableSeeder extends Seeder
{

  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(Faker\Generator $faker)
  {


    for ($i=1; $i < 25; $i++) {
      DB::table('pro_experiences')->insert([
        'user_id' => $i,
        'society_name' => $faker->word,
        'society_address' => $faker->address,
        'contract_type' => $faker->word,
        'contract_duration' => $faker->randomNumber($nbDigits = 1, $strict = false). ' mois',
        'position_held' => $faker->word,
      ]);
    }
  }
}

<?php

use Illuminate\Database\Seeder;

class PaidFormationsTableSeeder extends Seeder
{

  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(Faker\Generator $faker)
  {


    for ($i=1; $i < 25; $i++) {
      DB::table('paid_formations')->insert([
        'user_id' => $i,
        'name' => $faker->word,
        'begin_date' => $faker->date,
        'end_date' => $faker->date,
        'contact' => $faker->unique()->email,
      ]);
    }
  }
}

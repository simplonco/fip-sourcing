<?php

use Illuminate\Database\Seeder;

class SuccessesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(Faker\Generator $faker)
  {
    for ($i=2; $i < 50; $i++) {
      DB::table('successes')->insert([
        'candidate_id' => $i
      ]);

    }
  }
}

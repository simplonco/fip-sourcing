<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(Faker\Generator $faker)
  {



    DB::table('answers')->insert([
      'id' => 1,
      'candidate_id' => 3,
      'question_id' => 3,
      'value' => 'Spiderman'
    ]);

  }
}

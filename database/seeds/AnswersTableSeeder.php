<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {

    DB::table('answers')->insert([
      'id' => 1,
      'question_id' => 3,
      'candidate_id' => 3,
      'value' => 'Spiderman'
    ]);
  }
}

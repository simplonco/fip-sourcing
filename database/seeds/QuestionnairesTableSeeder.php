<?php

use Illuminate\Database\Seeder;

class QuestionnairesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {

    DB::table('questionnaires')->insert([
      'id' => 0,
      'formation_id' => 3,
      'creator_id' => 1,
      'title' => 'Formulaire de référence'
    ]);
  }
}

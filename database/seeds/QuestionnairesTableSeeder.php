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
      'formation_id' => 3,
      'title' => 'Formulaire de référence'
    ]);
  }
}

<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {

    DB::table('questions')->insert([
      'id' => 1,
      'questionnaire_id' => 3,
      'category_id' => 3,
      'title' => 'Quel est ton super-héros préféré?',
      'type' => 'text',
      'default_value' => '["JE SUIS BATMAN"]',
      'goal' => 'Savoir quel est ton super-héros préféré',
      'weight' => 1000
    ]);

    DB::table('questions')->insert([
      'id' => 2,
      'questionnaire_id' => 3,
      'category_id' => 1,
      'title' => 'Quel est ton nom?',
      'type' => 'text',
      'default_value' => '["Bob"]',
      'goal' => 'Savoir comment tu s\'appelle le candidat',
      'weight' => 100
    ]);

    DB::table('questions')->insert([
      'id' => 3,
      'questionnaire_id' => 3,
      'category_id' => 2,
      'title' => 'Quelle est la couleur du cheval blanc d\'Henri IV?',
      'type' => 'text',
      'default_value' => '["Blanc"]',
      'goal' => 'Savoir si tu suis',
      'mandatory' => false,
      'weight' => 10
    ]);
  }
}

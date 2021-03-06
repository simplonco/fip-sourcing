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
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'birth_date',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'nationality',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'gender',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'pole_emploi',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'number_social_security',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'number_pole_emploi',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'postal_code',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'city',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'address',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'status',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'availability',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'efforts',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'computers',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'heard_of',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'phone',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'obtained_diploma',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'cdd',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'experience_programming',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'course',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'today',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'coding',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'profiles',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'hero',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'dev_qualities',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'personal_goal',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'dev_point',],
          ['category_id' => null, 'questionnaire_id' => 1, 'type'=>'text', 'default_value'=>null, 'title' => 'superpower',],
      ]);
  }
}

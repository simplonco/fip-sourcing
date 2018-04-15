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
            ['title' => 'Formulaire de référence'],
            ['title' => 'Formulaire de référence WebDev'],
            ['title' => 'Formulaire de référence JAVA'],
            ['title' => 'Formulaire de référence RéfDig'],

        ]);

        DB::table('formation_questionnaire')->insert([
            ['formation_id'=>1, 'questionnaire_id'=>1],
            ['formation_id'=>2, 'questionnaire_id'=>1],
            ['formation_id'=>3, 'questionnaire_id'=>1],
            ['formation_id'=>1, 'questionnaire_id'=>2],
            ['formation_id'=>2, 'questionnaire_id'=>3],
            ['formation_id'=>3, 'questionnaire_id'=>4],
        ]);
    }
}

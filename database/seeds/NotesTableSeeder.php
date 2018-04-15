<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(Faker\Generator $faker)
  {
    for ($i=2; $i < 50; $i++) {
      DB::table('notes')->insert([
        'candidate_id' => $i,
        'recruiter_id' => '50',
        'session_id' => '2',
        'hero_note' => '2',
        'dev_qualities_note' => '2',
        'personal_goal_note' => '2',
        'dev_point_note' => '2',
        'superpower_note' => '2',
        'comment' => $faker->text($maxNbChars = 100),
      ]);

      DB::table('notes')->insert([
        'candidate_id' => $i,
        'recruiter_id' => '52',
        'session_id' => '2',
        'hero_note' => '1',
        'dev_qualities_note' => '1',
        'personal_goal_note' => '1',
        'dev_point_note' => '1',
        'superpower_note' => '1',
        'comment' => $faker->text($maxNbChars = 100),
      ]);

      DB::table('notes')->insert([
        'candidate_id' => $i,
        'recruiter_id' => '53',
        'session_id' => '2',
        'hero_note' => '0',
        'dev_qualities_note' => '0',
        'personal_goal_note' => '0',
        'dev_point_note' => '0',
        'superpower_note' => '0',
        'comment' => $faker->text($maxNbChars = 100),
      ]);
    }
  }
}

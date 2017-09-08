<?php

use Illuminate\Database\Seeder;

class FormationUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('formation_user')->insert([
          'user_id' => '2',
          'formation_id' => '3',
      ]);

      for ($i=3; $i < 50; $i++) {
      DB::table('formation_user')->insert([
          'user_id' => $i,
          'formation_id' => '2',
      ]);}
    }
}

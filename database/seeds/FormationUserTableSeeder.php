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
          'formation_id' => '2',
      ]);
      DB::table('formation_user')->insert([
          'user_id' => '3',
          'formation_id' => '3',
      ]);
      DB::table('formation_user')->insert([
          'user_id' => '4',
          'formation_id' => '3',
      ]);
    }
}

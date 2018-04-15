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
    DB::table('session_user')->insert([
      'user_id' => '2',
      'session_id' => '3',
    ]);

    for ($i=3; $i < 50; $i++) {
      DB::table('session_user')->insert([
        'user_id' => $i,
        'session_id' => '2',
      ]);
    }


      DB::table('session_user')->insert([
        'user_id' => '50',
        'session_id' => '2',
      ]);

      DB::table('session_user')->insert([
        'user_id' => '51',
        'session_id' => '3',
      ]);

      DB::table('session_user')->insert([
        'user_id' => '52',
        'session_id' => '2',
      ]);

      DB::table('session_user')->insert([
        'user_id' => '53',
        'session_id' => '2',
      ]);
    }

  }

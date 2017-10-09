<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('role_user')->insert([
      'user_id' => '1',
      'role_id' => '1',
    ]);
    for ($i=2; $i < 50; $i++) {
      DB::table('role_user')->insert([
        'user_id' => $i,
        'role_id' => '2',
      ]);
    }
    DB::table('role_user')->insert([
      'user_id' => '50',
      'role_id' => '3',
    ]);
    DB::table('role_user')->insert([
      'user_id' => '51',
      'role_id' => '3',
    ]);
    DB::table('role_user')->insert([
      'user_id' => '52',
      'role_id' => '3',
    ]);
    DB::table('role_user')->insert([
      'user_id' => '53',
      'role_id' => '3',
    ]);
  }
}

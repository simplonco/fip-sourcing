<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {

    DB::table('categories')->insert([
      'id' => 1,
      'title' => 'General',
    ]);
    DB::table('categories')->insert([
      'id' => 2,
      'title' => 'Culture G',
    ]);
    DB::table('categories')->insert([
      'id' => 3,
      'title' => 'Motivation',
    ]);
  }
}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(Faker\Generator $faker)
  {

    DB::table('users')->insert([
      'last_name' => 'Admin',
      'first_name' => 'Admin',
      'email' => 'admin@admin.com',
      'password' => bcrypt('admin'),
    ]);

    for ($i=2; $i < 50; $i++) {
      DB::table('users')->insert([
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'email' => $faker->unique()->email,
        'password' => bcrypt('azerty'),

        'availability' => $faker->word,
        'efforts' => $faker->text($maxNbChars = 100),
        'computers' => $faker->text($maxNbChars = 100),
        'heard_of' => $faker->text($maxNbChars = 100),

        'nationality' => 'français',
        'birth_date' => $faker->date,
        'gender' => 'unicorn',
        'phone' => $faker->phoneNumber,
        'postal_code' => $faker->postcode,
        'city' => $faker->city,
        'address' => $faker->address,
        'status' => 'unemployed',
        'number_pole_emploi' => $faker->randomDigit,
        'pole_emploi' => $faker->city,
        'number_social_security' => $faker->randomDigit,
        'obtained_diploma' => 'Bac',
        'cdd'=>$faker->date,


        'experience_programming' => $faker->text($maxNbChars = 100),
        'course' => $faker->text($maxNbChars = 100),
        'today' => $faker->text($maxNbChars = 100),

        'coding' => $faker->url,
        'profiles' => $faker->url,

        'hero' => $faker->text($maxNbChars = 100),
        'dev_qualities' => $faker->text($maxNbChars = 100),
        'personal_goal' => $faker->text($maxNbChars = 100),
        'dev_point' => $faker->text($maxNbChars = 100),
        'superpower' => $faker->text($maxNbChars = 100),

      ]);
    }


    DB::table('users')->insert([
      'last_name' => 'Formateur',
      'first_name' => 'Formateur',
      'email' => 'formateur@formateur.com',
      'password' => bcrypt('azerty'),
    ]);

    DB::table('users')->insert([
      'last_name' => 'Formateur2',
      'first_name' => 'Formateur2',
      'email' => 'formateur2@formateur.com',
      'password' => bcrypt('azerty'),
    ]);


    DB::table('users')->insert([
      'last_name' => 'Formateur3',
      'first_name' => 'Formateur3',
      'email' => 'formateur3@formateur.com',
      'password' => bcrypt('azerty'),
    ]);


    DB::table('users')->insert([
      'last_name' => 'Formateur4',
      'first_name' => 'Formateur4',
      'email' => 'formateur4@formateur.com',
      'password' => bcrypt('azerty'),
    ]);
  }
}

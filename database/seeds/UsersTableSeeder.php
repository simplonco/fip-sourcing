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
      'lastName' => 'Admin',
      'firstName' => 'Admin',
      'email' => 'admin@admin.com',
      'password' => bcrypt('admin'),
    ]);

    for ($i=2; $i < 50; $i++) {
      DB::table('users')->insert([
        'lastName' => $faker->lastName,
        'firstName' => $faker->firstName,
        'email' => $faker->unique()->email,
        'birth_date' => $faker->date,
        'native_country' => $faker->city,
        'nationality' => $faker->city,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'social_status' => $faker->word,
        'number_pole_emploi' => $faker->randomDigit,
        'number_social_security' => $faker->randomDigit,
        'study' => $faker->city,
        'experience_programming' => $faker->text($maxNbChars = 100),
        'what_hero' => $faker->name,
        'hack_story' => $faker->text($maxNbChars = 100),
        'course' => $faker->word,
        'english' => $faker->boolean,
        'motivation' => $faker->text($maxNbChars = 100),
        'super_power' => $faker->text($maxNbChars = 100),
        'codecademy_profile' => $faker->url,
        'codecademy_badges' => $faker->randomNumber($nbDigits = 2, $strict = false),
        'openclassroom_profile' => $faker->url,
        'other_profile' => $faker->url,
        'availability' => $faker->boolean,
        'constraints' => $faker->text($maxNbChars = 100),
        'score' => $faker->randomNumber($nbDigits = 2, $strict = false),
        'password' => bcrypt('azerty'),
      ]);
    }


    DB::table('users')->insert([
      'lastName' => 'Formateur',
      'firstName' => 'Formateur',
      'email' => 'formateur@formateur.com',
      'password' => bcrypt('azerty'),
    ]);

    DB::table('users')->insert([
      'lastName' => 'Formateur2',
      'firstName' => 'Formateur2',
      'email' => 'formateur2@formateur.com',
      'password' => bcrypt('azerty'),
    ]);
  }
}

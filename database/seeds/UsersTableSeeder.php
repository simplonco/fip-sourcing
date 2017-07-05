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
            'birth_date' => $faker->date,
            'native_country' => $faker->city,
            'nationality' => $faker->city,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'social_status' => $faker->word,
            'number_pole_emploie' => $faker->unique()->randomDigit,
            'number_social_security' => $faker->unique()->randomDigit,
            'study' => $faker->city,
            'experience_programming' => $faker->text($maxNbChars = 100),
            'what_heros' => $faker->name,
            'hack_storie' => $faker->text($maxNbChars = 100),
            'course' => $faker->word,
            'english' => $faker->boolean,
            'motivation' => $faker->text($maxNbChars = 100),
            'super_power' => $faker->text($maxNbChars = 100),
            'codecademy_profile' => $faker->url,
            'openclassroom_profile' => $faker->url,
            'other_profile' => $faker->url,
            'availability' => $faker->boolean,
            'constraints' => $faker->text($maxNbChars = 100),
            'notoriety' => $faker->text($maxNbChars = 100),
            'password' => bcrypt('admin'),
        ]);

        DB::table('users')->insert([
            'lastName' => 'Jean',
            'firstName' => 'Michel',
            'email' => 'jean@michel.com',
            'birth_date' => $faker->date,
            'native_country' => $faker->city,
            'nationality' => $faker->city,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'social_status' => $faker->word,
            'number_pole_emploie' => $faker->unique()->randomDigit,
            'number_social_security' => $faker->unique()->randomDigit,
            'study' => $faker->city,
            'experience_programming' => $faker->text($maxNbChars = 100),
            'what_heros' => $faker->name,
            'hack_storie' => $faker->text($maxNbChars = 100),
            'course' => $faker->word,
            'english' => $faker->boolean,
            'motivation' => $faker->text($maxNbChars = 100),
            'super_power' => $faker->text($maxNbChars = 100),
            'codecademy_profile' => $faker->url,
            'openclassroom_profile' => $faker->url,
            'other_profile' => $faker->url,
            'availability' => $faker->boolean,
            'constraints' => $faker->text($maxNbChars = 100),
            'notoriety' => $faker->text($maxNbChars = 100),
            'password' => bcrypt('michel'),
        ]);

        DB::table('users')->insert([
            'lastName' => 'Jaqueline',
            'firstName' => 'Micheline',
            'email' => 'jean@charle.com',
            'birth_date' => $faker->date,
            'native_country' => $faker->city,
            'nationality' => $faker->city,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'social_status' => $faker->word,
            'number_pole_emploie' => $faker->unique()->randomDigit,
            'number_social_security' => $faker->unique()->randomDigit,
            'study' => $faker->city,
            'experience_programming' => $faker->text($maxNbChars = 100),
            'what_heros' => $faker->name,
            'hack_storie' => $faker->text($maxNbChars = 100),
            'course' => $faker->word,
            'english' => $faker->boolean,
            'motivation' => $faker->text($maxNbChars = 100),
            'super_power' => $faker->text($maxNbChars = 100),
            'codecademy_profile' => $faker->url,
            'openclassroom_profile' => $faker->url,
            'other_profile' => $faker->url,
            'availability' => $faker->boolean,
            'constraints' => $faker->text($maxNbChars = 100),
            'notoriety' => $faker->text($maxNbChars = 100),
            'password' => bcrypt('micheline'),
        ]);

        DB::table('users')->insert([
            'lastName' => 'Formateur',
            'firstName' => 'Formateur',
            'email' => 'formateur@formateur.com',
            'birth_date' => $faker->date,
            'native_country' => $faker->city,
            'nationality' => $faker->city,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'social_status' => $faker->word,
            'number_pole_emploie' => $faker->unique()->randomDigit,
            'number_social_security' => $faker->unique()->randomDigit,
            'study' => $faker->city,
            'experience_programming' => $faker->text($maxNbChars = 100),
            'what_heros' => $faker->name,
            'hack_storie' => $faker->text($maxNbChars = 100),
            'course' => $faker->word,
            'english' => $faker->boolean,
            'motivation' => $faker->text($maxNbChars = 100),
            'super_power' => $faker->text($maxNbChars = 100),
            'codecademy_profile' => $faker->url,
            'openclassroom_profile' => $faker->url,
            'other_profile' => $faker->url,
            'availability' => $faker->boolean,
            'constraints' => $faker->text($maxNbChars = 100),
            'notoriety' => $faker->text($maxNbChars = 100),
            'password' => bcrypt('formateur'),
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'lastName' => 'Admin',
            'firstName' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        DB::table('users')->insert([
            'lastName' => 'Jean',
            'firstName' => 'Michel',
            'email' => 'jean@michel.com',
            'password' => bcrypt('michel'),
        ]);

        DB::table('users')->insert([
            'lastName' => 'Jaqueline',
            'firstName' => 'Micheline',
            'email' => 'jean@charle.com',
            'password' => bcrypt('micheline'),
        ]);

        DB::table('users')->insert([
            'lastName' => 'Formateur',
            'firstName' => 'Formateur',
            'email' => 'formateur@formateur.com',
            'password' => bcrypt('formateur'),
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class RolesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin',
            ]);
        DB::table('roles')->insert([
            'name' => 'Candidat',
            'slug' => 'Can',
            ]);
        DB::table('roles')->insert([
            'name' => 'Formateur',
            'slug' => 'forma',
            ]);
    }
}

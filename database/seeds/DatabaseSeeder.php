<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(FormationsTableSeeder::class);
        $this->call(FormationUserTableSeeder::class);
        $this->call(NotesTableSeeder::class);
        $this->call(SuccessesTableSeeder::class);
    }
}

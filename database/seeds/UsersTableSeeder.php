<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	
	
	/**
	*Run the database seeds.
		*
		* @return void
		*/
		public function run()
		{
		DB::table('users')->insert([
				'lastName' => 'Admin_lastName',
				'firstName' => 'Admin_firstName',
				'email' => 'admin@example.com',
				'password' => bcrypt('azerty'),
				]);
		
		DB::table('users')->insert([
				'lastName' => 'bidon',
				'firstName' => 'jean',
				'email' => 'bidonjean@example.com',
				'password' => bcrypt('azerty'),
				]);
		
		DB::table('users')->insert([
				'lastName' => 'bidon',
				'firstName' => 'paul',
				'email' => 'bidonpaul@example.com',
				'password' => bcrypt('azerty'),
				]);
		
		DB::table('users')->insert([
				'lastName' => 'bidon',
				'firstName' => 'jeanette',
				'email' => 'bidonjeanette@example.com',
				'password' => bcrypt('azerty'),
				]);
		
		DB::table('users')->insert([
				'lastName' => 'bidon',
				'firstName' => 'hubert',
				'email' => 'bidonhubert@example.com',
				'password' => bcrypt('azerty'),
				]);
	}
}

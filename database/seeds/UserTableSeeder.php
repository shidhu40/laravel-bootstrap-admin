<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$vader = DB::table('users')->insert([
				'username'   => 'superadmin',
				'email'      => 'superadmin@techsudhir.com',
				'password'   => Hash::make('123456'),
				'first_name' => 'Sudhir',
				'last_name'  => 'Pandey',
				'role'  => 'superadmin',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			]);

		DB::table('users')->insert([
				'username'   => 'goodsidesoldier',
				'email'      => 'lightwalker@rebels.com',
				'password'   => Hash::make('hesnotmydad'),
				'first_name' => 'Luke',
				'last_name'  => 'Skywalker',
				'role'  => 'author',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			]);

		DB::table('users')->insert([
				'username'   => 'greendemon',
				'email'      => 'dancingsmallman@rebels.com',
				'password'   => Hash::make('yodaIam'),
				'first_name' => 'Yoda',
				'last_name'  => 'Unknown',
				'role'  => 'author',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			]);
	}

}
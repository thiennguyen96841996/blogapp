<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
		[
			'name' => 'Nathan',
			'email' => str_random(12).'@email.com',
			'password' => bcrypt('123456'),
			'created_at' => new DateTime,
			'updated_at' => new DateTime,
		],
		[
			'name' => 'David',
			'email' => str_random(12).'@email.com',
			'password' => bcrypt('123456'),
			'created_at' => new DateTime,
			'updated_at' => new DateTime,
		],
		[
			'name' => 'Lisa',
			'email' => str_random(12).'@email.com',
			'password' => bcrypt('123456'),
			'created_at' => new DateTime,
			'updated_at' => new DateTime,
		],
		]);
	}
}

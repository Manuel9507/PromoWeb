<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
				$users = array(['nombre' => 'Manuel', 'email' => 'manuale_flores07@hotmail.com', 'password' => Hash::make ('manuel'), 'telefono' => '2431012612', 'created_at' => new DateTime, 'updated_at' => new DateTime],
							   ['nombre' => 'Hillary', 'email' => 'rockechelona@hotmail.com',  'password' => Hash::make ('hillary'),  'telefono' => '2431100862', 'created_at' => new DateTime, 'updated_at' => new DateTime],
							   ['nombre' => 'Nimbe', 'email' => 'nimbe.berenice@hotmail.com',  'password' => Hash::make ('nimbe'), 'telefono' => '2441110634', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
	
		DB::table('users')->insert($users);
	}

}
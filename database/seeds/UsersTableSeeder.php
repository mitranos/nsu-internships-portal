<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->delete();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'Salvatore Mitrano',
				'password' => '$2y$10$F5hvprsdMl4zSqEQk4SnPOowWs..KqOOs/l4H9931f3zXHo3m48oC',//123456789
				'email' => 'sm2191@nova.edu',
				'account_type' => '0',
				'remember_token' => '90a2cff4c3f6617a7d74c127e825bee5ec3e20d93b3004293e83fa94b7c044ef',
                'phone' => '+1 (786) 853-2763',
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'Dr. Michael Van Hilst',
				'password' => '$2y$10$KVBw98F./OMDFIoarPabj.Hm6hB0SkmHJA.WJX6MCyOzNwggwsKAi',
				'email' => 'mv518@nova.edu',
				'account_type' => '0',
				'remember_token' => '40bae01c54089e5ee0cb583751e11510cc32db773ee403be590c03d930142532',
                'address' => 'Gaeta, Italy',
			),

		));
	}

}

<?php

class UsersTableSeeder extends Seeder{
	
	public function run(){
		
		DB::table('users')->delete();
		$users = array(
			array(

				'name'=>'Admin User',
				'password'=> Hash::make('admin1'),
				'email'=>'test@mail.com',
				'authkey'=> 1;
			)
		);

		DB::table('users')->insert($users);

	}
} 
<?php

class VehicleTableSeeder extends Seeder{
	
	public function run(){
		
		DB::table('vehicle')->delete();
		$vehicle = array(
			array(

				'name'=>'Admin User',
				'contactnumber'=> 719977232,
				'email'=>'test@mail.com',
				'userid'=>1,
				'manufacture'=>'Volkswagon',
				'type'=>'Polo',
				'year'=>2010,
				'colour'=>'White',
				'mileage'=> 12000,
				'created_at'=>date();
			)
		);

		DB::table('vehicle')->insert($vehicle);

	}
} 
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
        
        ///Eloquent::unguard();
        //$this->call('UsersTableSeeder'::Class);

        //user table seed
        DB::table('users')->delete();
        $users = array(
            array(

                'name'=>'Admin User',
                'password'=> Hash::make('admin1'),
                'email'=>'test@mail.com',
            )
        );

        DB::table('users')->insert($users);

        //vehicle table seed
        DB::table('vehicle')->delete();
        $vehicle = array(
            array(

                'name'=>'Admin User',
                'contactnumber'=> 719977232,
                'email'=>'test@mail.com',
                'manufacture'=>'Volkswagon',
                'type'=>'Polo',
                'year'=>2010,
                'colour'=>'White',
                'mileage'=> 12000,
                'created_at'=>date('Y-M-D h:m:s'),
            )
        );

        DB::table('vehicle')->insert($vehicle);
    }
}

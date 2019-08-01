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
        $faker = Faker\Factory::create();
        $limit = 10;

        for ($i=0; $i < $limit; $i++) { 
        	DB::table('user')-> insert([
        		'password'=>'123456',
        		'fullname'=> $faker->name,
        		'phone' => $faker->phoneNumber,
        		'email' => $faker->unique->email,
        		'address' => $faker->city,
        		'birthday' => $faker->date("Y-m-d H:i:s"),
        		'permission'=>'1'
        	]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        //lets make sure everyone has the same password
        //lets hash it before the loop or else the seeder will be very slow

        $password = Hash::make('demo123');
        User::create([
           'name'=> 'administrator',
            'email' => 'admin@test.com',
            'password' => $password
        ]);
        $faker = \Faker\Factory::create();
        for($i=0;$i<10;$i++)
        {
            User::create([
               'name' => $faker->name,
                'email'=>$faker->email,
                'password'=>$password
            ]);
        }
    }
}

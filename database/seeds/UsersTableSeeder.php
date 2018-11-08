<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => str_random(10),
            'email' => 'tranluong@gmail.com',
            'address'=>str_random(20),
            'phoneNumber' =>'0123456789',
            'password' => bcrypt('123456'),
        ];
        DB::table('users')->insert($user);
       
        
    }
}

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
        	'name' => "Fatima",
        	'username' => "Fatima",
            'email' => "fatimavi2009@gmail.com",
            'password' => bcrypt('secret001Abc'),
        ]);

        DB::table('users')->insert([
        	'name' => "Oscar",
        	'username' => "Oscar",
            'email' => "ofmontana@gmail.com",
            'password' => bcrypt('secret001Abc'),
        ]);

        DB::table('users')->insert([
        	'name' => "Alejandro",
        	'username' => "Alejandro",
            'email' => "alejandrobernalcollazos@gmail.com",
            'password' => bcrypt('58145Abc'),
        ]);
    }
}

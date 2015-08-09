<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
        	'name' => "Fatima",
            'last_name' => "Vieira",
            'dni' => "1234567",
            'birth_date' => "1986-09-16",
            'street_name' => "Calle",
            'street_number' => "1",
            'floor' => "1",
            'department' => "1",
            'neightborhood' => "Las condes",
            'country' => "Brazil",
            'province' => "Sao Paulo",
            'locality' => "Sao Paulo",
            'postal_code' => "60000",
            'cell_phone' => "2589631",
            'phone' => "3333333",
            'phone_at_work' => "555555",
            'email' => "email@prueba.com",
            'facebook' => "el-face@defa.com",
        ]);

        DB::table('people')->insert([
            'name' => "Oscar",
            'last_name' => "Montana",
            'dni' => "1234567",
            'birth_date' => "1986-09-16",
            'street_name' => "Calle",
            'street_number' => "1",
            'floor' => "1",
            'department' => "1",
            'neightborhood' => "Las condes",
            'country' => "Brazil",
            'province' => "Sao Paulo",
            'locality' => "Sao Paulo",
            'postal_code' => "60000",
            'cell_phone' => "2589631",
            'phone' => "3333333",
            'phone_at_work' => "555555",
            'email' => "oscar@prueba.com",
            'facebook' => "el-face@deoscar.com",
        ]);
    }
}
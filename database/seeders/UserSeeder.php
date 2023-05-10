<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = hash("sha256", '12345678');
        
        DB::table('users')->create([
            'name'=>'Oriole Elsa',
            'email'=> 'eoriole98@gmail.com',
            'password'=> $password,
            'username'=> 'oriole',
            'address' => 'Yaoundé',
            'phone' => '689809',
            'status' => 1,
            'country_id'=> 1,
            'gender' => 'F',
        ]);
    }
}

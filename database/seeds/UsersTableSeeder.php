<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Staff;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'email' => 'kuri.fashionbd@gmail.com',
        	'password' => bcrypt('kuri@admin'),
        	'user_role' => '1',
        	'user_status' => '1',
        ]);
        Staff::create([
            'first_name' => 'Kuri',
            'last_name' => 'Fashion',
            'phone' => '01876230204',
            'user_id' => '1',
            
        ]);
    }
}

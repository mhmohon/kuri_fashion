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
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('adminn'),
        	'user_role' => '1',
        	
        ]);
        Staff::create([
            'first_name' => 'Mosharrf',
            'last_name' => 'Hossain',
            'phone' => '01625474550',
            'user_id' => '1',
            
        ]);
    }
}

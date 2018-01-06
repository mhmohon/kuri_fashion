<?php

use Illuminate\Database\Seeder;
use App\User;
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
        	'first_name' => 'Mosharrf',
        	'last_name' => 'Hossain',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('adminn'),
        	'user_role' => '1',
        	'phone' => '01625474550',
        ]);
    }
}

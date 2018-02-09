<?php

use Illuminate\Database\Seeder;
use App\PaymentMethod;
class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create([
        	
        	'method_detail' => 'Cash On Delivery',
        	
        ]);
    }
}

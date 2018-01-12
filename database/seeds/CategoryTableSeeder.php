<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'cat_name' => 'Kurti',
            'cat_description' => '',
        	'publication_status' => '1',
        ]);
        Category::create([
        	'cat_name' => 'Casual',
        	'cat_description' => '',
            'publication_status' => '1',
        ]);
        Category::create([
        	'cat_name' => 'Hoodies & Sweatshirts',
        	'cat_description' => '',
            'publication_status' => '0',
        ]);
    }
}

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
        	'cat_name' => 'Gown',
        	'cat_description' => '',
            'publication_status' => '1',
        ]);
        Category::create([
        	'cat_name' => 'Anarkoli',
        	'cat_description' => '',
            'publication_status' => '1',
        ]);
        Category::create([
            'cat_name' => 'Abaya',
            'cat_description' => '',
            'publication_status' => '1',
        ]);
        Category::create([
            'cat_name' => 'Salwar kamiz',
            'cat_description' => '',
            'publication_status' => '1',
        ]);
        Category::create([
            'cat_name' => 'Palazzo',
            'cat_description' => '',
            'publication_status' => '1',
        ]);
        Category::create([
            'cat_name' => 'Burkha',
            'cat_description' => '',
            'publication_status' => '1',
        ]);
        Category::create([
            'cat_name' => 'Pakistani Lawn',
            'cat_description' => '',
            'publication_status' => '1',
        ]);

    }
}

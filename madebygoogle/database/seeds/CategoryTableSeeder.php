<?php

use App\Category;
use App\User;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Category::create(['categoryName' => 'Google Pixel']);
        Category::create(['categoryName' => 'Google Nest']);
    }
}

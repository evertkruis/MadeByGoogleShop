<?php

use App\Category;
use App\Product;
use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
            $categories = Category::all();

            $categories->each(function ($category) use ($products) {
                $category->product()->attach(
                    $products->random(random_int(1, 1))->pluck('id')
                );
        });
    }
}

<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        factory(\App\Product::class, 5)->create()->each(function ($product) {
            $product->review()->saveMany(factory(\App\Review::class, rand(0,5))
                ->create(['product_id' => $product->id] ));
        });
    }
}

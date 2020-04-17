<?php
use App\Review;
use App\Product;
use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(\App\Review::class, 5)->create()->each(function ($product) {
           $product->review()->saveMany(factory(Product::class, rand(0,1)
           ->create(['product_id' => $product->id] )));
        });
    }
}

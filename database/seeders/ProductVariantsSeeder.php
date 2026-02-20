<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Seeder;

class ProductVariantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::all()->each(function ($product) {
            $variants = [];
            for ($i = 0; $i < 3; $i++) {
                $variants[] = [
                    'product_id' => $product->id,
                    'name' => $product->title . ' Variant ' . ($i + 1),
                    'price' => $product->base_price + fake()->randomFloat(2, 0.5, 20),
                    'image_url' => "https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=640"
                ];
            }
            ProductVariant::insert($variants);
        });
    }
}

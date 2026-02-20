<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->shirt()->create([
            'title' => 'Basic Shirt',
            'description' => 'A stylish shirt inspired by The Great Gatsby.',
            'base_price' => 49.90,
        ]);

        Product::factory()->shirt()->create([
            'title' => 'Premium Shirt',
            'description' => 'A stylish shirt inspired by The Great Gatsby.',
            'base_price' => 79.90,
        ]);

        Product::factory()->shirt()->create([
            'title' => 'Oversized Shirt',
            'description' => 'A stylish shirt inspired by The Great Gatsby.',
            'base_price' => 69.90,
        ]);

        Product::factory()->mug()->create([
            'title' => 'Ceramic Mug',
            'description' => 'A minimalist mug inspired by Brave New World.',
            'base_price' => 29.90,
        ]);
        
        Product::factory()->mug()->create([
            'title' => 'Thermic Mug',
            'description' => 'A minimalist mug inspired by Brave New World.',
            'base_price' => 49.90,
        ]);
    }
}

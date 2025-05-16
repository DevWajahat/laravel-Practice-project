<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mobileCategory = Category::where('name', 'mobile')->first();

        $products = $mobileCategory->products()->createMany([
            [
                'name' => 'Samsung galaxy s24 ultra',
                'price' => '430',
                'description' => 'This is a mobile phone'
            ],
            [
                'name' => 'Iphone 16 pro max',
                'price' => '250',
                'description' => 'Best Selling PHone'
            ],
        ]);

        $attributes = Attribute::all();

        foreach ($attributes as $attr) {
            foreach ($products as $product) {
                $product->attributes()->attach($attr->id);
            }
        }

        $variants = Variant::all();
        foreach ($variants as $variant) {
            foreach ($products as $product) {
                $product->variants()->attach($variant->id);
            }
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        $productList = json_decode(file_get_contents(storage_path('mock/product_list.json')), true);
        foreach($productList as $productData) {
            $productData['slug'] = Str::slug($productData['name']);
            Product::query()->create($productData);
        }
    }

}

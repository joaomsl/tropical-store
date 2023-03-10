<?php

namespace Database\Seeders;

use App\Models\Product\Product;
use App\Models\Product\ProductInSet;
use App\Models\Product\ProductSet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSetSeeder extends Seeder
{
    
    private const MIN_PRODUCTS_PER_SET = 2;
    private const MAX_PRODUCTS_PER_SET = 5;

    public function run(): void
    {
        $productSetList = json_decode(file_get_contents(storage_path('mock/product_set_list.json')), true);

        $sets = [];
        foreach($productSetList as $productSetData) {
            $productSetData['slug'] = Str::slug($productSetData['name']);
            $productSetData['discount'] = mt_rand(0, 50);
            $sets[] = ProductSet::query()->create($productSetData);
        }

        $allProducts = Product::all();
        foreach($sets as $productSet) {
            $totalOfProducts = mt_rand(self::MIN_PRODUCTS_PER_SET, min($allProducts->count(), self::MAX_PRODUCTS_PER_SET));
            $allProducts
                ->random($totalOfProducts)
                ->each(fn(Product $product) => $this->putProductInSet($product, $productSet));
        }
    }

    protected function putProductInSet(Product $product, ProductSet $set): void 
    {
        ProductInSet::query()->create([
            'product_id' => $product->id,
            'product_set_id' => $set->id,
            'product_count' => mt_rand(1, 5)
        ]);
    }
}

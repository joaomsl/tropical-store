<?php

namespace App\Http\Livewire;

use App\Models\Product\Product;
use Livewire\Component;

class BestProducts extends Component
{

    public $bestProducts;

    public function mount() {
        $this->bestProducts = Product::query()
            ->orderBy('sales_amount', 'DESC')
            ->limit(8)
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.best-products');
    }
}

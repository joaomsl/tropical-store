<?php

namespace App\Models\Product;

use App\Models\Product\Contracts\IProduct;
use App\Models\Product\Traits\HasDiscount;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductSet extends Model implements IProduct
{
    use HasFactory, HasDiscount;

    protected $fillable = [
        'name', 
        'slug',
        'description', 
        'discount',
        'action_banner_path',
        'action_name'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(ProductInSet::class);
    }
    
    protected function getDiscountPercent(): int 
    {
        return $this->discount;
    }
    protected function getBasePriceCentsForDiscount(): int 
    {
        return $this->getInitialPriceCents();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getInitialPriceCents(): int
    {
        $sumClosure = function(ProductInSet $productInSet): int {
            return $productInSet->product->getInitialPriceCents() * $productInSet->product_count;
        };
        return $this->products->sum($sumClosure);
    }

    public function getSalePriceCents(): int
    {
        return $this->priceWithDiscount();
    }
    
}

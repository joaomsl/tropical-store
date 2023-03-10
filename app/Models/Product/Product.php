<?php

namespace App\Models\Product;

use App\Models\Product\Contracts\IProduct;
use App\Models\Product\Traits\HasDiscount;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model implements IProduct
{
    use HasFactory, HasDiscount;

    protected $fillable = [
        'name', 
        'slug',
        'description', 
        'price_cents', 
        'discount', 
        'image_path'
    ];

    public function sets(): HasMany
    {
        return $this->hasMany(ProductInSet::class);
    }

    protected function getBasePriceCentsForDiscount(): int
    {
        return $this->getInitialPriceCents();
    }

    protected function getDiscountPercent(): int
    {
        return $this->discount ?? 0;
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
        return $this->price_cents;
    }

    public function getSalePriceCents(): int 
    {
        return $this->priceWithDiscount();
    }

}

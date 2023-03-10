<?php 

namespace App\Models\Product\Traits;

trait HasDiscount 
{

    protected abstract function getDiscountPercent(): int;

    protected abstract function getBasePriceCentsForDiscount(): int;
    
    public function hasDiscount(): bool 
    {
        return $this->getDiscountPercent() > 0;
    }

    public function calculateDiscount(): int 
    {
        $productPrice = $this->getBasePriceCentsForDiscount();
        return $this->hasDiscount() ? ($productPrice * $this->getDiscountPercent()) / 100 : 0;
    }

    public function priceWithDiscount(): int 
    {
        $productPrice = $this->getBasePriceCentsForDiscount();
        if(!$this->hasDiscount()) {
            return $productPrice;            
        }

        return $productPrice - $this->calculateDiscount();
    }

}
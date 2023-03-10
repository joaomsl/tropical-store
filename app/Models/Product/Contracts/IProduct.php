<?php 

namespace App\Models\Product\Contracts;

interface IProduct 
{

    public function getName(): string;

    public function getDescription(): string;

    public function getInitialPriceCents(): int;

    public function getSalePriceCents(): int;

    public function hasDiscount(): bool;
    
    public function calculateDiscount(): int;
    
    public function priceWithDiscount(): int;

}
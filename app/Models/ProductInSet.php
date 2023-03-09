<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductInSet extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'product_set_id', 'discount'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function set(): BelongsTo
    {
        return $this->belongsTo(ProductSet::class);
    }
    
}

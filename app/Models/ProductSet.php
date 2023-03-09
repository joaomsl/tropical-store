<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductSet extends Model
{
    use HasFactory;

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
    
}

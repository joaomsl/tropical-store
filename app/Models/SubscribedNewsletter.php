<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SubscribedNewsletter extends Model
{
    
    use HasFactory, HasUuids;

    protected $fillable = ['email'];

    public function newUniqueId()
    {
        return (string)Str::uuid();
    }

    public function uniqueIds()
    {
        return ['unsubscribe_token'];
    }

}

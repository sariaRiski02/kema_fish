<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'id_category',
    ];

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($product) {
            $product->category()->dissociate();
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

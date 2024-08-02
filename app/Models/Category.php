<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($category) {
            $category->products()->delete();
        });
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

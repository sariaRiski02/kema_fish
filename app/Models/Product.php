<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primary = 'id';
    protected $typeKey = 'string';
    public $incrementing = false;
    public $timestamps = true;


    protected $fillable = [
        'name',
        'price',
        'entity_product',
        'image',

        'detail_description',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getkeyName()} = (string) Str::uuid();
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'id_product', 'id');
    }

    public function product()
    {
        return $this->hasMany(Transaction::class, 'id_product', 'id');
    }
}

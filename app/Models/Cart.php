<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $primary = 'id';
    protected $keyType = 'string';
    public $timestamps = true;
    public $incrementing = false;


    protected $fillable = [
        'product_quantity',
        'total_amount',
    ];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getkeyName()} = (string) Str::uuid();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}

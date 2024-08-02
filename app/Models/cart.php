<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cart extends Model
{
    use HasFactory;

    public $table = 'cart';
    public $timestamps = true;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    protected $fillable = [
        'id_user',
        'id_product',
        'quantity',
        'amount_price',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
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

<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $typeKey = 'string';
    protected $primary = 'id';
    public $timestamps = true;
    public $incrementing = false;


    protected $hidden = [
        'password'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }

    public function category()
    {
        return $this->hasMany(Category::class, 'id_admin', "id");
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'id_admin', 'id');
    }
}

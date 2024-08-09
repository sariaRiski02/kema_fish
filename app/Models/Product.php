<?php

namespace App\Models;

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

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }
}

<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $keyType = 'string';
    protected $primary = 'id';
    public $incrementing = false;
    public $timestamps = false;


    protected $fillable = [
        'name',
        'description'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getkeyName()} = (string) Str::uuid();
        });
    }

    public function admin()
    {
        return $this->belongsTo(admin::class, 'id_admin', 'id');
    }
}

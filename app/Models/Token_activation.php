<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Token_activation extends Model
{
    use HasFactory;

    protected $table = 'tokens_activation';
    protected $keyType = 'string';
    protected $primary = 'id';
    public $timestamps = true;
    public $incrementing = false;


    protected $fillable = [
        'token',
        'expired_at',
        'is_active'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getkeyName()} = Str::uuid();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}

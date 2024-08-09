<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Token_session extends Model
{
    use HasFactory;

    protected $table = 'token_session';
    protected $keyType = 'string';
    protected $primary = 'id';
    public $timestamps = true;
    public $incrementing = false;

    protected $fillable = [
        'is_session',
        'token'
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
}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Ramsey\Uuid\Uuid;
use App\Models\Contact;
use Illuminate\Support\Str;
use Doctrine\Common\Lexer\Token;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasUuids;


    public $table = 'users';
    public $timestamps = true;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';


    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
            $model->token = (string) Str::uuid();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function tokenActivation()
    {
        return $this->hasMany(Token_Activation::class, 'id_user', 'id');
    }

    public function address()
    {
        return $this->hasMany(Address::class, 'id_user', 'id');
    }

    public function contact()
    {
        return $this->hasMany(Contact::class, 'id_user', 'id');
    }
}

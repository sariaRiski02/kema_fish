<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;


use App\Models\Cart;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Support\Str;
use App\Models\Token_session;
use App\Models\Token_activation;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasUuids;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = true;


    // auto load uuid on id column
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
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
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function contact()
    {
        return $this->hasMany(Contact::class, 'id_user', 'id');
    }

    public function address()
    {
        return $this->hasMany(Address::class, 'id_user', 'id');
    }

    public function category()
    {
        return $this->hasMany(Category::class, 'id_user', 'id');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'id_user', 'id');
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'id_user', 'id');
    }

    public function token_session()
    {
        return $this->hasMany(Token_session::class, 'id_user', 'id');
    }

    public function token_activation()
    {
        return $this->hasMany(Token_activation::class, 'id_user', 'id');
    }
}

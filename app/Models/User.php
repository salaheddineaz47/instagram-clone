<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MongoDB\Laravel\Auth\User as Authenticatable;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    // use HasFactory, Notifiable;
    use Notifiable;

    protected $connection = 'mongodb';

    protected $table = 'users';

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'profile_image',
        'bio',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function post(): HasMany
    {
        return $this->hasMany( Post::class);
    }

    public function like(): HasMany
    {
        return $this->hasMany( Like::class);
    }

    public function comment(): HasMany
    {
        return $this->hasMany( Comment::class);
    }
    // protected function casts(): array
    // {
    //     return [
    //         'email_verified_at' => 'datetime',
    //         'password' => 'hashed',
    //     ];
    // }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $connection = 'mongodb';

    protected $table = 'posts';

    protected $fillable = [
        'caption',
        'image_path',
        'image_url',
        'user_id',

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo( User::class);
    }

    public function comment(): HasMany
    {
        return $this->hasMany( Comment::class);
    }

    public function like(): HasMany
    {
        return $this->hasMany( Like::class);
    }

}

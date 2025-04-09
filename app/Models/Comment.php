<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    protected $connection = 'mongodb';

    protected $table = 'comments';

    protected $fillable = [
        'comment',
        'user_id',
        'post_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo( User::class);
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo( Post::class);
    }


}

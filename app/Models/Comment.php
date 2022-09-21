<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'post_id',
        'name',
        'email',
        'comment'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'post_id');
    }

    public function post(): HasMany
    {
        return $this->hasMany(Post::class, 'post_id');
    }

}

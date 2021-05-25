<?php

namespace App;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'post_id', 'content',
    ];

    /**
     * Each Topic belongs to a User.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Each comment belongs to a posts.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

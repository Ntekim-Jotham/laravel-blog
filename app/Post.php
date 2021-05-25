<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'body',
    ];

    /**
     * Each Post belongs to a Topic.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function topic ()
    // {
    //     return $this->belongsTo(Topic::class);
    // }

    /**
     * Each Post belongs to a User.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Each Post has many comments.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comments ()
    {
        return $this->hasMany(Comment::class);
    }

}

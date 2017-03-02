<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'Post';

    public function owner()
    {
        return $this->belongsTo(User::class, 'ownerID', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'postID', 'id');
    }
}

<?php

// Comment.php (app\Models\Comment.php)

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'user_id', 'content', 'name','comment_count', 'email']; // Assuming a comment belongs to a post and a user

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

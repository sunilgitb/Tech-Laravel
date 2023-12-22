<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\User;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','description', 'image', 'slug','user_id','publish', 'meta_title','meta_description', 'meta_keywords', 'cat_id', 'tag_id'];


    public function getPreviousPostAttribute()
    {
        return $this->where('id', '<', $this->id)->latest()->first();
    }

    public function getNextPostAttribute()
    {
        return $this->where('id', '>', $this->id)->oldest()->first();
    }

    

public function user()
    {
        return $this->belongsTo(User::class);
    }


// public function setTitleAttribute($value)
// {
//     $this->attributes['title'] = $value;
//     $this->attributes['slug'] = Str::slug($value);
// }

// public function getSlugAttribute()
// {
//     return Str::slug($this->title);
// }

// // Override the route key name to use the 'slug' column
// public function getRouteKeyName()
// {
//     return 'slug';
// }



public function category()
{
    return $this->belongsTo(Category::class, 'cat_id');
}


public function tags() {
    return $this->belongsToMany(Tag::class);
}

public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

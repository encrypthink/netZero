<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = [
        'id',
        'title',
        'main_image',
        'body',
        'slug',
        'author_id',
        'post_status',
        'comment_status',
    ];
    protected $primaryKey = "id";

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->hasMany(PostCategory::class);
    }
}

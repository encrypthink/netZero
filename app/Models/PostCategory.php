<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = "meta_posts_category";
    protected $fillable = [
        "id",
        "post_id",
        "category_id"
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = "pages";
    protected $fillable = [
        "title",
        "slug",
        "body"
    ];
    protected $primaryKey = "id";
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
    protected $table = "themes";
    protected $fillable = [
        "id",
        "table",
        "path",
        "author",
        "version"
    ];
    protected $primaryKey = "id";
}

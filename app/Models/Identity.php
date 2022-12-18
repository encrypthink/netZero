<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    protected $table = "identity";
    protected $fillable = [
        "name",
        "description",
        "site_url",
        "administrator_email"
    ];

    protected $primaryKey = "id";
}

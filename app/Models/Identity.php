<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    protected $table = "website_identity";
    protected $fillable = [
        "name",
        "description",
        "site_url",
        "administrator_email"
    ];

    protected $primaryKey = "id";
}

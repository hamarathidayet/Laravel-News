<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sosyal extends Model
{
    protected $table = "sosyal";

    protected $fillable = [
        "facebook",
        "instagram",
        "twitter",
        "mail"
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yorum extends Model
{
    use HasFactory;
    protected $table = "yorum";

    protected $fillable = [
        'haber_id',
        'kullanici_ad',
        'kullanici_soyad',
        'yorum'
    ];
}

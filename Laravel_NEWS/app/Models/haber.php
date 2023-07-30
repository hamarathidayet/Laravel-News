<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class haber extends Model
{
   protected $table="haber";
   protected $fillable=[
    "konu",
    "baslik",
    "resim",
    "haber_kategori_id",
    "gazeteci_id",
    "gazeteci_ad_soyad",
   ];

}

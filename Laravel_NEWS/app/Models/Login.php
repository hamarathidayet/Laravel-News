<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table="user";

    protected $fillable = ['kullanici_ad', 'kullanici_soyad', 'kullanici_mail',"kullanici_sifre","kullanici_yetki"];
}

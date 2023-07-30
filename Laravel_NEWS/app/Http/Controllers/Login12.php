<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\kategori;
use Illuminate\Http\Request;
use App\Models\sosyal;

class Login12 extends Controller
{
    public function login(Request $request)
    {

        $ch = Login::where("kullanici_mail", $request->mail)->where("kullanici_sifre", $request->pass)->first();
        if ($ch) {
            session(["kullanici_ad" => $ch->kullanici_ad, "kullanici_soyad" => $ch->kullanici_soyad, 'kullanici_yetki' => $ch->kullanici_yetki, 'kullanici_id' => $ch->id]);
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->forget('kullanici_id');
        session()->forget('kullanici_yetki');
        return redirect("index");
    }

    public function register_index()
    {
        if (session("kullanici_id")) {
            return redirect()->back();
        }
        $k_ch = kategori::get();
        $sosyal = sosyal::first();

        return view("register", compact("k_ch", 'sosyal'));
    }

    public function register_nw(Request $request)
    {
        $request->validate(
            [
                "mail" => "required|email|min:13",
                "ad" => "required|min:3|max:15",
                "soyad" => "required|min:3|max:15",
                "pass" => "required|min:8|max:16"
            ]
        );
        $ch = Login::where("kullanici_mail", $request->mail)->first();

        if ($ch) {
            session(["kontrol" => "kullanici_var"]);
            return redirect()->back();
        } else {
            if ($request->mail != $request->mail2) {
                session(["kontrol" => "uyuşmayan_mail"]);
                return redirect()->back();
            } else {
                $ad = $request->ad;
                $soyad = $request->soyad;
                $mail = $request->mail;
                $pass = $request->pass;

                $new_user = [
                    "kullanici_ad" => $ad,
                    "kullanici_soyad" => $soyad,
                    "kullanici_mail" => $mail,
                    "kullanici_sifre" => $pass,
                    "kullanici_yetki" => 0
                ];
                $done = Login::create($new_user);
                if ($done) {
                    session(["kontrol" => "yeni_kullanici"]);
                    return redirect(route("giris-yap"));
                } else {
                    session(["kontrol" => "database_error"]);
                    return redirect()->back();
                }
            }

        }

    }

    public function bilgi()
    {
        $k_ch = kategori::get();
        $sosyal = sosyal::first();
        $ch = Login::whereId(session("kullanici_id"))->first();
        return view("hesap-bilgileri", compact("k_ch", "sosyal", "ch"));
    }

    public function sifre()
    {
        $k_ch = kategori::get();
        $sosyal = sosyal::first();
        $ch = Login::whereId(session("kullanici_id"))->first();
        return view("sifre-islemleri", compact("k_ch", "sosyal", "ch"));
    }

    public function bilgi_güncelle(Request $request)
    {
        $ch = Login::whereId(session("kullanici_id"))->first();
        if ($ch->kullanici_sifre == $request->pass) {
            $update = [
                "kullanici_ad" => $request->ad,
                "kullanici_soyad" => $request->soyad,
                "kullanici_sifre" => $request->pass
            ];
            $vr = Login::whereId(session("kullanici_id"))->update($update);
            if ($vr) {
                session(["konu" => "basarili", "kullanici_ad" => $request->ad, "kullanici_soyad" => $request->soyad]);
                return redirect()->back();
            }

        } else {
            session(["konu" => "hatali_parola"]);
            return redirect()->back();
        }
    }

    public function sifre_güncelle(Request $request)
    {
        $request->validate(
            [
                "new_1" => "required|min:8|max:16"
            ]);

        $ch = Login::whereId(session("kullanici_id"))->first();
        if ($request->new_1 == $request->new_2) {

            if ($ch->kullanici_sifre == $request->pass) {
                $update = [
                    "kullanici_sifre" => $request->new_1
                ];
                $vr = Login::whereId(session("kullanici_id"))->update($update);
                if ($vr) {
                    session(["konu" => "basarili"]);
                    return redirect()->back();
                }

            } else {
                session(["konu" => "hatali_parola"]);
                return redirect()->back();
            }
        } else {

            session(["konu" => "uyusmayan_sifre"]);
            return redirect()->back();
        }
    }
}

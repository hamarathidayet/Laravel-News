<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\haber;
use App\Models\kategori;
use App\Models\sosyal;
use App\Models\Login;

class admin extends Controller
{
    public function genel_ayar()
    {
        $ch = sosyal::first();
        return view("nebu/genel-ayar", compact("ch"));
    }

    public function index()
    {

        return view("nebu.index");

    }
    public function haber_all_admin()
    {
        $ch = haber::get();
        return view("nebu.haber", compact('ch'));
    }

    public function haber_sil($id)
    {

        $ch = haber::whereId($id)->delete();
        if ($ch) {
            return redirect()->back();
        }

    }
    public function haber_insert_index()
    {
        $ch = kategori::get();
        return view("nebu.haber-ekle", compact("ch"));
    }
    public function haber_insert(Request $request)
    {
        $insert = [
            "baslik" => $request->baslik,
            "konu" => $request->konu,
            "haber_kategori_id" => $request->kategori,
            "resim" => $request->resim,
            "gazeteci_ad_soyad" => session('kullanici_ad') . ' ' . session('kullanici_soyad'),
            "gazeteci_id" => session("kullanici_id"),
        ];
        $ch = haber::create($insert);
        if ($ch) {
            session(["konu" => "ekleme"]);
            return redirect()->back();
        }
    }

    public function kategori_list()
    {
        $ch = kategori::get();
        return view("nebu.kategori-ekle", compact("ch"));
    }
    public function kategori_insert(Request $request)
    {
        $insert = [
            "kategori_ad" => $request->kategori_ad,
            "kategori_logo" => $request->kategori_ikon
        ];
        $ch = kategori::create($insert);
        if ($ch) {
            session(["konu" => "ekleme"]);
            return redirect()->back();
        }

    }

    public function update_sosyal(Request $request)
    {
        $update = [
            "facebook" => $request->facebook,
            "twitter" => $request->twitter,
            "instagram" => $request->instagram,
            "mail" => $request->mail
        ];
        $ch = sosyal::whereId(1)->update($update);
        if ($ch) {
            session(["konu" => "update"]);
            return redirect()->back();
        }
    }

    public function üye_lis()
    {
        $ch = Login::where("kullanici_yetki", 0)->get();
        return view("nebu.admin-üye", compact('ch'));
    }
    public function gazeteci_y($id)
    {
        $ch = Login::whereId($id)->update(["kullanici_yetki" => 2]);
        if ($ch) {
            session(["konu" => "yetkilendirme"]);
            return redirect()->back();
        }
    }

    public function gazete_lis()
    {
        $ch = Login::where("kullanici_yetki", 2)->get();
        return view("nebu.admin-gazete", compact('ch'));
    }

    public function yönetici_y($id)
    {
        $ch = Login::whereId($id)->update(["kullanici_yetki" => 1]);
        if ($ch) {
            session(["konu" => "yetkilendirme"]);
            return redirect()->back();
        }
    }

    public function düsür_y($id)
    {
        $ch = Login::whereId($id)->update(["kullanici_yetki" => 0]);
        if ($ch) {
            session(["konu" => "yetkilendirme_d"]);
            return redirect()->back();
        }
    }

    public function yönetici_lis()
    {
        $ch = Login::where("kullanici_yetki", 1)->get();
        return view("nebu.admin-yönetici", compact('ch'));
    }

}

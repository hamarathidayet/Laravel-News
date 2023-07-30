<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\haber;
use App\Models\yorum;
use App\Models\kategori;
use App\Models\sosyal;




class haber12 extends Controller
{


    public function index()
    {
        $k_ch = kategori::get();
        $ch = haber::all();
        $sosyal=sosyal::first();
        return view("index", compact('ch'), compact('k_ch','sosyal'));
    }

    public function detay($seo, $id)
    {
        $ch = haber::find($id);
        $k_ch = kategori::get();
        $sosyal=sosyal::first();
        session(["haber_id" => $id]);
        $nb = $haber = yorum::where('haber_id', $id)->get();
        return view("haber-detay", compact('ch', 'nb', 'k_ch','sosyal'));
    }
    public function girisyap()
    {
        if (session("kullanici_id")) {
            return redirect("index");
        }
        $k_ch = kategori::all();
        $sosyal=sosyal::first();
        return view("girisyap", compact('k_ch','sosyal'));
    }

    public function yorum(Request $request)
    {
        $request->validate([
            "yorum" => "required|min:4"
        ]);
        $insert_message = [
            "kullanici_ad" => session("kullanici_ad"),
            "kullanici_soyad" => session("kullanici_soyad"),
            "yorum" => $request->yorum,
            "haber_id" => session("haber_id"),


        ];
        $y_oke = yorum::create($insert_message);
        if ($y_oke) {
            session(["kontrol" => "yorum_eklendi"]);
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function header()
    {
        $k_ch = kategori::get();
        return view("header", compact('k_ch','sosyal'));
    }

    public function kategori($seo, $id)
    {
        $ch = haber::where("haber_kategori_id", $id)->get();
        $k_ch = kategori::get();
        $sosyal=sosyal::first();
        return view("haber-kategori", compact("ch", "k_ch",'sosyal'));

    }
    public function search(Request $request)
    {
        $ch = haber::where('konu', 'like', '%' . $request->search . '%')
            ->get();
        $k_ch = kategori::get();
        $sosyal=sosyal::first();
        return view("arama", compact("ch", "k_ch",'sosyal'));
    }

}

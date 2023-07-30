<?php

use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\haber12;
use App\Http\Controllers\Login12;
use App\Http\Controllers\admin;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/giris-yap",[haber12::class,"girisyap"])->name("giris-yap");
Route::get("/kayıt-ol",[Login12::class,"register_index"])->name("register");
route::get("haber", [haber12::class, "index"]);
route::get("/", [haber12::class, "index"]);
route::get("index", [haber12::class, "index"])->name("index");
route::get("haber-detay-{seo}/{id}", [haber12::class, "detay"])->name("detay");
route::post("login", [Login12::class, "login"])->name("login");
route::get("logaout", [Login12::class, "logout"])->name("logout");
route::post("yeni-kullanici",[Login12::class,"register_nw"])->name("register_new");
route::post("görüs-gönder",[haber12::class,"yorum"])->middleware("islem")->name("yorum");
route::get("admin",[admin::class,"index"])->middleware("sorgu")->name("admin");
route::get("header",[haber12::class,"header"]);
route::get("kategori/{seo}/{id}",[haber12::class,"kategori"])->name("kategori");
route::get("serach",[haber12::class,"search"])->name("search");
route::get("genel",[admin::class,"genel_ayar"])->middleware("sorgu")->name("genel");
route::get("haberler_all_admin",[admin::class,"haber_all_admin"])->middleware("sorgu")->name("haber_admin");
Route::get('/haber_sil/{id}', [admin::class,"haber_sil"])->middleware("sorgu")->name('haber_sil');
route::get("haber_insert_index",[admin::class,"haber_insert_index"])->middleware("sorgu")->name("haber_insert_index");
route::post("haber_ekle",[admin::class,"haber_insert"])->middleware("sorgu")->name("haber_ekle");
route::get("kategori_",[admin::class,"kategori_list"])->middleware("sorgu")->name("kategori_");
route::post("ketgori_ekle",[admin::class,"kategori_insert"])->middleware("sorgu")->name("kategori_ekle");
route::post("guncelle_soyal",[admin::class,"update_sosyal"])->middleware("sorgu")->name("guncelle_sosyal");
route::get("üye-listele",[admin::class,"üye_lis"])->middleware("sorgu")->name("üye_lis");
route::get("yetki_g/{id}",[admin::class,"gazeteci_y"])->middleware("sorgu")->name("yetki_gazete");
route::get("gazete-listele",[admin::class,"gazete_lis"])->middleware("sorgu")->name("gazete_lis");
route::get("yetki_y/{id}",[admin::class,"yönetici_y"])->middleware("sorgu")->name("yetki_yönetici");
route::get("yetki_d/{id}",[admin::class,"düsür_y"])->middleware("sorgu")->name("yetki_düsür");
route::get("yönetici-listele",[admin::class,"yönetici_lis"])->middleware("sorgu")->name("yönetici_lis");
route::get("hesap-bilgileri",[Login12::class,"bilgi"])->middleware("islem")->name("hesap-bilgileri");
route::post("bilgi_güncelle",[Login12::class,"bilgi_güncelle"])->middleware("islem")->name("bilgi_güncelle");
route::get("sifre-islemleri",[Login12::class,"sifre"])->middleware("islem")->name("sifre-islemleri");
route::post("sifre_güncelle",[Login12::class,"sifre_güncelle"])->middleware("islem")->name("sifre_güncelle");


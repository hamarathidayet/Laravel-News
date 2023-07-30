@include('seo')
@include ('header')
<br><br><br><br><br>
<div class="container">

    <div align="center">
        <div class="text-white">Kullanıcı Mail: {{ $ch->kullanici_mail }}</div>
        <br>
         <!-- Uyarı Mesajları Başlangıç -->
         @if (session('konu') == 'hatali_parola')
         <div class="alert alert-danger text-center">PAROLA UYUŞMUYOR!!!</div>
         @php
             session()->forget('konu');
         @endphp
     @endif
     @if (session('konu') == 'basarili')
     <div class="alert alert-success text-center">Güncelleme Başarılı</div>
     @php
         session()->forget('konu');
     @endphp
 @endif

        <div style="border-radius: 25px;" class="col-md-6 bg-dark text-white container">

            <br><br>
            <h4><i class="fa-solid fa-newspaper"></i> HTAS - HABER</h4>
            <h4>Kullanıcı Bilgileri</h4>
            <br><br>
            <form action="{{ route("bilgi_güncelle") }}" method="post">
                @csrf
                <label>Kullanıcı Adı: {{ $ch->kullanici_ad }}</label>
                <input type="text" class="form-control text-center" autocomplete="off" placeholder="Yeni kullanıcı adı"
                    name="ad">
                <br>
                <label>Kullanıcı Soyadı: {{ $ch->kullanici_soyad }}</label>
                <input type="text" class="form-control text-center" placeholder="Yeni kullanıcı soyadı "
                    name="soyad">
                <br>
                <label>Şifrenizi doğrulayın</label>
                <input type="password" class="form-control text-center" placeholder="Şifrenizi Giriniz " name="pass">
                <br><br>
                <input type="submit" class="btn btn-outline-success btn-lg" value="Değiştir" name="giris">
            </form>
            <br>
            <hr>
        </div>
    </div>
</div>

<br><br><br><br><br><br>
@include('foother')

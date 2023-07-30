@include('seo')
@include ('header')
<br><br><br><br><br>
<div class="container">

    <div align="center">
        <div class="text-white">Kullanıcı Mail: {{ $ch->kullanici_mail }}</div>
        <br>
        <!-- Uyarı Mesajları Başlangıç -->

        <!-- Uyuşmayan Parola -->
        @if (session('konu') == 'hatali_parola')
            <div class="alert alert-danger text-center">PAROLA UYUŞMUYOR!!!</div>
            @php
                session()->forget('konu');
            @endphp
        @endif
        <!-- Uyuşmayan Yeni Parola -->
        @if (session('konu') == 'uyusmayan_sifre')
            <div class="alert alert-danger text-center">Şifrenizi iki (2) kere doğru bir şekilde giriniz!!!</div>
            @php
                session()->forget('konu');
            @endphp
        @endif
        <!-- Başırılı -->
        @if (session('konu') == 'basarili')
            <div class="alert alert-success text-center">Güncelleme Başarılı</div>
            @php
                session()->forget('konu');
            @endphp
        @endif
        <!-- dönen hata mesajları -->
        @if ($errors->any())


            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-center">{{ $error }}</div>
            @endforeach


        @endif
        <!-- Uyarılar bitiş -->
        <div style="border-radius: 25px;" class="col-md-6 bg-dark text-white container">

            <br><br>
            <h4><i class="fa-solid fa-newspaper"></i> HTAS - HABER</h4>
            <h4>Şifre İşlemleri</h4>
            <br><br>
            <form action="{{ route('sifre_güncelle') }}" method="post">
                @csrf
                <label>Yeni Şifreniz</label>
                <input type="text" class="form-control text-center" autocomplete="off" placeholder="Yeni Şifre"
                    name="new_1">
                <br>
                <label>Yeni Şifrenizi Tekrar Giriniz</label>
                <input type="text" class="form-control text-center" placeholder="Yeni Şifre " name="new_2">
                <br>
                <label>Eski Şifrenizi Doğrulayın</label>
                <input type="password" class="form-control text-center" placeholder="Eski Şifre " name="pass">
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

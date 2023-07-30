@include("seo")
@include('header')
<br><br><br><br><br>
<div class="container">

    <div align="center">

        <div style="border-radius: 25px;" class="col-md-10 bg-dark text-white container">
            <br><br>
            <h4><i class="fa-solid fa-newspaper"></i> HTAS - HABER</h4>
            <h4>Kayıt</h4>
            <br><br>
            <!-- Uyarı Mesajları Başlangıç -->
            @if (session('kontrol') == 'kullanici_var')
                <div class="alert alert-danger text-center">BÖYLE BİR MAİL ADRESİ MEVCUTTUR!!</div>
                @php
                    session()->forget('kontrol');
                @endphp
            @endif

            @if (session('kontrol') == 'uyuşmayan_mail')
                <div class="alert alert-danger text-center">LÜTFEN MAİL ADRESİNİ İKİ (2) KERE DOĞRU GİRDİĞİNİZDEN EMİN
                    OLUN</div>
                @php
                    session()->forget('kontrol');
                @endphp
            @endif
            @if ($errors->any())


                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger text-center">{{ $error }}</div>
                @endforeach


            @endif
            <!-- Uyarı Mesajları Bitiş -->
            <br><br>
            <form action="{{ route('register_new') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" required autocomplete="off" class="form-control text-center"
                            placeholder="Ad" name="ad">

                    </div>
                    <div class="col-md-6">
                        <input type="text" required autocomplete="off" class="form-control text-center"
                            placeholder="Soyad" name="soyad">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <input type="email" required autocomplete="off" class="form-control text-center"
                            placeholder="Mail Adresinizi Girin" name="mail">

                    </div>
                    <div class="col-md-6">
                        <input type="email" required autocomplete="off" class="form-control text-center"
                            placeholder="Mail Adresinizi Tekrar Girin" name="mail2">

                    </div>
                </div>
                <br>
                <input type="password" class="form-control text-center" placeholder="Şifre " name="pass">
                <br><br>
                <input type="submit" class="btn btn-outline-success btn-lg" value="Kayıt OL" name="kayıt">
            </form>


            <br><br>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br>



@include ('foother')

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>HTAS - Haber </title>


    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

</head>

<body style="background-color:rgb(51, 51, 51);font-family: 'Roboto Slab', serif;">


    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><i class="fa-solid fa-newspaper"></i> HTAS - HABER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-5 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('index') }}"><i
                                class="fa-solid fa-house"></i> Ana Sayfa</a>
                    </li>





                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-newspaper"></i>
                            Haberler
                        </a>



                        <ul class="bg-dark dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($k_ch as $key)
                                <li>
                                    <a href="{{ route('kategori', ['seo' => Str::slug($key->kategori_ad), 'id' => $key->id]) }}"
                                        class="text-white dropdown-item"><i class="{{ $key->kategori_logo }}"></i>
                                        {{ $key->kategori_ad }}</a>
                                </li>
                            @endforeach


                        </ul>
                    </li>
                    @if (session('kullanici_id'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><img src="" width="30px"
                                    style="border-radius:80px"><i class="fa-solid fa-user"></i>
                                {{ session('kullanici_ad') . ' ' . session('kullanici_soyad') }}
                                @if (session('kullanici_yetki') == 1)
                                    {{ '( Yönetici )' }}
                                @endif

                                @if (session('kullanici_yetki') == 2)
                                    {{ '( Gazeteci )' }}
                                @endif
                            </a>
                            <ul class="bg-dark dropdown-menu" aria-labelledby="navbarDropdown">


                                <li><a class="text-white dropdown-item" href="{{ route("hesap-bilgileri") }}">Hesap Bilgileri</a></li>
                                <li><a class="text-white dropdown-item" href="{{ route("sifre-islemleri") }}">Şifre Değişikliği</a></li>
                                <li>
                                    <hr class="text-white dropdown-divider">
                                </li>
                                @if (session('kullanici_yetki') == 1 or session('kullanici_yetki') == 2 )
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="{{ route('admin') }}"><i
                                                class="fa-solid fa-gears"></i>
                                            Yönetim Paneli</a>
                                    </li>
                                @endif
                                <li><a class="text-white dropdown-item" href="{{ route('logout') }}">Çıkış Yap</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('giris-yap') }}"><i
                                    class="fa-solid fa-right-to-bracket"></i> Giriş
                                Yap</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><i
                                    class="fa-solid fa-person-circle-plus"></i> Kayıt
                                Ol</a>
                        </li>
                    @endif


                </ul>
                <form class="d-flex" action="{{ route('search') }}" method="GET">
                    @csrf

                    <button data-bs-target="#arama" data-bs-toggle="collapse" class="btn btn-outline-success  me-2"
                        type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <div id="arama" class="collapse fade">
                        <input class="form-control" name="search" type="search" placeholder="Aranacak kelimeyi girin."
                            aria-label="Search">
                    </div>

                </form>

            </div>
        </div>
    </nav>

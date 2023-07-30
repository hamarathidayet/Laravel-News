@if (session('kullanici_yetki') == 0 or !session('kullanici_yetki'))
    {{ 'İZİNSİZ GİRİŞ LÜTFEN BURADAN UZAKLAIŞIN' }}
@else
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HTAS - HABER</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">

        <!-- Chartist -->
        <!-- Font Awesome CDN Bağlantısı -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
            integrity="sha512-Z/YntVakDWoBNEz2Ia3mvEOGBqZM7tFzyekyjsjgbfj/v6kC9JRUghb4CluiG5lV90FQ68V/1+1csufZCpWxw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Custom Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    </head>

    <body style="background-color: rgb(240, 240, 240)">



        <!--**********************************
        Main wrapper start
    ***********************************-->
        <div id="main-wrapper">

            <!--**********************************
            Nav header start
        ***********************************-->
            <div class="nav-header">
                <div class="brand-logo">
                    <a href="{{ route('admin') }}">
                        <b class="logo-abbr"><b style="color:white">HTAS</b></b>
                        <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                        <span class="brand-title">
                            <b style="color:white">HTAS HABER</b>
                        </span>
                    </a>
                </div>
            </div>
            <!--**********************************
            Nav header end
        ***********************************-->

            <!--**********************************
            Header start
        ***********************************-->
            <div class="header">
                <div class="header-content clearfix">

                    <div class="nav-control">
                        <div class="hamburger">
                            <span class="toggle-icon"><i class="icon-menu"></i></span>
                        </div>
                    </div>
                    <div class="header-left">
                        <div class="input-group icons">
                            <div class="input-group-prepend">

                            </div>

                            <div class="drop-down animated flipInX d-md-none">
                                <form action="#">
                                    <input type="text" class="form-control" placeholder="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="header-right">
                        <ul class="clearfix">



                            <li class="dropdown"></li>
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="{{ route('index') }}"><i class="icon-lock"></i> <span>Devam
                                                    Et</span></a>
                                        </li>
                                        <li><a href="{{ route('logout') }}"><i class="icon-key"></i> <span>Çıkış
                                                    Yap</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

            <!--**********************************
            Sidebar start
        ***********************************-->
            <div class="nk-sidebar">
                <div class="nk-nav-scroll">
                    <ul class="metismenu" id="menu">
                        @if (session('kullanici_yetki') == 1)
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Genel
                                        Ayarlar</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('genel') }}">Sosyal Medya Hesap Ayarları</a></li>


                                </ul>
                            </li>

                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Kullancılar</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ route("üye_lis") }}">Üyeler</a></li>
                                    <li><a href="{{ route("gazete_lis") }}">Gazeteciler</a></li>
                                    <li><a href="{{ route("yönetici_lis") }}">Yöneticiler</a></li>

                                </ul>
                            </li>
                        @endif
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-envelope menu-icon"></i> <span class="nav-text">Haber ayarları</span>
                            </a>
                            <ul aria-expanded="false">
                                @if (session('kullanici_yetki') == 1)
                                <li><a href="{{ route('haber_admin') }}">Haberler</a></li>
                                <li><a href="{{ route('kategori_') }}">Kategori ayarları</a></li>
                                @endif
                                <li><a href="{{ route('haber_insert_index') }}">Yeni haber ekle</a></li>
                            </ul>
                        </li>

                        <ul>
                </div>
            </div>
            <!--**********************************
            Sidebar end
        ***********************************-->

            <!--**********************************
            Content body start
        ***********************************-->

            <div class="content-body">
@endif

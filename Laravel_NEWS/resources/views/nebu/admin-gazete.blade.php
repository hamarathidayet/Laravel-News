@include('nebu/adminheader')

<div align="center" class="mt-5 container">
    <h4 class="ml-2 text-danger">Burası 'Gazeteciler' sayfasıdır</h4>
    <hr class="bg-dark">
    @if (session('konu') == 'yetkilendirme')
    <div class="alert alert-success text-center">Kullanıcı Yetkilendirildi</div>
    @php
        session()->forget('konu');
    @endphp
    <hr class="bg-dark">
@endif

@if (session('konu') == 'yetkilendirme_d')
<div class="alert alert-danger text-center">Kullanıcının Yetkisi Alındı.</div>
@php
    session()->forget('konu');
@endphp
<hr class="bg-dark">
@endif
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Kullanıcı Ad-Soyad</th>
                <th>Kullanıcı mail</th>
                <th>Kullanıcı üyelik tarihi</th>
                <th>Kullanıcnın yetkisini kaldır</th>
                <th>Kullanıcıyı yetkilendir</th>
            </tr>
        </thead>
        <thead>
            @foreach ($ch as $key)
                <tr>
                    <td>{{ $key->id }}</td>
                    <td>{{ $key->kullanici_ad . ' ' . $key->kullanici_soyad }}</td>
                    <td>{{ $key->kullanici_mail }}</td>
                    <td>{{ $key->created_at }}</td>
                    <td>
                        <a class="btn btn-outline-danger" href="{{ route('yetki_düsür', ['id' => $key->id]) }}">
                            Üye olarak değiştir
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-outline-dark" href="{{ route('yetki_yönetici', ['id' => $key->id]) }}">
                            Yönetici olarak yetkilendir
                        </a>
                    </td>
                </tr>
            @endforeach
        </thead>
    </table>
    <hr class="bg-dark">

</div>




@include('nebu/adminfoother')

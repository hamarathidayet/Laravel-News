@include('nebu/adminheader')

<div align="center" class="mt-5 container">
    <h4 class="ml-2 text-danger">Burası 'Sosyal medya ayarlar' sayfasıdır</h4>
    <hr class="bg-dark">
    @if (session('konu') == 'update')
        <div class="alert alert-success">Güncellendi</div>
        <hr class="bg-dark">

        @php
            session()->forget("konu");
        @endphp
    @endif

    <form action="{{ route('guncelle_sosyal') }}" method="post">
        @csrf
        <i class="fa fa-facebook" aria-hidden="true"></i> Facebbok
        <input type="text" class="form-control col-md-7 text-center" name="facebook" value="{{ $ch->facebook }}">
        <i class="fa fa-instagram" aria-hidden="true"></i> İnsatgram
        <input type="text" class="form-control col-md-7 text-center" name="instagram" value="{{ $ch->instagram }}">
        <i class="fa fa-youtube" aria-hidden="true"></i> Twitter
        <input type="text" class="form-control col-md-7 text-center" name="twitter" value="{{ $ch->twitter }}">
        <i class="fa fa-paper-plane" aria-hidden="true"></i> Mail
        <input type="text" class="form-control col-md-7 text-center" name="mail" value="{{ $ch->mail }}">
        <hr class="bg-dark">
</div>
<div align="right" class="container">
    <input type="submit" value="Güncelle" class="btn btn-outline-primary btn-xl">
</div>
</form>


@include('nebu/adminfoother')

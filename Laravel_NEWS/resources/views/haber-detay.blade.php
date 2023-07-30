@include("seo")
@include ('header');



<br> <br> <br><br>
<div class="col-sm">
    <div class="container">
        <div class="row text-white ">

            <h1 class="text-warning text-center ">{{ $ch->baslik }}</h1>
            <br>
            <br>
<br>
            <br>

            <div class="col-md-12">
            <div align="right"><p>{{ $ch->created_at }} tarhinde  {{ $ch->gazeteci_ad_soyad }} tarafından yayınlandı.</p></div>
                <img style="width: 100%; height: 600px" src="{{ $ch->resim }}">
            </div>
            <div  class="col-md-12 mt-5">{{$ch->konu }}</div>

        </div>
        <br><br><br>
        <div style="border-radius:10px" class="row btn-dark bg-dark text-white">

            <h3 class="text-center mt-3"><b>Yorumlar</b></h3>
            <br><br><br>
            @if (session('kontrol') == 'yorum_eklendi')
                <div class="container">
                    <div class="alert alert-success text-center">Görüşünüz için teşşekür ederiz.</div>
                    <br>
                </div>
                @php
                    session()->forget("kontrol");
                @endphp
            @endif
            <hr>
            @foreach ($nb as $key)
                <div>
                    <div class="col-md-12 text-danger">
                        <img width="40px" style="border-radius:50px" src="">
                        <label> {{ $key->kullanici_ad . ' ' . $key->kullanici_soyad }} </label>

                    </div>
                    <br>
                    <div>
                        <p>{{ $key->yorum }}</p>

                    </div>
                    <hr>
                </div>
            @endforeach

            <b>Yorum Yapın</b>
            <br><br>

            <div class="col-md-12">
                @if (session('kullanici_id'))
                    <form action="{{ route('yorum') }}" method="post">
                        @csrf
                        <textarea name="yorum" style="resize: none;" rows="5" class="form-control"></textarea>
                        <br>
                        <div align="left">
                            <input type="submit" class="btn btn-danger" name="">
                            <br><br>
                        </div>
                    </form>
                @else
                    <div class="text-center mb-4 text-warning">Görüşünü bildirmek için ilk önce <a
                            href="{{ route('register') }}">kayıt olman</a> veya <a
                            href="{{ route('giris-yap') }}">giriş</a> yapman gerek.</div>
                @endif
            </div>
        </div>

    </div>
</div>
<br>


@include ('foother')

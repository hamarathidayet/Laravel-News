@php
 use Illuminate\Support\Str;
@endphp


@include("header")

<br><br>
<br><br>

<div class="container">
    <div class="row mt-4">


        <div class="container">

            <hr>

            @foreach ($ch as $key)
                <div class="col-md-12">
                    <div class="card ">
                        <img src="{{ $key->resim }}" width="800" height="600"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 style="text-transform: uppercase;" class="card-title text-danger text-center">{{ $key->baslik }}</h5>
                            <p class="card-text">{{ substr($key->konu, 0, 199) }}...</p>
                            <hr>
                            <div align="right">
                                <a class="btn btn-outline-dark" href="{{ route('detay', ['seo' => Str::slug($key->baslik), 'id' => $key->id]) }}">Haberin Devamını Oku</a>



                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            @endforeach
        </div>
    </div>
</div>
<br><br>
<br><br>
@include('foother')


@include("seo")
@include('header')





<br><br>
<br><br>

<div class="container">
    <div class="row mt-4">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://via.placeholder.com/350x100" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h3 class="text-dark">REKLAM 1</h3>

                      </div>
                </div>
                <div class="carousel-item">
                    <img src="http://via.placeholder.com/350x100" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h3 class="text-dark">REKLAM 2</h3>

                      </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br><br>

        <div class="container">
            <hr>
            <h4 class="text-center text-danger">SON DAKİKA HABERLERİ</h4>

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
                                <a class="btn btn-outline-dark" href="haber-detay-{{ seo($key->baslik)."/".$key->id }}">Haberin Devamını Oku</a>
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

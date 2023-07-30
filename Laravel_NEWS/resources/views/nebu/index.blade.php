@if (session("kullanici_yetki")==0 or !session("kullanici_yetki"))
    {{ "İZİNSİZ GİRİŞ LÜTFEN BURADAN UZAKLAIŞIN" }}
@else
       @include('nebu/adminheader')



            <div class="container-fluid">




                </div>


                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">

                                        <p>Hoşgeldin {{ session("kullanici_ad")." ".session("kullanici_soyad") }} ayarlarınızı sol taraftan güncelle bilirsiniz...</p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>




    @include("nebu/adminfoother")
@endif

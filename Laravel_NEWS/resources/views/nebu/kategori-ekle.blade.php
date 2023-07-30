@include('nebu/adminheader')

<div align="center" class="mt-5 container">
    <h4 class="ml-2 text-danger">Burası 'Kategori Ayarları' sayfasıdır</h4>
    <hr class="bg-dark">
    @if (session('konu') == 'ekleme')
        <div class="alert alert-success text-center">Ekleme Başırılı</div>
        @php
            session()->forget('konu');
        @endphp
        <hr class="bg-dark">
    @endif
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Kategori Adı</th>
                <th>Kategori İkonu</th>

            </tr>
        </thead>
        <thead>
            @foreach ($ch as $key)
                <tr>
                    <td>{{ $key->id }} </td>
                    <td>{{ $key->kategori_ad }}</td>
                    <td><i class="{{ $key->kategori_logo }}"></i></td>

                    </td>
                </tr>
            @endforeach
        </thead>
    </table>
    <hr class="bg-dark">

</div>
<div align="right" class="container">
    <input type="button" value="Kategori Ekle" class="btn btn-outline-primary btn-xl" data-toggle="modal"
        data-target="#myModal">
</div>



<!-- Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Başlık -->
            <div class="modal-header">
                <h4 class="modal-title">Kategori Ekleme</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal İçerik -->
            <div class="modal-body">
                <form action="{{ route('kategori_ekle') }}" method="post">
                    @csrf
                    <label>* Kategori Ad</label>
                    <input type="text" class="form-control" name="kategori_ad">
                    <label>* Kategori İkon</label>
                    <input type="text" class="form-control" name="kategori_ikon"><br>
                    <input type="submit" value="Ekle" class="btn btn-success">
                </form>


            </div>

            <!-- Modal Alt Kısmı (Footer) -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>


                @include('nebu/adminfoother')

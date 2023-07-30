@include('nebu/adminheader')

<div align="center" class="mt-5 container">
    <h4 class="ml-2 text-danger">Burası 'Haberler' sayfasıdır</h4>
    <hr class="bg-dark">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Haber Adı</th>
                <th>Yayınlanma Zamanı</th>
                <th>Haberi Sil</th>
            </tr>
        </thead>
        <thead>
            @foreach ($ch as $key)
                <tr>
                    <td>{{ $key->id }}</td>
                    <td>{{ $key->baslik }}</td>
                    <td>23.10.1999</td>
                    <td><a class="btn btn-outline-danger" href="{{ route('haber_sil', ['id' => $key->id]) }}">Haberi Sil</a>
                    </td>
                </tr>
            @endforeach
        </thead>
    </table>
    <hr class="bg-dark">

</div>




@include('nebu/adminfoother')

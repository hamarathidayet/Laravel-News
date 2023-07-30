@include('nebu/adminheader')

<div align="center" class="mt-5 container">
    <h4 class="ml-2 text-danger">Burası 'Yönetici' sayfasıdır</h4>

<hr class="bg-dark">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Yönetici Ad-Soyad</th>
                <th>Yönetici mail</th>
                <th>Yönetici üyelik tarihi</th>
            </tr>
        </thead>
        <thead>
            @foreach ($ch as $key)
                <tr>
                    <td>{{ $key->kullanici_ad . ' ' . $key->kullanici_soyad }}</td>
                    <td>{{ $key->kullanici_mail }}</td>
                    <td>{{ $key->created_at }}</td>
                </tr>
            @endforeach
        </thead>
    </table>
    <hr class="bg-dark">

</div>




@include('nebu/adminfoother')

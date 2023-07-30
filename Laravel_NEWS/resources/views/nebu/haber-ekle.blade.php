@include('nebu/adminheader')

<div class="mt-5 container">
    <div align="center">
        <h4 class="ml-2 text-danger">Burası 'Haberler Ekleme' sayfasıdır</h4>
    </div>
    <hr class="bg-dark">
    @if (session('konu') == 'ekleme')
        <div class="alert alert-success text-center">Ekleme Başırılı</div>
        @php
            session()->forget('konu');
        @endphp
        <hr class="bg-dark">
    @endif
    <form action="{{ route('haber_ekle') }}" method="post">
        @csrf
        <div>
            <label>* Haber Resim </label>
            <input type="text" class="form-control" name="resim">
        </div>

        <div>
            <label>* Haber Başlığı </label>
            <input type="text" class="form-control" name="baslik">
        </div>

        <div>
            <label>* Haber İçeriği </label>
            <textarea name="konu" style="resize: none;" rows="5" class="form-control"></textarea>
        </div>

        <div>
            <label>* Haber Kategorisi </label><br>
            <select name="kategori" class="selectpicker">
                <option value="1">Kategori Seçin</option>
                @foreach ($ch as $key)
                    <option value="{{ $key->id }}">{{ $key->kategori_ad }}</option>
                @endforeach
                <!-- Diğer seçenekleri burada ekleyin -->
            </select>
        </div>

        <hr class="bg-dark">
        <div align="right">
            <input type="submit" value="Ekle" class="btn btn-outline-primary" name="" id="">
        </div>
    </form>
</div>


@include('nebu/adminfoother')

@include("seo")
@include ("header")
<br><br><br><br><br>
<div  class="container">

	<div  align="center">


		<div style="border-radius: 25px;" class="col-md-6 bg-dark text-white container">
			<br><br>
			<h4><i class="fa-solid fa-newspaper"></i>  HTAS - HABER</h4>
			<h4>Giriş</h4>
			<br><br>
            @if (session("kontrol")=="yeni_kullanici")
                <div class="alert alert-success text-center">Aramıza hoş geldin mail adresini ve şifreni yazarak giriş yapabilirsin.</div>
               @php
                    session()->forget("kontrol");
               @endphp
            @endif
            <br><br>
			<form action="{{ route("login") }}" method="post">
                @csrf
				<input type="email" class="form-control text-center" autocomplete="off" placeholder="Mail Adresinizi Giriniz" name="mail">
				<br>
				<input type="password" class="form-control text-center" placeholder="Şifre " name="pass">
				<br><br>
				<input type="submit" class="btn btn-outline-success btn-lg" value="Giriş Yap" name="giris">
			</form>
			<br>
			<hr>
		<p>Hesabın yok mu ? </p>

		<a class="btn btn-outline-danger btn-sm" href="kayıt-ol">Kayıt ol!</a>


			<br><br>
		</div>
	</div>
</div>

<br><br>
@include("foother")

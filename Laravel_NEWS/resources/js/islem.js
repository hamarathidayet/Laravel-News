$("#cikis-yap").click(function(){
	Swal.fire({
		title: 'Çıkış yapmaktan emin misin?',
		
		icon: 'warning',
		showCancelButton: true,
		cancelButtonText: 'İptal',
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Çıkış Yap'
	}).then((result) => {
		if (result.isConfirmed) {
			
				$.ajax({
					url:"dist/logout.php",
					success:function(deger){
						window.location = "index.php";
					}
				})
				
		}
	})
})
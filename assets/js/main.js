const baseURL = 'http://localhost/berat-badan-ideal-web/';
$(".btn-registrasi").on('click', function(){
	const nama = $("#nama").val();
	const jenis_kelamin = $('#daftar_sebagai').find(":selected").text();
	const umur = $("#umur").val();
	const alamat = $("#alamat").val();

	if ($('#contactForm').length > 0 ) {
		$( "#contactForm" ).validate( {
			rules: {
				nama: "required",
				jenis_kelamin: {
					required: true,
				},
				umur: {
					required: true,
					minlength: 1
				},
				alamat: {
					required: true,
					minlength: 5
				}
			},
			messages: {
				nama: "Mohon masukkan nama",
				jenis_kelamin: "Wajib diisi",
				alamat: "Mohon masukkan alamat",
				umur: "Mohon masukkan umur"
			},
			/* submit via ajax */
			submitHandler: function(form) {
				$(".btn-registrasi").val('mohon tunggu...');
				
				$.ajax({   	
					type: "POST",
					url: baseURL+"sendData.php",
					dataType : "JSON",
					data: {
						nama: nama,
						gender: jenis_kelamin,
						alamat: alamat,
					},
					success: function(response) {
						if (response == 'success') {
							insertData();
							getResult();
						}else{
							console.log(response);
							alert("Terjadi Kesalahan!!");
							$(".btn-registrasi").val('Registrasi');
						}
					},
					error: function() {
					}
				});
			}
		});
	}
});

$('#example1 tbody').on('click', 'approve', function () {
    var data = table.row($(this).parents('tr')).data();
	var id = data[0];

	$.ajax({
		type: "POST",
		url: baseURL+"deteksi.php",
		dataType : "JSON",
		data: {
			id: id,
			isApproved : 1
		},
		success: function(response) {
			console.log(response);
			alert("Berhasil Disetujui");
			location.reload();
		},
		error : function(req, err){
			console.log('Error'+err);
		}
	});
});

$('#example1 tbody').on('click', 'reject', function () {
    var data = table.row($(this).parents('tr')).data();
	var id = data[0];

	$.ajax({
		type: "POST",
		url: baseURL+"deteksi.php",
		dataType : "JSON",
		data: {
			id: id,
			isApproved : -1
		},
		success: function(response) {
			console.log(response);
			alert("Berhasil Ditolak");
			location.reload();
		},
		error : function(req, err){
			console.log('Error'+err);
		}
	});
});

function insertData(){
	const _nama = $("#nama").val();
	const jenis_kelamin = $('#daftar_sebagai').find(":selected").text();
	const umur = $("#umur").val();
	const alamat = $("#alamat").val();
	$.ajax({   	
		type: "GET",
		url: baseURL+"insertData.php",
		dataType : "JSON",
		data: {
			nama: _nama,
			gender: jenis_kelamin,
			umur: umur,
			berat_badan: '',
			tinggi_badan: '',
			kategori: '',
			alamat: alamat
		},
		success: function(response) {
			console.log(response)
		},
		error: function() {
		}
	});
}

function getResult(){
	$("#exampleModal").modal('show');
	setInterval(function(){
		$.ajax({
			type: "GET",
			dataType: "JSON",
			url: baseURL+"getResult.php",
			success: function(response) {
				$("#nama_hasil").html('Nama Lengkap : '+response.nama)
				$("#umur_hasil").html('Umur : '+response.jenis_kelamin)
				$("#jk_hasil").html('Jenis Kelamin : '+response.umur)
				$("#berat_hasil").html('Berat Badan : '+response.berat_badan)
				$("#tinggi_hasil").html('Tinggi Badan : '+response.tinggi_badan)
				$("#kategori_hasil").html('Kategori : '+response.kategori)
				$("#alamat_hasil").html('Alamat : '+response.alamat)
			},
			error : function(req, err){
				console.log('Error'+err);
			}
		});
	}, 1000);
}
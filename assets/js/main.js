const baseURL = 'http://localhost/berat-badan-ideal/';
$(".btn-registrasi").on('click', function(){
	const nama = $("#nama").val();
	const jenis_kelamin = $("#jenis_kelamin").val();
	const umur = $("#umur").val();
	const alamat = $("#alamat").val();

	if ($('#contactForm').length > 0 ) {
		$( "#contactForm" ).validate( {
			rules: {
				nama: "required",
				jenis_kelamin: {
					required: true,
				},
				alamat: {
					required: true,
					minlength: 5
				}
			},
			messages: {
				nama: "Mohon masukkan nama",
				jenis_kelamin: "Wajib diisi",
				alamat: "Mohon masukkan alamat"
			},
			/* submit via ajax */
			submitHandler: function(form) {
				$(".btn-registrasi").val('mohon tunggu...');
				
				$.ajax({   	
					type: "POST",
					url: baseURL+"registrasi-mahasiswa.php",
					dataType : "JSON",
					data: {
						nama: nama,
						jenis_kelamin: jenis_kelamin,
						alamat: alamat
					},
					success: function(response) {
						if (response.status == 'success') {
							$("#contactForm").hide(500);
							$("#form-message-success").show(1500);
							updateScanStatus();
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

function updateScanStatus(){
	$.ajax({
		type: "GET",
		url: baseURL+"sendScanStatus.php",
		success: function(response) {
			console.log('Scan Status updated');
		},
		error : function(req, err){
			console.log('Error'+err);
		}
	});
}
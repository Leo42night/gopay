$(function() {

	$('.tombolTambahData').on('click', function() {
		$('#judulModal').html('Tambah data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');
	});

	$('.tampilModalUbah').on('click', function() {
		$('#judulModal').html('Ubah data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		$('.modal-body form').attr('action', 'http://localhost/mvc/public/mahasiswa/ubah')

		const id = $(this).data('id'); //data & id ini dari php?
		

		$.ajax({
			url: 'http://localhost/mvc/public/mahasiswa/getubah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				$('#nama').val(data.nama);
				$('#nim').val(data.nim);
				$('#email').val(data.email);
				$('#id').val(data.id);
			}
		})
	});

});




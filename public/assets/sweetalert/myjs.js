const alert = $('.alert').data('alert');
const jenis = $('.alert').data('jenis');
if (alert) {
	Swal.fire({
	  icon: 'success',
	  title: 'Data '+jenis,
	  text: 'Berhasil '+alert
	});
}
$('.remove').on('click',function(e){
	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
	  title: 'Apakah Kamu Yakin?',
	  text: "Data tidak bisa dikembalikan!",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Hapus Data!'
	}).then((result) => {
	  if (result.value) {
	    document.location.href=href;
	  }
	})
});
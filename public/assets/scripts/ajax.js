$(document).ready(function(){
	$('#destinasi').ready(function(){
		tampilData();
	}
	function tampil_data(){
        $.ajax({
            url: '<?php echo base_url(); ?>admin/destinasi/showData',
            type: 'POST',
            dataType: 'json',
            success: function(response){
                console.log(response);
                var i;
                var no = 0;
                var html = "";
                for(i=0;i < response.length ; i++){
                    no++;
                    html = html + '<tr>'
                                + '<td>' + no  + '</td>'
                                + '<td>' + response[i].destinasi  + '</td>'
                                + '<td style="width: 16.66%;">' + '<span><button data-id="'+response[i].id+'" class="btn btn-primary btn_edit">Edit</button><button style="margin-left: 5px;" data-id="'+response[i].id+'" class="btn btn-danger btn_hapus">Hapus</button></span>'  + '</td>'
                                + '</tr>';
                }
                $("#tabel-destinasi").html(html);
            }

        });
    }
    /*Save Destinasi*/
    $('#destinasi_save').on('click',function(){
        var destinasi = $('#destinasi_val').val();
        $("#destiansi_save").attr("disabled", "disabled");
        $.ajax({
			url: "<?php echo base_url("admin/destinasi/saveData");?>",
			type: "POST",
			data: {
				destinasi: destinasi
			},
			cache: false,
			success: function(data){
					$("#destinasi_save").removeAttr("disabled");
					$('#form-destinasi').find('input:text').val('');
					console.log('berhasil');
					tampilData();
			}
		});
    });
});
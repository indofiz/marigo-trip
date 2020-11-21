<?=$this->extend('admin/layout/template');?>
<?=$this->section('content');?>
<form action="<?php echo base_url('admin/paket_tour/saveDataPaket');?>" id="paket_tour_form">
<?=csrf_field();?>
<div class="row" id="paket-content">
	<div class="col-md-6">
		<div class="main-card mb-3 card">
		    <div class="card-body">
		    	<h5 class="card-title mb-3">Tambah Paket Tour</h5>
		        <div id="paket_tour" data-type="durasi"> 
	                    <div class="position-relative form-group">
	                    	<label for="exampleEmail" class="">Nama Tour:</label>
	                    	<input name="tour_judul" id="tour_judul" placeholder="Masukan nama tour" type="text" class="form-control inp-control" value="">
		                    <div class="invalid-feedback" id="error_tour_judul"></div>
	                    </div>
	                    <div class="position-relative form-group">
	                    	<label for="destinasi-list" class="">Destinasi:</label>
	                    	<select name="tour_destinasi" id="tour_destinasi" class="form-control inp-control">
	                    	<?php foreach($destinasi_list as $data) : ?>
		                        <option value="<?=$data['destinasi_id'];?>"><?=$data['destinasi'];?></option>
                            <?php endforeach ?>
	                    	</select>
		                    <div class="invalid-feedback" id="error_tour_destinasi"></div>
	                	</div>
	                	<div class="position-relative form-group">
	                    	<label for="durasi-list" class="">Durasi:</label>
	                    	<select name="tour_durasi" id="tour_durasi" class="form-control inp-control">
	                        <?php foreach($durasi_list as $data) : ?>
		                        <option value="<?=$data['durasi_id'];?>"><?=$data['durasi'];?></option>
                            <?php endforeach ?>
	                    	</select>
		                    <div class="invalid-feedback" id="error_tour_durasi"></div>
	                	</div>
	                	<div class="position-relative form-group">
	                    	<label for="kategori-list" class="">Kategori:</label>
	                    	<select name="tour_kategori" id="tour_kategori" class="form-control inp-control">
	                        <?php foreach($kategori_list as $data) : ?>
		                        <option value="<?=$data['kategori_id'];?>"><?=$data['kategori'];?></option>
                            <?php endforeach ?>
	                    	</select>
		                    <div class="invalid-feedback" id="error_tour_kategori"></div>
	                	</div>
	                    <div class="position-relative form-group">
	                    	<label for="exampleText" class="">Jadwal</label>
	                    	<textarea name="tour_jadwal" id="tour_jadwal" class="form-control inp-control"></textarea>
		                    <div class="invalid-feedback" id="error_tour_jadwal"></div>
	                    </div>
	                    <div class="position-relative form-group">
	                    	<label for="exampleText" class="">Fasilitas</label>
	                    	<textarea name="tour_fasilitas" id="tour_fasilitas" class="form-control inp-control"></textarea>
		                    <div class="invalid-feedback" id="error_tour_fasilitas"></div>
	                    </div>
	                    <div class="row mb-3">
	                    	<div class="col">
	                    		<label>Diskon %</label>
	                    		<input type="number" class="form-control" placeholder="0" min="0" name="diskon" id="diskon">
	                    	</div>
	                    	<div class="col">
	                    		<label>Asuransi</label>
	                    		<input type="number" class="form-control" placeholder="0" min="0" name="asuransi" id="asuransi">
	                    	</div>
	                    </div>
	                    <div class="form-group row">
	                    	<label for="exampleFile" class="col-12">File Gambar</label>
	                    	<div class="col-md-4 mb-1">
							    	<img src="<?=base_url('image_tour/default.png');?>" style="
							    	width: 98%; box-sizing: border-box;padding: .25rem;
									background-color: #fff;
									border: 1px solid #dee2e6;
									border-radius: .25rem;" id="previewImg">
	                    	</div>
	                    	<div class="col-md-8">
		                    	<div class="custom-file">
								    <input type="file" class="custom-file-input" id="tour_image" name="tour_image" onchange="previewFile(this);">
								    <label class="custom-file-label" for="tour_image">Pilih Gambar</label>
				                    <div class="invalid-feedback" id="error_tour_image"></div>
								</div>
	                    	</div>
	                    </div>
	                    <button class="mt-1 btn btn-secondary btn-lg" type="reset">Reset</button>
	                    <button class="mt-1 btn btn-primary btn-lg" type="submit" id="paket_save"><i class="fa fa-plus"></i> Tambah Paket</button>
		        </div>
		    </div>
		</div>
	</div>
	<!-- LIST PEKET -->
	<div class="col-md-6" id="list_input" data-type="Paket Tour">
		<div class="main-card mb-3 card">
		    <div class="card-body">
		    	<h5 class="card-title mb-3">Tambah Harga/Jumlah Orang</h5>
					<div class="listInput">
						<table class="table table-striped listInput">
							<thead>
								<tr>
									<th>Harga</th>
									<th>Min Orang</th>
									<th>Max Orang</th>
									<th style="text-align: right;"><i class="fa fa-ellipsis-v"></i></th>
								</tr>
							</thead>
							<tbody class="form-harga">
								<tr>
									<td>
										<input type="number" name="harga[]" class="form-control" value="0">
									</td>
									<td>
										<input type="number" name="min_orang[]" class="form-control" value="0">
									</td>
									<td>
										<input type="number" name="max_orang[]" class="form-control" value="0">
									</td>
									<td>
										<button type="button" class="btn btn-primary btn-lg btn-add-harga"><i class="fa fa-plus"></i></button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
			</div>
		</div>	
	</div>
</div>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		
	    $('#paket_tour').ready(function(){
	        CKEDITOR.replace('tour_jadwal');
	        CKEDITOR.replace('tour_fasilitas');
	    });
	});
function alert_add(jenis){
        Swal.fire({
          icon: 'success',
          title: 'Data '+jenis,
          text: 'Berhasil ditambah'
        });
    }
function previewFile(input){
    var file = $("#tour_image").get(0).files[0];
    var elemen = $('#tour_image');
    if(file){
        var reader = new FileReader();

        reader.onload = function(){
            $("#previewImg").attr("src", reader.result);
        }

        reader.readAsDataURL(file);
    var fileName = $(elemen).val();
    //replace the "Choose a file" label
    $(elemen).next('.custom-file-label').html(fileName);
    }
}
	

	$('#tour_image').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
    $('#paket_tour_form').on('submit',function(e){
        e.preventDefault();
        CKEDITOR.instances['tour_jadwal'].updateElement();
        CKEDITOR.instances['tour_fasilitas'].updateElement();
        $("#paket_save").attr("disabled", "disabled");
        $('#paket_tour_form').find('input').removeClass('is-invalid');
        $('#paket_tour_form').find('select').removeClass('is-invalid');
        $('#paket_tour_form').find('textarea').removeClass('is-invalid');
        $('#paket_tour_form').find('input').removeClass('is-valid');
        $('#paket_tour_form').find('select').removeClass('is-valid');
        $('#paket_tour_form').find('textarea').removeClass('is-valid');
        var diskon = $('#diskon').val();
        var asuransi = $('#asuransi').val();
        var data = new FormData(this);
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: $(this).attr('action'),
            processData: false,
            contentType: false,
            data: data,
            dataType: 'json',
            success: function(data){
                // alert(data.success);
                if ($.isEmptyObject(data.error)) {
                    $("#paket_save").removeAttr("disabled");
                    $('#paket_tour_form').find('input:text').val('');
                    $('.form-harga').find('input').val('0');
                    $('#paket_tour_form').find('textarea').val('');
                    $('#tour_image').next('.custom-file-label').html('');
                    alert_add('Paket Tour');
                }else{
                    $("#paket_save").removeAttr("disabled");
                    $.each(data.error, function(i, log) {
                      var ele = $('#'+i);
                      ele.addClass(i.length > 0 ? 'is-invalid' : 'is-valid');
                      $('#error_'+i).html(log);
                      (ele != 'tour_judul') ? $('#tour_judul').addClass('is-valid') : null;
                      (ele != 'tour_destinasi') ? $('#tour_destinasi').addClass('is-valid') : null;
                      (ele != 'tour_durasi') ? $('#tour_durasi').addClass('is-valid') : null;
                      (ele != 'tour_kategori') ? $('#tour_kategori').addClass('is-valid') : null;
                      (ele != 'tour_image') ? $('#tour_image').addClass('is-valid') : null;
                   });

                }
            },
             error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus + errorThrown);
             }
        });
        return false;
    });
	$(document).ready(function(e){
		$('.btn-add-harga').click(function(e){
			e.preventDefault();
			$('.form-harga').append('<tr><td><input type="number" name="harga[]" class="form-control" value="0"></td><td><input type="number" name="min_orang[]" class="form-control" value="0"></td><td><input type="number" name="max_orang[]" class="form-control" value="0"></td><td><button type="button" class="btn btn-danger btn-lg btn-delete-harga"><i class="fa fa-trash"></i></button></td></tr>');
		})
	});
	$(document).on('click','.btn-delete-harga',function(e){
		e.preventDefault();
		$(this).parents('tr').remove();
	});
</script>

<?=$this->endSection();?>

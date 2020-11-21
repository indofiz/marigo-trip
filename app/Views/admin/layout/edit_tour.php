

		    	<h5 class="mb-3">Tambah Paket Tour</h5>
		        <div id="paket_tour" data-type="paket_tour_edit"> 
	                    <div class="position-relative form-group">
	                    	<label for="exampleEmail" class="">Nama Tour:</label>
	                    	<input name="tour_judul" id="tour_judul" placeholder="Masukan nama tour" type="text" class="form-control inp-control" value="<?=$paket_tour['tour_judul'];?>">
		                    <div class="invalid-feedback" id="error_tour_judul"></div>
	                    	<input name="tour_id" type="hidden" class="form-control inp-control" value="<?=$paket_tour['tour_id'];?>">
	                    </div>
	                    <div class="position-relative form-group">
	                    	<label for="destinasi-list" class="">Destinasi:</label>
	                    	<select name="tour_destinasi" id="tour_destinasi" class="form-control inp-control">
		                        <?php
                                foreach($destinasi_list as $data)
                                {
                                 echo '<option value="'.$data['destinasi_id'].'" ';
                                 echo $paket_tour['tour_destinasi'] == $data['destinasi_id'] ? "selected" : null;
                                 echo '>';
                                 echo $data['destinasi'].'</option>';
                                }
                                ?>
	                    	</select>
		                    <div class="invalid-feedback" id="error_tour_destinasi"></div>
	                	</div>
	                	<div class="position-relative form-group">
	                    	<label for="durasi-list" class="">Durasi:</label>
	                    	<select name="tour_durasi" id="tour_durasi" class="form-control inp-control">
                            <?php
                            foreach($durasi_list as $data)
                            {
                             echo '<option value="'.$data['durasi_id'].'" ';
                             echo $paket_tour['tour_durasi'] == $data['durasi_id'] ? "selected" : null;
                             echo '>';
                             echo $data['durasi'].'</option>';
                            }
                            ?>
	                    	</select>
		                    <div class="invalid-feedback" id="error_tour_durasi"></div>
	                	</div>
	                	<div class="position-relative form-group">
	                    	<label for="kategori-list" class="">Kategori:</label>
	                    	<select name="tour_kategori" id="tour_kategori" class="form-control inp-control">
                            <?php
                            foreach($kategori_list as $data)
                            {
                             echo '<option value="'.$data['kategori_id'].'" ';
                             echo $paket_tour['tour_kategori'] == $data['kategori_id'] ? "selected" : null;
                             echo '>';
                             echo $data['kategori'].'</option>';
                            }
                            ?>
	                    	</select>
		                    <div class="invalid-feedback" id="error_tour_kategori"></div>
	                	</div>
	                    <div class="position-relative form-group">
	                    	<label for="exampleText" class="">Jadwal</label>
	                    	<textarea name="tour_jadwal" id="tour_jadwal" class="form-control inp-control"><?=$paket_tour['tour_jadwal'];?></textarea>
		                    <div class="invalid-feedback" id="error_tour_jadwal"></div>
	                    </div>
	                    <div class="position-relative form-group">
	                    	<label for="exampleText" class="">Fasilitas</label>
	                    	<textarea name="tour_fasilitas" id="tour_fasilitas" class="form-control inp-control"><?=$paket_tour['tour_fasilitas'];?></textarea>
		                    <div class="invalid-feedback" id="error_tour_fasilitas"></div>
	                    </div>
	                    <div class="row mb-3">
	                    	<div class="col">
	                    		<label>Diskon %</label>
	                    		<input type="number" class="form-control" placeholder="0" min="0" name="diskon" id="diskon" value="<?=$paket_tour['tour_diskon'];?>">
	                    	</div>
	                    	<div class="col">
	                    		<label>Asuransi</label>
	                    		<input type="number" class="form-control" placeholder="0" min="0" name="asuransi" id="asuransi" value="<?=$paket_tour['tour_asuransi'];?>">
	                    	</div>
	                    </div>
	                    <div class="form-group row">
	                    	<label for="exampleFile" class="col-12">File Gambar</label>
	                    	<div class="col-md-4 mb-1">
							    	<img src="<?=base_url('image_tour/default.png');?>" style="
							    	width: 100%; box-sizing: border-box;padding: .25rem;
									background-color: #fff;
									border: 1px solid #dee2e6;
									border-radius: .25rem;" id="previewImg">
	                    	</div>
	                    	<div class="col-md-8">
		                    	<div class="custom-file">
								    <input type="file" class="custom-file-input" id="tour_image" name="tour_image" value="<?=$paket_tour['tour_image'];?>" onchange="previewFile(this);">
								    <label class="custom-file-label" for="tour_image"><?=$paket_tour['tour_image'];?></label>
				                    <div class="invalid-feedback" id="error_tour_image"></div>
								</div>	                    		
	                    	</div>
	                    </div>
	<!-- LIST PEKET -->

		    	<h5 class="mb-3 mt-5">Tambah Harga/Jumlah Orang</h5>
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
								<?php $i=1; foreach($harga_tour as $harga) :?>
					            <tr>
									<td>
										<input type="number" name="harga[]" class="form-control" value="<?=$harga['harga'];?>">
									</td>
									<td>
										<input type="number" name="min_orang[]" class="form-control" value="<?=$harga['min_orang'];?>">
									</td>
									<td>
										<input type="number" name="max_orang[]" class="form-control" value="<?=$harga['max_orang'];?>">
									</td>
									<td>
										<?= ($i == 1) ?  '<button type="button" class="btn btn-primary btn-lg btn-add-harga"><i class="fa fa-plus"></i></button>' : '<button type="button" class="btn btn-danger btn-lg btn-delete-harga"><i class="fa fa-trash"></i></button>';?>
									</td>
								</tr>
								<?php $i++;?>
						        <?php endforeach;?>
							</tbody>
						</table>
					</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#paket_tour').ready(function(){
	        CKEDITOR.replace('tour_jadwal');
	        CKEDITOR.replace('tour_fasilitas');
	    });
	});
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
		    $(elemen).next('.custom-file-label').html(fileName);
        }
    }
	
	$(document).ready(function(e){
		$('.form-harga').ready(function(e){
			var count_tr = $('.form-harga tr').length;
			if (count_tr == 0) {
				$('.form-harga').html('<tr><td><input type="number" name="harga[]" class="form-control" value="0"></td><td><input type="number" name="min_orang[]" class="form-control" value="0"></td><td><input type="number" name="max_orang[]" class="form-control" value="0"></td><td><button type="button" class="btn btn-primary btn-lg btn-add-harga"><i class="fa fa-plus"></i></button></td></tr>');
			}
		});

	});
	$('.btn-add-harga').click(function(e){
		e.preventDefault();
		$('.form-harga').append('<tr><td><input type="number" name="harga[]" class="form-control" value="0"></td><td><input type="number" name="min_orang[]" class="form-control" value="0"></td><td><input type="number" name="max_orang[]" class="form-control" value="0"></td><td><button type="button" class="btn btn-danger btn-lg btn-delete-harga"><i class="fa fa-trash"></i></button></td></tr>');
	});
	
	$(document).on('click','.btn-delete-harga',function(e){
		e.preventDefault();
		$(this).parents('tr').remove();
	});
</script>
<?=$this->extend('admin/layout/template');?>
<?=$this->section('content');?>
<div class="row" id="destinasi-content">
	<div class="col-md-4">
		<div class="main-card mb-3 card">
		    <div class="card-body">
		    	<h5 class="card-title mb-4"><i class="pe-7s-map-marker"></i>  Tambah Destinasi</h5>

		        <form action="<?php echo base_url('admin/destinasi/saveData');?>" id="form-destinasi" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
	        	<?=csrf_field();?>
				  <div class="form-group">
				    <label>Nama Destinasi:</label>
				    <input type="text" name="destinasi" class="form-control" id="destinasi_val" placeholder="Masukan nama destinasi">
                    <div class="invalid-feedback" id="destinasi_feedback"></div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-12 col-form-label">Gambar Destinasi:</label>
				    <div class="col-4">
				    	<img src="<?=base_url('image_destinasi/default.png');?>" class="img-thumbnail img-p-destinasi" id="previewImg">
				    </div>
				    <div class="col-8">
					      <div class="custom-file">
						  <input type="file" class="custom-file-input" id="image_destinasi" name="image_destinasi" onchange="previewFile(this);">
						  <label class="custom-file-label" for="customFile">Pilih gambar</label>
	                      <div class="invalid-tooltip" id="image_destinasi_feedback"></div>
						  </div>
				    </div>
				  </div>
				  <button type="reset" class="btn btn-secondary btn-lg"><i class="fa fa-eraser"></i> Reset</button>
				  <button type="submit" class="btn btn-primary btn-lg" id="destinasi_save"><i class="fa fa-plus"></i> Tambah</button>
				</form>
		    </div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="main-card mb-3 card">
			<div class="card-body"><h5 class="card-title mb-3">List Destinasi Wisata</h5>
				<div id="destinasi-hide" style="display: none;">
				<div id="d_data" data-type="destinasi"> 
	            <table class="mb-0 table table-striped" width="100%" id="destinasi_table" data-url="<?php echo site_url('admin/destinasi/showData')?>">
	                <thead>
	                <tr>
	                    <th>Id</th>
	                    <th>No</th>
	                    <th>Gambar</th>
	                    <th>Nama Destinasi</th>
	                    <th style="text-align: right;"><i class="fa fa-ellipsis-v"></i></th>
	                </tr>
	                </thead>
	                <tbody id="destinasi_data">
	                </tbody>
	            </table>
		        </div>
			    </div>
			    <div class="text-center mt-5 mb-5 loading-item">
                	<div class="spinner">
					  <div class="rect1"></div>
					  <div class="rect2"></div>
					  <div class="rect3"></div>
					  <div class="rect4"></div>
					  <div class="rect5"></div>
					LOADING....
					</div>
            	</div>
	        </div>
		</div>
	</div>
</div>

<script type="text/javascript">
    function previewFile(input){
        var file = $("#image_destinasi").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
	$(document).ready(function(){


		
		$('#form-destinasi').on('submit',function(e){
	        e.preventDefault();
	        $("#destinasi_save").attr("disabled", "disabled");
	        $("#destinasi_val").removeClass("is-invalid");
	        $("#image_destinasi").removeClass("is-invalid");
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
	                console.log('berhasil');
	                if ($.isEmptyObject(data.error)) {
	                    $("#destinasi_save").removeAttr("disabled");
	                    $('#form-destinasi').find('input:text').val('');
	                    $('#image_destinasi').val('');
	                    $('#image_destinasi').next('.custom-file-label').html('');
	                }else{
	                    $("#destinasi_save").removeAttr("disabled");
	                    if (data.error.destinasi) {
	                        $("#destinasi_val").addClass("is-invalid");
	                        $("#destinasi_feedback").html(data.error.destinasi);
	                    }else{$("#destinasi_val").addClass("is-valid");}
	                    if (data.error.image_destinasi) {
	                        $("#image_destinasi").addClass("is-invalid");
	                        $("#image_destinasi_feedback").html(data.error.image_destinasi);
	                    }else{$("#image_destinasi").addClass("is-valid");}
	                }
	            },
	             error: function(jqXHR, textStatus, errorThrown) {
	                console.log(textStatus + errorThrown);
	             }
	        });
	        return false;
	    });
	});
    

	// LABEL IMAGE
    $('#image_destinasi').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })

    
</script>
<?=$this->endSection();?>

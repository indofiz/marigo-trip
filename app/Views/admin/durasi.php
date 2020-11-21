<?=$this->extend('admin/layout/template');?>
<?=$this->section('content');?>
<div class="row" id="durasi-content">
	<div class="col-md-4">
		<div class="main-card mb-3 card">
		    <div class="card-body">
		    	<h5 class="card-title mb-3"><i class="pe-7s-plus"></i>  Tambah Durasi</h5>
		        <form id="form-durasi" method="post"> 
		        	<?=csrf_field();?>
			        	<div class="form-group">
	                    	<input name="durasi" placeholder="Masukan Durasi Paket" type="text" class="form-control" id="durasi_val">
	                    	<div class="invalid-feedback" id="durasi_feedback">
		                    </div>
	                    </div>
	                    <div class="form-group">
	                    	<button type="button" class="btn btn-primary btn-lg col-md-12" id="durasi_save"><i class="fa fa-plus"></i> Tambah</button>
	                    </div>
		        </form>
		    </div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="main-card mb-3 card">
			<div class="card-body"><h5 class="card-title mb-3">List Durasi Paket Wisata</h5>
				<div id="durasi-hide" style="display: none;">
					<div id="d_data" data-type="durasi"> 
		            <table class="mb-0 table table-striped display" id="durasi" width="100%" data-url="<?php echo site_url('admin/durasi/showData')?>">
		                <thead>
		                <tr>
		                    <th>Id</th>
		                    <th>No</th>
		                    <th>List Durasi</th>
		                    <th style="text-align: right;"><i class="fa fa-ellipsis-v"></i></th>
		                </tr>
		                </thead>
		                <tbody id="durasi_data">
		                
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


<?=$this->endSection();?>

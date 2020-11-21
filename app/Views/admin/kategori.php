<?=$this->extend('admin/layout/template');?>
<?=$this->section('content');?>
<div class="row" id="kategori-content">
	<div class="col-md-4">
		<div class="main-card mb-4 card">
		    <div class="card-body">
		    	<h5 class="card-title mb-3">Tambah Kategori</h5>
		        <form id="form-kategori" method="post"> 
		        	<?=csrf_field();?>
		                
	                    <div class="form-group">
	                    	<input name="kategori" placeholder="Masukan Kategori Paket" type="text" class="form-control" id="kategori_val">
	                    	<div class="invalid-feedback" id="kategori_feedback">
		                    </div>
	                    </div>
	                    <div class="form-group">
	                    	<button type="button" class="btn btn-primary btn-lg col-md-12" id="kategori_save"><i class="fa fa-plus"></i> Tambah</button>
	                    </div>
		        </form>
		    </div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="main-card mb-3 card">
			<div class="card-body"><h5 class="card-title mb-3">List Kategori Paket Wisata</h5>
				<div id="kategori-hide" style="display: none;">
					<div id="d_data" data-type="kategori"> 
		            <table class="mb-0 table table-striped display" width="100%" id="kategori" data-url="<?php echo site_url('admin/kategori/showData')?>">
		                <thead>
		                <tr>
		                    <th>Id</th>
		                    <th>No</th>
		                    <th>List Kategori</th>
		                    <th style="text-align: right;"><i class="fa fa-ellipsis-v"></i></th>
		                </tr>
		                </thead>
		                <tbody id="kategori_data">
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

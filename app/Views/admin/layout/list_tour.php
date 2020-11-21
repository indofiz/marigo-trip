<div class="row">
<?php foreach($paket_tour as $paket) :?>
<div class="col-md-4 col-sm-6 mb-3 col-lg-3 lazy_tour">
	<div class="card">
	    <img class="card-img-top" src="<?=base_url('image_tour/'.$paket['tour_image'])?>" alt="<?=$paket['tour_judul'];?>">
	    <div class="card-body">
	      <h5 class="card-title"><?=$paket['tour_judul'];?></h5>
	      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
	      <div class="card-text text-center row">
		      <div class="col-6">
	    			<a href="#" class="btn btn-success btn-lg btn-block item_edit_paket" data-url="<?=base_url('admin/paket_tour/editTour/'.$paket['tour_id']);?>" data-toggle="modal" data-target="#modalEditPaket" data-paket="<?=$paket['tour_judul'];?>"><i class="fa fa-edit"></i> Edit</a>
		      </div>
	      	  <div class="col-6">
			      	<button type="button" class="btn btn-secondary btn-lg btn-block remove" data-type="paket_tour" data-id="<?=$paket['tour_id'];?>"><i class="fa fa-trash"></i> Hapus</button>
		      </div>
	      </div>
	    </div>
	</div>
</div>
<?php endforeach;?>
</div>
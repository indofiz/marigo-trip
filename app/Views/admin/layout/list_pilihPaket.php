
<?php foreach($paket_tour as $paket) :?>
<div class="col-md-4 col-sm-6 mb-3 col-lg-4 lazy_tour">
	<div class="card">
	    <img class="card-img-top" src="<?=base_url('image_tour/'.$paket['tour_image'])?>" alt="<?=$paket['tour_judul'];?>">
	    <div class="card-body">
	      <h5 class="card-title"><?=$paket['tour_judul'];?></h5>
	      <div class="card-text">
			      	<button type="button" class="btn btn-success btn-block ambilPaket" data-type="paket_tour" data-id="<?=$paket['tour_id'];?>" id="ambilPaket"><i class="fa fa-check"></i> Pilih</button>
		      </div>
	      </div>
	    </div>
	</div>
</div>
<?php endforeach;?>

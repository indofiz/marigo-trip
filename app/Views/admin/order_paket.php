<?=$this->extend('admin/layout/template');?>
<?=$this->section('content');?>
<div class="row" id="order-paket">
		<div class="main-card mb-3 card col-12" style="min-height: 600px">
		    <div class="card-body row">
				<div class="col-md-6 mx-auto mb-5">
		    	<h3 class="text-center mb-4 mt-3">Order Paket Tour</h3>
		        <div id="order" data-type="order"> 
	                <form action="<?=base_url('admin/order/saveData');?>" method="post" id="orderPaketForm" class="needs-validation" novalidate>
	                	<div id="satu">
							<div class="form-group mb-4">
							    <label for="exampleInputEmail1">Pilih Paket:</label>
							    <div class="form-group input-group">
							    	<input type="text" class="form-control btnPilihPaket" placeholder="Cari paket tour" aria-describedby="basic-addon2" data-toggle="modal" data-target="#ModalPaketList" data-id="" id="namaPaket" name="namaPaket">
									  <div class="input-group-append">
									    <button class="btn btn-primary btnPilihPaket" type="button" data-toggle="modal" data-target="#ModalPaketList"><i class="fa fa-search"></i></button>
									  </div>
							    	<div class="" id="error_namaPaket">
								    </div>
							    	<input type="hidden" name="tour_id" id="idPaket" value="">
								</div>
							</div>
							<div class="mb-4" id="tampilSatuPaket" style="padding: 20px;background: #eee;display: none;">
								<div class="card mb-3 paketShowOne" style="max-width: 540px;display: none">
								  <div class="row no-gutters">
								    <div class="col-md-4">
								      <img src="" class="card-img" id="card-image" alt="" style="height: 100%">
								    </div>
								    <div class="col-md-8">
								      <div class="card-body">
								        <h5 class="card-title" id="card-title"></h5>
								        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								      </div>
								    </div>
								  </div>
								</div>
								<div class="text-center mt-5 mb-5 loading-item-paket-show">
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
							 <div class="row mb-4">
							  	<div class="col">
								    <label>Tanggal mulai:</label>
								    <input type="date" class="form-control" id="tanggal" name="tanggal">
								    <div class="" id="error_tanggal">
								    </div>
							  	</div>
							  	<div class="col">
								    <label>Banyak orang:</label>
								    <input type="number" class="form-control" id="jumlahOrang" name="jumlahOrang" placeholder="0" min="0" disabled="">
								    <div class="" id="error_jumlahOrang">
								    </div>
							</div>
							</div>
							<div class="row mb-4">
						  		<div class="col">
							  		<label>Diskon</label>
									<input type="text" class="form-control" id="diskon" name="diskon" value="" placeholder="0%" disabled="">
						  		</div>
						  		<div class="col">
							  		<label>Asuransi</label>
									<input type="text" class="form-control" id="asuransi" name="asuransi" value="" placeholder="Rp. 0" disabled="">
						  		</div>
							</div>
						  	<div class="form-group mb-4">
						  		<label>Harga total:</label>
							    <input type="text" class="form-control" id="hargaOrang" name="hargaOrang" value="" placeholder="Rp. 0" disabled="">
						  	</div>
						  	<div class="row mb-4">
						  		<div class="col">
						  			<div class="btn-group btn-group-toggle" data-toggle="buttons">
									  <label class="btn btn-outline-success active">
									    <input type="radio" name="bayarMetode" class="bayarMetode" autocomplete="off" value="0"> Lunas
									  </label>
									  <label class="btn btn-outline-success">
									    <input type="radio" name="bayarMetode" class="bayarMetode" autocomplete="off" value="1" checked> DP
									  </label>
									</div>
									<small class="form-text text-muted">Pilih apakah akan DP atau bayar lunas.</small>
						  		</div>
						  		<div class="clearfix col">
							  		<div class="pull-right">
										  <a href="#" class="btn btn-primary btn-lg" id="next-1">Selanjutnya  <i class="fa fa-arrow-right"></i></a>
							  		</div>
						  		</div>
						  	</div>
	                	</div>
	                	<div id="dua">
							<div class="row mb-4">
							  	<div class="col">
								    <label>Nama Lengkap</label>
								    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap">
								    <div class="" id="error_namaLengkap">
								    </div>
							  	</div>
							  	<div class="col">
								    <label>Institusi</label>
								    <input type="text" class="form-control" id="institusi" placeholder="Asal institusi" name="institusi">
								</div>
							</div>
							<div class="row mb-4">
							  	<div class="col">
							  		<label>Email:</label>
								    <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com">
								    <div class="" id="error_email">
								    </div>
							  	</div>
							  	<div class="col">
							  		<label>Nomor telpon:</label>
								    <input type="text" class="form-control" id="noTelpon" name="noTelpon" placeholder="+628317508....">
								    <div class="" id="error_noTeplon">
								    </div>
							  	</div>
							</div>
							<div class="form-group">
								<label>Asal:</label>
								<textarea name="asal" rows="5" id="asal" class="form-control" placeholder="Masukan alamat lengkap" name="asal"></textarea>
								<div class="" id="error_asal">
							    </div>
							</div>
							<div class="form-group">
								<label>Permintaan:</label>
								<textarea name="permintaan" rows="5" id="permintaan" class="form-control" placeholder="Masukan permintaan anda" name="permintaan"></textarea>
							</div>
						  	<div class="clearfix mb-4">
						  		<div class="pull-right">
									  <a href="#" class="btn btn-outline-secondary btn-lg" id="prev-1">Kembali</a>
									  <button type="submit" class="btn btn-primary btn-lg" id="submitOrder">Pesan Sekarang</button>
						  		</div>
						  	</div>
	                	</div>
					</form>
		        </div>
				</div>
		    </div>
		</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	function alert_success(jenis){
        Swal.fire({
          icon: 'success',
          title: jenis,
          text: 'Berhasil diorder'
        });
    }
	$('#orderPaketForm').on('submit',function(e){
        e.preventDefault();
        $("#submitOrder").attr("disabled", "disabled");
        $('#orderPaketForm').find('input').removeClass('is-invalid');
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
                    alert_success('Order Tour');
        			$('#orderPaketForm').find('input').val('');
        			$('#orderPaketForm').find('textarea').val('');
        			$('#orderPaketForm').find('input').removeClass('is-valid');
        			$('#orderPaketForm').find('textarea').removeClass('is-valid');
					$('#dua').hide('slow');
					$('#satu').show('slow');
                    $("#submitOrder").removeAttr("disabled");
                    console.log(data.success);
                }else{
                    $("#submitOrder").removeAttr("disabled");
                    $.each(data.error, function(i, log) {
                      var ele = $('#'+i);
                      ele.addClass(i.length > 0 ? 'is-invalid' : 'is-valid');
                      $('#error_'+i).html(log).addClass(i.length > 0 ? 'invalid-feedback' : null);
                      (ele != 'namaLengkap') ? $('#namaLengkap').addClass('is-valid') : null;
                      (ele != 'email') ? $('#email').addClass('is-valid') : null;
                      (ele != 'noTelpon') ? $('#noTelpon').addClass('is-valid') : null;
                      (ele != 'asal') ? $('#asal').addClass('is-valid') : null;
                   });
                }
            },
             error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus + errorThrown);
             }
        });
        return false;
    });
	$('#next-1').click(function(){
		$(this).attr("disabled", "disabled");
        $('#orderPaketForm').find('input').removeClass('is-invalid');
		checkStep1();
	});
	$('#prev-1').click(function(){
		$('#dua').hide('slow');
		$('#satu').show('slow');
	});
	$(document).on('click','#ambilPaket',function(){
		var id = $(this).data('id');
		$('#idPaket').val(id);
		$('#ModalPaketList').modal('hide');
		$('#tampilSatuPaket').show();
		ambilDataPaket(id);
	})
	$('#jumlahOrang').on('change',function(){
		var jumlahOrang = $(this).val();
		var idTour2 = $('#idPaket').val();
		ambilHarga(jumlahOrang,idTour2);
	});
	$('#tanggal').on('change',function(){
		$(this).removeClass('is-invalid');
		$(this).removeClass('is-valid');
		checkStep1();
	});
	$('#jumlahOrang').on('change',function(){
		$(this).removeClass('is-invalid');
		$(this).removeClass('is-valid');
	});

	function ambilDataPaket(id){
        if(id){
            $.ajax({
                url   : '<?php echo site_url('admin/order/paket_select')?>',
                dataType : 'json',
                type : "POST",
                data : {id:id},
                complete: function(){
                    $('.loading-item-paket-show').hide();
                },
                success : function(data){
                	$('.paketShowOne').show('slow');
                	$('#namaPaket').val(data.judul);
                	$('#diskon').val(data.diskon+'%');
                	$('#asuransi').val(formatRupiah(data.asuransi,'Rp. '));
                	$('#card-title').html(data.judul);
                	$('#card-image').attr('src',data.image);
			        $('#namaPaket').removeClass('is-invalid');
					$('#jumlahOrang').removeAttr("disabled", "disabled");
                }

            });
        }
    }
    function checkStep1(){
    	var idPaket = $('#idPaket').val();
    	var tanggal = $('#tanggal').val();
    	var jumlahOrang = $('#jumlahOrang').val();

        $.ajax({
            url   : '<?php echo site_url('admin/order/check_step1')?>',
            dataType : 'json',
            type : "POST",
            data : {namaPaket:idPaket,tanggal:tanggal,jumlahOrang,jumlahOrang},
            success : function(data){
            	if ($.isEmptyObject(data.error)) {
					$('#satu').hide('slow');
					$('#dua').show('slow');
                    $("#next-1").removeAttr("disabled");
                    // console.log(data.success);
                }else{
                    $("#next-1").removeAttr("disabled");
                    $.each(data.error, function(i, log) {
                      var ele = $('#'+i);
                      ele.addClass(i.length > 0 ? 'is-invalid' : 'is-valid');
                      $('#error_'+i).html(log).addClass(i.length > 0 ? 'invalid-feedback' : null);
                      (ele != 'namaPaket') ? $('#namaPaket').addClass('is-valid') : null;
                      (ele != 'tanggal') ? $('#tanggal').addClass('is-valid') : null;
                      (ele != 'jumlahOrang') ? $('#jumlahOrang').addClass('is-valid') : null;
                   });

                }
            }

        });
    }
    function formatRupiah(angka, prefix){
		number_string 	= angka.toString();
		split   		= number_string.split(',');
		sisa     		= split[0].length % 3;
		rupiah     		= split[0].substr(0, sisa);
		ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if(ribuan){
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
    function ambilHarga(jumlahOrang,idTour2){
        if(jumlahOrang){
            $.ajax({
                url   : '<?php echo site_url('admin/order/get_harga')?>',
                dataType : 'json',
                type : "POST",
                data : {
                	jumlah : jumlahOrang,
                	tour_id:idTour2
                },
                success : function(data){
                	var hargaAsli = parseInt(data.harga);
                	var diskon = parseInt(data.diskon);
                	var asuransi = parseInt(data.asuransi);
                	var	harga = (hargaAsli-(((diskon/100)*hargaAsli)+asuransi));
                	$('#hargaOrang').val(formatRupiah(Math.abs(harga),'Rp. '));
                }

            });
        }
    }
});
</script>
<?=$this->endSection();?>

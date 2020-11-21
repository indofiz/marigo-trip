<?=$this->extend('layout/template');?>
<?=$this->section('frontContent');?>
<div class="travel_variation_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_title text-center mb_70">
                   <h3>Kenapa Anda Harus Memilih Marigo ?</h3>
               </div>
           </div>
       </div>
       <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="single_travel text-center">
                <div class="icon">
                    <img src="<?=base_url('front/img/svg_icon/1.svg');?>" alt="">
                </div>
                <h3>Menyenangkan</h3>
                <p>A wonderful serenity has taken to the possession of my entire soul.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="single_travel text-center">
                <div class="icon">
                    <img src="<?=base_url('front/img/svg_icon/2.svg');?>" alt="">
                </div>
                <h3>Nyaman</h3>
                <p>A wonderful serenity has taken to the possession of my entire soul.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="single_travel text-center">
                <div class="icon">
                    <img src="<?=base_url('front/img/svg_icon/3.svg');?>" alt="">
                </div>
                <h3>Ramah Lingkungan</h3>
                <p>Memerhatikan aspek kelestarian lingkungan mulai dari kemasan makanan yang bisa digunakan kembali (reusable)</p>
            </div>
        </div>
    </div>
</div>
</div>

<!-- popular_destination_area_start  -->
<div class="popular_destination_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Destinasi Favorit</h3>
                    <p>Temukan Destinasi Wisata Anda Menjelajahi Nusantara Tanpa Jejak</p>
                </div>
            </div>
        </div>
        <div class="row">
        	<?php foreach($destinasi as $dest) :?>
            <div class="col-lg-4 col-md-6">
                <div class="single_destination">
                    <div class="thumb">
                        <img src="<?=base_url('image_destinasi/'.$dest['image_destinasi'])?>" alt="">
                    </div>
                    <div class="content">
                        <p class="d-flex align-items-center"><?=$dest['destinasi'];?> <a href="travel_destination.html">  07 Places</a> </p>
                    </div>
                </div>
            </div>
	        <?php endforeach;?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="more_place_btn text-center">
                    <a class="boxed-btn4" href="#">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular_destination_area_end  -->

<div class="popular_places_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Paket Tour Favorit</h3>
                    <p>Pilih Paket Tour Favorit Anda.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($paket_tour as $paket) :?>

            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="<?=base_url('image_tour/'.$paket['tour_image'])?>" alt="">

                    </div>
                    <div class="place_info">
                        <a href="destination_details.html"><h3><?=$paket['tour_judul'];?></h3></a>
                        <?php foreach($destinasi as $dest) :?>                        
                            <p><?=($paket['tour_destinasi'] == $dest['destinasi_id']) ? $dest['destinasi'] : null;?></p>
                        <?php endforeach;?>
                        <div class="rating_days d-flex justify-content-between">

                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <?php foreach($durasi as $dur) :?>                        
                                    <a href="#"><?=($paket['tour_durasi'] == $dur['durasi_id']) ? $dur['durasi'] : null;?></a>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            
            <div class="col-lg-12">
                <div class="more_place_btn text-center">
                    <a class="boxed-btn4" href="#">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="video_area video_bg overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video_wrap text-center">
                    <h3>Open Trip - Marigo</h3>
                    <div class="video_icon">
                        <a class="popup-video video_play_button" href="https://youtu.be/wawJkNrT7nM">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=$this->endSection();?>
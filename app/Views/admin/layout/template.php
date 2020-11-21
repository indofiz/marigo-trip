<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?=$title;?> - Marigo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="<?=base_url('assets/scripts/main.js');?>"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sizzle/2.3.5/sizzle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.6/metisMenu.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/sweetalert/sweetalert2.all.min.js');?>"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.ckeditor.com/4.15.0/basic/ckeditor.js"></script>
<!-- cdnjs -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script> -->
<link href="<?=base_url('main.css');?>" rel="stylesheet">
<link href="<?=base_url('styled.css');?>" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="/assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a href="<?=base_url('logout');?>" class="dropdown-item">Logout</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Juliansyah
                                    </div>
                                    <div class="widget-subheading">
                                        Administrator
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-share pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>        
        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="app-main">
            <!-- SIdebar LOGO -->
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="<?=base_url('admin/dashboard');?>" class="<?= $url == 'dashboard' ? 'mm-active' : NULL;?>">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Data Wisata</li>
                                
                                <li>
                                    <a href="<?=base_url('admin/destinasi');?>" class="<?= $url == 'destinasi' ? 'mm-active' : NULL;?>">
                                        <i class="metismenu-icon pe-7s-map-marker"></i>
                                        Destinasi
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=base_url('admin/durasi');?>" class="<?= $url == 'durasi' ? 'mm-active' : NULL;?>">
                                        <i class="metismenu-icon pe-7s-timer"></i>
                                        Durasi Wisata
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=base_url('admin/kategori');?>" class="<?= $url == 'kategori' ? 'mm-active' : NULL;?>">
                                        <i class="metismenu-icon pe-7s-wine"></i>
                                        Kategori Wisata
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Paket</li>
                                <li>
                                    <a href="<?=base_url('admin/paket_tour');?>" class="<?= $url == 'paket_tour' ? 'mm-active' : NULL;?>">
                                        <i class="metismenu-icon pe-7s-plane"></i>
                                        Tambah Paket Wisata
                                    </a>
                                    <a href="<?=base_url('admin/paket_tour/list_paket');?>" class="<?= $url == 'list_paket' ? 'mm-active' : NULL;?>">
                                        <i class="metismenu-icon pe-7s-menu"></i>
                                        List Paket Wisata
                                    </a>
                                    <a href="<?=base_url('admin/order');?>" class="<?= $url == 'order' ? 'mm-active' : NULL;?>">
                                        <i class="metismenu-icon pe-7s-cart"></i>
                                        Order Paket Wisata
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Orderan</li>
                                <li>
                                    <a href="<?=base_url('admin/list_order');?>" class="<?= $url == 'order_list' ? 'mm-active' : NULL;?>">
                                        <i class="metismenu-icon pe-7s-menu"></i>
                                        List Orderan Paket
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <!-- TOP CONTENT -->
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-<?=$icon;?> icon-gradient bg-happy-itmeo">
                                        </i>
                                    </div>
                                    <div><?=$title;?>
                                        <div class="page-title-subheading"><?=$sub_head;?>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <?=$this->renderSection('content');?>
                    </div>
                    <!-- FOOTER -->
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>NEW</small>
                                                </div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
        </div>
    </div>

<!-- MODAL -->
<!-- MODAL EDIT PAKET -->
<form id="paket_tour_edit" action="<?php echo site_url('admin/paket_tour/saveEditPaket')?>">
<div class="modal fade" id="modalEditPaket" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <?=csrf_field();?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalEditBody">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-lg" id="save_paket_button">Save Paket</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- MODAL EDIT durasi dll -->
<form>
<?=csrf_field();?>
<div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <label id="label-modal"></label>
                <input type="text" class="form-control" id="data_val_edit" placeholder="">
                <input type="hidden" class="form-control" id="dataid_val_edit">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" type="submit" id="btn_update" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- MODAL EDIT Destinasi -->
<form action="<?php echo site_url('admin/destinasi/edit')?>" id="destinasi_edit_modal">
<?=csrf_field();?>
<div class="modal fade" id="Modal_EditDes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="text-center mb-3 image-destinasi-block">
                <img src="" alt="" id="modal-image-destinasi" class="img-thumbnail previewImgEdit" style="max-height: 300px">
            </div>
            <div class="form-group">
                <label id="label-modal"></label>
                <input type="text" name="destinasi" class="form-control" id="data_des_edit" placeholder="">
                <div class="invalid-feedback" id="destinasi_edit_feedback"></div>
                <input type="hidden" name="id" class="form-control" id="dataid_des_edit">
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image_destinasi_edit" name="image_destinasi" onchange="previewFileEdit(this);">
              <label class="custom-file-label" for="customFile" id="labelEditDes">Pilih gambar</label>
              <div class="invalid-tooltip" id="destinasi_image_feedback"></div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" type="submit" id="btn_update_des" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- MOdal List Paket -->
<div class="modal fade" id="ModalPaketList" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-title">Pilih Paket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Cari disini...." id="cariPaket">
        </div>
        <div id="modalPilihPaket" class="row">
            <div class="text-center mt-5 mb-5 loading-item-pilih">
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
</div>
</body>


<script type="text/javascript">

function previewFileEdit(input){
    var file = $("#image_destinasi_edit").get(0).files[0];
    var elemen = $('#image_destinasi_edit');
    if(file){
        var reader = new FileReader();

        reader.onload = function(){
            $(".previewImgEdit").attr("src", reader.result);
        }

        reader.readAsDataURL(file);
    var fileName = $(elemen).val();
    //replace the "Choose a file" label
    $(elemen).next('.custom-file-label').html(fileName);
    }
}

$(document).ready(function(){
    $(".closed-sidebar-btn").on("click", function(){
        $(this).addClass('isactive');
        $(".app-container").addClass("closed-sidebar");
    });
    $("#modalEditPaket").on("hidden.bs.modal", function(){
        $(".modal-body").html("");
    });

    $('.list_paket_tour').ready(function(){
       tampilDataPaket();
    });
    $('#destinasi-content').ready(function(){
        setTimeout(function(){
            $('.loading-item').hide();
            $('#destinasi-hide').show();
        ; }, 2000);
        setInterval(function(){
            destinasi_table.ajax.reload(null,false);
        }, 3000 );
    });
    $('#durasi-content').ready(function(){
        setTimeout(function(){
            $('.loading-item').hide();
            $('#durasi-hide').show();
        ; }, 1000);
        setInterval(function(){
            durasi_table.ajax.reload(null,false);
        }, 3000 );
    });
    $('#kategori-content').ready(function(){
        setTimeout(function(){
            $('.loading-item').hide();
            $('#kategori-hide').show();
        ; }, 1000);
        setInterval(function(){
            kategori_table.ajax.reload(null,false);
        }, 3000 );
    });

    $('#durasi_save').on('click',function(){
        save_durasi();
    });
    $('#kategori_save').on('click',function(){
        save_kategori();
    });
    
    // ALERT SUCCESS
    function alert_success(jenis){
        Swal.fire({
          icon: 'success',
          title: 'Data '+jenis,
          text: 'Berhasil diedit'
        });
    }
    function alert_add(jenis){
        Swal.fire({
          icon: 'success',
          title: 'Data '+jenis,
          text: 'Berhasil ditambah'
        });
    }

    // SAVE Durasi FUNCTION
    function save_durasi(){
        var durasi = $('#durasi_val').val();
        $("#durasi_save").attr("disabled", "disabled");
        $.ajax({
            url: '<?php echo base_url('admin/durasi/saveData');?>',
            type: 'POST',
            dataType : 'json',
            data: {
                durasi: durasi
            },
            success: function(data){
                tampilDataDurasi();
                $("#durasi_save").removeAttr("disabled");
                if ($.isEmptyObject(data.error)) {
                    $('#form-durasi').find('input:text').val('');
                    $("#durasi_val").removeClass("is-invalid");
                }else{
                    $("#durasi_val").addClass("is-invalid");
                    $("#durasi_feedback").html(data.error.durasi);
                    console.log(data.error.durasi);
                }
            }

        });
        return false;
    }
    // SAVE Kategori FUNCTION
    function save_kategori(){
        var kategori = $('#kategori_val').val();
        $("#kategori_save").attr("disabled", "disabled");
        $.ajax({
            url: '<?php echo base_url('admin/kategori/saveData');?>',
            type: 'POST',
            dataType: 'json',
            data: {
                kategori: kategori
            },
            success: function(data){
                $("#kategori_save").removeAttr("disabled");
                if ($.isEmptyObject(data.error)) {
                    $('#form-kategori').find('input:text').val('');
                    $("#kategori_val").removeClass("is-invalid");
                    console.log('Success');
                }else{
                    $("#kategori_val").addClass("is-invalid");
                    $("#kategori_feedback").html(data.error.kategori);
                }
            }

        });
        return false;
    }

    $('#cariPaket').on('keyup', function(e) {
        e.preventDefault();
        var search = $(this).val();
        pilihDataPaket(search);
    });

    // DELETE DESTINASI FUNCTION
    function delete_paket(id){
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('admin/paket_tour/delete')?>",
            dataType : "JSON",
            data : {id:id},
            success: function(data){
            }
        });
        return false;
    }
    // DELETE DESTINASI FUNCTION
    function delete_destinasi(id){
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('admin/destinasi/delete')?>",
            dataType : "JSON",
            data : {id:id},
            success: function(data){
            }
        });
        return false;
    }
    
    // DELETE DURASI FUNCTION
    function delete_durasi(id){
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('admin/durasi/delete')?>",
            dataType : "JSON",
            data : {id:id},
            success: function(data){
            }
        });
        return false;
    }
    function delete_kategori(id){
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('admin/kategori/delete')?>",
            dataType : "JSON",
            data : {id:id},
            success: function(data){
            }
        });
        return false;
    }
    $('#paket_list-content').on('click','.item_edit_paket',function(e){
        e.preventDefault();
        $('#modalEditPaket').modal('show');
        const url = $(this).data('url');
        const paket = $(this).data('paket');
        $.ajax({
            url   : url,
            dataType : 'json',
            complete: function(){
                $('.loading-item').hide();
                $('.loading-item-modal').hide();
                $("#save_paket_button").removeAttr("disabled");
            },
            success : function(data){
                $('#modalEditBody').html(data.data).show();
            }

        });
    });

    $('#destinasi_edit_modal').on('submit',function(e){
        e.preventDefault();
        $("#btn_update_des").attr("disabled", "disabled");
        $(this).find('input').removeClass('is-invalid');
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
                $("#btn_update_des").removeAttr("disabled");
                if ($.isEmptyObject(data.error)) {
                    $('#data_val_edit').val("");
                    $('#dataid_val_edit').val("");
                    $('#image_destinasi_edit').val("");
                    $('#Modal_EditDes').modal('hide');
                    alert_success('Destinasi');
                }else{
                    if (data.error.destinasi) {
                        $("#data_des_edit").addClass("is-invalid");
                        $("#destinasi_edit_feedback").html(data.error.destinasi);
                    }else{$("#destinasi_val").addClass("is-valid");}
                    if (data.error.image_destinasi_edit) {
                        $("#image_destinasi_edit").addClass("is-invalid");
                        $("#destinasi_image_feedback").html(data.error.image_destinasi_edit);
                    }else{$("#image_destinasi_edit").addClass("is-valid");}

                }
            },
             error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus + errorThrown);
             }
        });
        return false;
    });
    
    $('#paket_tour_edit').on('submit',function(e){
        e.preventDefault();
        CKEDITOR.instances['tour_jadwal'].updateElement();
        CKEDITOR.instances['tour_fasilitas'].updateElement();
        $("#save_paket_button").attr("disabled", "disabled");
        $('#paket_tour_edit').find('input').removeClass('is-invalid');
        $('#paket_tour_edit').find('select').removeClass('is-invalid');
        $('#paket_tour_edit').find('textarea').removeClass('is-invalid');
        $('#paket_tour_edit').find('input').removeClass('is-valid');
        $('#paket_tour_edit').find('select').removeClass('is-valid');
        $('#paket_tour_edit').find('textarea').removeClass('is-valid');
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
                    $('#modalEditPaket').modal('hide');
                    // $(document.body).removeClass('modal-open');
                    // $('.modal-backdrop').remove();
                    $('#paket_tour_edit').find('input:text').val('');
                    alert_success('Paket Tour');
                    tampilDataPaket();
                    console.log(data.success);
                }else{
                    $("#save_paket_button").removeAttr("disabled");
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
    // Click LINK UPDATE
    $('#d_data').on('click','.item_edit',function(e){
        e.preventDefault();
        const type_data = $('#d_data').data('type');
        if (type_data == 'destinasi') {
            const destinasi = $(this).data('destinasi');
            const image_destinasi = $(this).data('image');
            const image_cut = image_destinasi.split("/");
            const id = $(this).data('id');
            $('#Modal_EditDes').modal('show');
            $('#data_des_edit').val(destinasi);
            $('#dataid_des_edit').val(id);
            $('#labelEditDes').html(image_cut[4]);
            $('#modal-image-destinasi').attr('src',image_destinasi);
        }else if(type_data == 'durasi'){
            const durasi = $(this).data('durasi');
            const id = $(this).data('id');
            $('#Modal_Edit').modal('show');
            $('#data_val_edit').val(durasi);
            $('#dataid_val_edit').val(id);
            $('#modal-title').html('Edit Durasi Paket');
            $('#label-modal').html('Lama Durasi:');
        }else if(type_data == 'kategori'){
            const kategori = $(this).data('kategori');
            const id = $(this).data('id');
            $('#Modal_Edit').modal('show');
            $('#data_val_edit').val(kategori);
            $('#dataid_val_edit').val(id);
            $('#modal-title').html('Edit Kategori Paket');
            $('#label-modal').html('Nama Kategori:');
        }else if (type_data == 'paket_tour') {
            const url = $(this).data('url');
            const paket = $(this).data('paket');
            $('#modal-title').html(paket);
            edit_tour(url);
        }
    });
    // UPDATE AJAX
    $('#btn_update').on('click',function(){
        const type_data = $('#d_data').data('type');
        const data = $('#data_val_edit').val();
        const id = $('#dataid_val_edit').val();
        if (type_data == 'durasi') {
            $.ajax({
                url  : "<?php echo site_url('admin/durasi/edit')?>",
                type : "POST",
                data : {id:id , durasi:data},
                success: function(data){
                    $('#data_val_edit').val("");
                    $('#dataid_val_edit').val("");
                    $('#Modal_Edit').modal('hide');
                    alert_success(type_data);
                }
            });
            return false;
        }else if (type_data == 'kategori') {
            $.ajax({
                url  : "<?php echo site_url('admin/kategori/edit')?>",
                type : "POST",
                data : {id:id , kategori:data},
                success: function(data){
                    $('#data_val_edit').val("");
                    $('#dataid_val_edit').val("");
                    $('#Modal_Edit').modal('hide');
                    alert_success(type_data);
                }
            });
            return false;
        }
    });
    // DELETE SWEET ALERT
    $(document).on('click','.remove',function(e){
        e.preventDefault();
        const id = $(this).data('id');
        const type = $('#d_data').data('type');
        Swal.fire({
          title: 'Apakah Kamu Yakin?',
          text: "Data tidak bisa dikembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Hapus Data!'
        }).then((result) => {
          if (result.value) {
            if (type == 'destinasi') {
                delete_destinasi(id);
            }else if(type == 'durasi'){
                delete_durasi(id);
            }else if(type == 'kategori'){
                delete_kategori(id);
            }else if(type == 'paket_tour'){
                delete_paket(id);
                tampilDataPaket();
            }
          }
        })
    });

    /*CKEDITOR */

    /*DATABLE*/
    var destinasi_table = $('#destinasi').DataTable();
    var kategori_table = $('#kategori').DataTable({
        "ajax": {
            "url": $('#kategori').data('url'),
        },
        "columnDefs": [
            {
                "targets": [1],
                "visible": false
            }
        ],
        "columns": [
          { "data": "i" },
          { "data": "kategori_id" },
          { "data": "kategori" },
          { "data": "button" }
          ]
    });

    var durasi_table = $('#durasi').DataTable({
        "ajax": {
            "url": $('#durasi').data('url'),
        },
        "columnDefs": [
            {
                "targets": [1],
                "visible": false
            }
        ],
        "columns": [
          { "data": "i" },
          { "data": "durasi_id" },
          { "data": "durasi" },
          { "data": "button" }
          ]
    });
    var destinasi_table = $('#destinasi_table').DataTable({
        "ajax": {
            "url": $('#destinasi_table').data('url'),
        },
        "columnDefs": [
            {
                "targets": [1],
                "visible": false
            }
        ],
        "columns": [
          { "data": "i" },
          { "data": "destinasi_id" },
          { "data": "image_destinasi" },
          { "data": "destinasi" },
          { "data": "button" }
          ]
    });
    function tampilDataPaket(){
        $.ajax({
            url   : '<?php echo site_url('admin/paket_tour/showDataTour')?>',
            dataType : 'json',
            complete: function(){
                $('.loading-item').hide();
            },
            success : function(data){
                $('#paket_list-content').html(data.data).show();
            }

        });
    }
    $('.btnPilihPaket').on('click',function(){
        $('.loading-item-pilih').show();
        pilihDataPaket();
    });

    function pilihDataPaket(search){
        if (search) {
            $.ajax({
                url   : '<?php echo site_url('admin/order/search_paket')?>',
                dataType : 'json',
                type : "POST",
                data : {search:search},
                complete: function(){
                    $('.loading-item-pilih').hide();
                },
                success : function(data){
                    $('#modalPilihPaket').html(data.data).show();
                }

            });
        }else{
            $.ajax({
                url   : '<?php echo site_url('admin/order/list_paket')?>',
                dataType : 'json',
                complete: function(){
                    $('.loading-item-pilih').hide();
                },
                success : function(data){
                    $('#modalPilihPaket').html(data.data).show();
                }

            });
        }
    }

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
                    $('#tampilSatuPaket').show();
                }

            });
        }
    }

});
</script>

</html>

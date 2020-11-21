<?php namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{

	protected $table  = 'data_pesanan';
	protected $primaryKey = 'pesanan_id';
	protected $allowedFields = ['nomor_invoice','pelanggan_nama','pelanggan_institusi','pelanggan_email','pelanggan_telepon','pelanggan_asal','pelanggan_permintaan','tour_id','total_harga','quantity','dp','status','tanggal','diskon','asuransi']; 

}
<?php namespace App\Models;

use CodeIgniter\Model;

class PaketTourModel extends Model
{

	protected $table  = 'paket_tour';
	protected $primaryKey = 'tour_id';
	protected $allowedFields = ['tour_judul','tour_url','tour_image','tour_destinasi','tour_durasi','tour_kategori','tour_jadwal','tour_fasilitas','tour_diskon','tour_asuransi']; 

}
<?php namespace App\Models;

use CodeIgniter\Model;

class DestinasiModel extends Model
{

	protected $table  = 'destinasi';
	protected $primaryKey = 'destinasi_id';
	protected $allowedFields = ['destinasi','image_destinasi']; 

}
<?php namespace App\Models;

use CodeIgniter\Model;

class HargaModel extends Model
{

	protected $table  = 'harga';
	protected $primaryKey = 'harga_id';
	protected $allowedFields = ['min_orang','max_orang','harga','id_tour']; 

}
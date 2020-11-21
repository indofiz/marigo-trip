<?php namespace App\Models;

use CodeIgniter\Model;

class DurasiModel extends Model
{

	protected $table  = 'durasi';
	protected $primaryKey = 'durasi_id';
	protected $allowedFields = ['durasi']; 

}
<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\paketTourModel;
use App\Models\destinasiModel;
use App\Models\durasiModel;
use App\Models\kategoriModel;
class Home extends BaseController
{
	protected $paketTourModel;
	protected $destinasiModel;
	protected $durasiModel;
	protected $kategoriModel;
	public function __construct(){
		$this->paketTourModel = new PaketTourModel();
		$this->destinasiModel = new DestinasiModel();
		$this->durasiModel = new DurasiModel();
		$this->kategoriModel = new KategoriModel();
	}

	public function index()
	{
		$data = [
			'destinasi' => $this->destinasiModel->orderBy('destinasi_id','DESC')->findAll(),
			'paket_tour' => $this->paketTourModel->orderBy('tour_id','DESC')->findAll(),
			'durasi' => $this->durasiModel->orderBy('durasi_id','DESC')->findAll(),
			'kategori' => $this->kategoriModel->orderBy('kategori_id','DESC')->findAll(),
		];
		return view('home',$data);
	}

	//--------------------------------------------------------------------

}

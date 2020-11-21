<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\paketTourModel;
use App\Models\destinasiModel;
use App\Models\durasiModel;
use App\Models\kategoriModel;
use App\Models\hargaModel;

class Paket_tour extends BaseController
{
	protected $paketTourModel;
	protected $destinasiModel;
	protected $durasiModel;
	protected $kategoriModel;
	protected $hargaModel;
	public function __construct(){
		$this->paketTourModel = new PaketTourModel();
		$this->destinasiModel = new DestinasiModel();
		$this->durasiModel = new DurasiModel();
		$this->kategoriModel = new KategoriModel();
		$this->hargaModel = new HargaModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Paket Tour',
			'url' => 'paket_tour',
			'sub_head' => 'Informasi Paket Tour marigo',
			'icon' => 'plane',
			'destinasi_list' => $this->destinasiModel->orderBy('destinasi_id','DESC')->findAll(),
			'durasi_list' => $this->durasiModel->orderBy('durasi_id','DESC')->findAll(),
			'kategori_list' => $this->kategoriModel->orderBy('kategori_id','DESC')->findAll(),
		];
		return view('admin/paket_tour',$data);
	}
	public function list_paket()
	{
		$data = [
			'title' => 'List Paket Tour',
			'url' => 'list_paket',
			'sub_head' => 'List Informasi Paket Tour marigo',
			'icon' => 'menu',
			'destinasi_list' => $this->destinasiModel->orderBy('destinasi_id','DESC')->findAll(),
			'durasi_list' => $this->durasiModel->orderBy('durasi_id','DESC')->findAll(),
			'kategori_list' => $this->kategoriModel->orderBy('kategori_id','DESC')->findAll(),
			'paket_tour' => $this->paketTourModel->orderBy('tour_id','DESC')->findAll(),
		];
		return view('admin/list_paket',$data);
	}

	public function showDataTour(){

		$data['paket_tour'] = $this->paketTourModel->orderBy('tour_id','DESC')->findAll();
		$msg = [
			'data' => view('admin/layout/list_tour',$data),
		];
        echo json_encode($msg);
	}

	public function editTour($id){
		$data = [
			'destinasi_list' => $this->destinasiModel->orderBy('destinasi_id','DESC')->findAll(),
			'durasi_list' => $this->durasiModel->orderBy('durasi_id','DESC')->findAll(),
			'kategori_list' => $this->kategoriModel->orderBy('kategori_id','DESC')->findAll(),
			'paket_tour' => $this->paketTourModel->where(['tour_id' => $id])->first(),
			'harga_tour' => $this->hargaModel->where(['id_tour' => $id])->findAll(),
			'id' => $id,
		];
		$msg = [
			'data' => view('admin/layout/edit_tour',$data),
		];
        echo json_encode($msg);
	}

	public function saveDataPaket(){
		if(!$this->validate([
			'tour_judul' => [
				'rules' => 'required|is_unique[paket_tour.tour_judul]',
				'errors' => [
					'required' => '{field} harus diisi.',
					'is_unique' => '{field} sudah ada.',
				]
			],
			'tour_image' => [
				'rules' => 'uploaded[tour_image]|max_size[tour_image,3072]|mime_in[tour_image,image/jpg,image/jpeg,image/png]|is_image[tour_image]',
				'errors' => [
					'uploaded' => 'Gambar harus dipilih.',
					'max_size' => 'Maksimal ukuran gambar adalah 3MB.',
					'mime_in' => 'Format gambar harus JPEG,JPG,PNG.',
					'is_image' => 'File harus bentuk gambar.',
				]
			],
			'tour_destinasi' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi.'
				]
			],
			'tour_durasi' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi.'
				]
			],
			'tour_kategori' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi.'
				]
			]
		]))
		{
			$validation = \Config\Services::validation();
			if ($validation->getErrors())
			{
				echo json_encode(['error' => $validation->getErrors()]);
			}
		}else{
			$jumlahInput = count($this->request->getPost('harga'));
			$image = $this->request->getFile('tour_image');
			$image_random = $image->getRandomName();
	        $image->move(ROOTPATH . 'public/image_tour',$image_random);
	 		$url_title = url_title($this->request->getPost('tour_judul'),'-',true);
			$data = [
				'tour_judul' => $this->request->getPost('tour_judul'),
				'tour_url' => $url_title,
				'tour_image' => $image_random,
				'tour_destinasi' => $this->request->getPost('tour_destinasi'),
				'tour_durasi' => $this->request->getPost('tour_durasi'),
				'tour_kategori' => $this->request->getPost('tour_kategori'),
				'tour_jadwal' => $this->request->getPost('tour_jadwal'),
				'tour_fasilitas' => $this->request->getPost('tour_fasilitas'),
				'tour_diskon' => $this->request->getPost('diskon'),
				'tour_asuransi' => $this->request->getPost('asuransi'),
			];

			$this->paketTourModel->save($data);
			$last_id = $this->paketTourModel->insertID();
			
			$harga = $this->request->getPost('harga');
			$min_orang = $this->request->getPost('min_orang');
			$max_orang = $this->request->getPost('max_orang');
			for ($i=0; $i < $jumlahInput; $i++) { 
				$this->hargaModel->save([
					'min_orang' => $min_orang[$i],
					'max_orang' => $max_orang[$i],
					'harga' => $harga[$i],
					'id_tour' => $last_id,
				]);
			}
			echo json_encode(['success' => $last_id]);
		}

	}

	public function saveEditPaket(){
		$id = $this->request->getPost('tour_id');
		$recent_paket = $this->paketTourModel->where(['tour_id' => $id])->first();
		$recent_judul = $recent_paket['tour_judul'];
		if ($recent_judul == $this->request->getVar('tour_judul')) {
			$ruleJudul = 'required';
		}else { 
			$ruleJudul = 'required|is_unique[paket_tour.tour_judul]';
		}

		if(!$this->validate([
			'tour_judul' => [
				'rules' => $ruleJudul,
				'errors' => [
					'required' => '{field} harus diisi.',
					'is_unique' => '{field} sudah ada.',
				]
			],
			'tour_image' => [
				'rules' => 'max_size[tour_image,3072]|mime_in[tour_image,image/jpg,image/jpeg,image/png]|is_image[tour_image]',
				'errors' => [
					'max_size' => 'Maksimal ukuran gambar adalah 3MB.',
					'mime_in' => 'Format gambar harus JPEG,JPG,PNG.',
					'is_image' => 'File harus bentuk gambar.',
				]
			],
			'tour_destinasi' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi.'
				]
			],
			'tour_durasi' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi.'
				]
			],
			'tour_kategori' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi.'
				]
			]
		]))
		{
			$validation = \Config\Services::validation();
			if ($validation->getErrors())
			{
				echo json_encode(['error' => $validation->getErrors()]);
			}
		}else{
			$recent_image = $recent_paket['tour_image'];
			$jumlahInput = count($this->request->getPost('harga'));
			$image = $this->request->getFile('tour_image');
			if ($image->getError() == 4) {
				$imageName = $recent_image;
			}else{
		        $imageName = $image->getRandomName();
		        $image->move(ROOTPATH . 'public/image_tour',$imageName);
		        // HAPUS
		        if ($recent_image != 'default.png') {
			        unlink('image_tour/'.$recent_image);
		        }
			}
	 		$url_title = url_title($this->request->getPost('tour_judul'),'-',true);
			$data = [
				'tour_id' => $this->request->getPost('tour_id'),
				'tour_judul' => $this->request->getPost('tour_judul'),
				'tour_url' => $url_title,
				'tour_image' => $imageName,
				'tour_destinasi' => $this->request->getPost('tour_destinasi'),
				'tour_durasi' => $this->request->getPost('tour_durasi'),
				'tour_kategori' => $this->request->getPost('tour_kategori'),
				'tour_jadwal' => $this->request->getPost('tour_jadwal'),
				'tour_fasilitas' => $this->request->getPost('tour_fasilitas'),
				'tour_diskon' => $this->request->getPost('diskon'),
				'tour_asuransi' => $this->request->getPost('asuransi'),
			];

			$this->paketTourModel->save($data);
			$this->hargaModel->where('id_tour',$id)->delete();
			$last_id = $id;
			$harga = $this->request->getPost('harga');
			$min_orang = $this->request->getPost('min_orang');
			$max_orang = $this->request->getPost('max_orang');
			for ($i=0; $i < $jumlahInput; $i++) { 
				$this->hargaModel->save([
					'min_orang' => $min_orang[$i],
					'max_orang' => $max_orang[$i],
					'harga' => $harga[$i],
					'id_tour' => $last_id,
				]);
			}
			echo json_encode(['success' => $recent_image]);
		}

	}


	public function tambahInput(){
		if ($this->request->isAjax()) {
			$msg = [
				'data' => view('admin/layout/form_tambah')
			];
			echo json_encode($msg);
		}
	}

	public function delete(){
		$id = $this->request->getPost('id');
		$recent_paket = $this->paketTourModel->where(['tour_id' => $id])->first();
		$recent_image = $recent_paket['tour_image'];
		if ($recent_image != 'default.png') {
	        unlink('image_tour/'.$recent_image);
        }
		$this->paketTourModel->delete($id);
	}


}

<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\DestinasiModel;

class Destinasi extends BaseController
{
	protected $destinasiModel;
	public function __construct(){
		$this->destinasiModel = new DestinasiModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Destinasi',
			'url' => 'destinasi',
			'sub_head' => 'Informasi Destinasi wisata marigo',
			'icon' => 'map-2',
			'destinasi' => $this->destinasiModel->orderBy('destinasi_id','DESC')->findAll(),
		];
		return view('admin/destinasi',$data);
	}

	public function showData(){

		$data = $this->destinasiModel->orderBy('destinasi_id','DESC')->findAll(); 
		$i=1;
		foreach($data as $dest) {
			$image_dest = base_url('image_destinasi/'.$dest['image_destinasi']);
			$data_out[] = [
				'i' => $i++,
				'destinasi_id' => $dest['destinasi_id'],
				'image_destinasi' => '<img src="'.$image_dest.'" style="height: 70px;width: 70px;" />',
				'destinasi' => $dest['destinasi'],
				'button' => '<center>
						<button type="button" class="btn btn-info btn-sm item_edit" data-id="'.$dest['destinasi_id'].'" data-destinasi="'.$dest['destinasi'].'" data-image="'.$image_dest.'" data-toggle="modal" data-target="#Modal_edit"><i class="fa fa-edit"></i> Edit</button> <a href="" class="btn btn-danger btn-sm remove" data-id="'.$dest['destinasi_id'].'" data-type="destinasi"><i class="fa fa-trash"></i> Delete</a></center>'
			];
		}
		
        echo json_encode(['data' => $data_out]);
	}

	public function saveData(){
		if(!$this->validate([
			'destinasi' => [
				'rules' => 'required|is_unique[destinasi.destinasi]',
				'errors' => [
					'required' => '{field} harus diisi.',
					'is_unique' => '{field} sudah ada.',
				]
			],
			'image_destinasi' => [
				'rules' => 'uploaded[image_destinasi]|max_size[image_destinasi,3072]|mime_in[image_destinasi,image/jpg,image/jpeg,image/png]|is_image[image_destinasi]',
				'errors' => [
					'uploaded' => 'Gambar harus dipilih.',
					'max_size' => 'Maksimal ukuran gambar adalah 3MB.',
					'mime_in' => 'Format gambar harus JPEG,JPG,PNG.',
					'is_image' => 'File harus bentuk gambar.',
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
			$image = $this->request->getFile('image_destinasi');
			$image_random = $image->getRandomName();
	        $image->move(ROOTPATH . 'public/image_destinasi',$image_random);
			$data = [
				'destinasi' => $this->request->getPost('destinasi'),
				'image_destinasi' => $image_random
			];

			$this->destinasiModel->save($data);
				echo json_encode(['success' => 'Success Save Data']);
		}
	}

	public function edit(){
		$id = $this->request->getPost('id');
		$recent_destinasi = $this->destinasiModel->where(['destinasi_id' => $id])->first();
		$recent_destinasi_judul = $recent_destinasi['destinasi'];
		if ($recent_destinasi_judul == $this->request->getPost('destinasi')) {
			$ruleDestinasi = 'required';
		}else { 
			$ruleDestinasi = 'required|is_unique[destinasi.destinasi]';
		}
		if(!$this->validate([
			'destinasi' => [
				'rules' => $ruleDestinasi,
				'errors' => [
					'required' => '{field} harus diisi.',
					'is_unique' => '{field} sudah ada.',
				]
			],
			'image_destinasi' => [
				'rules' => 'max_size[image_destinasi,3072]|mime_in[image_destinasi,image/jpg,image/jpeg,image/png]|is_image[image_destinasi]',
				'errors' => [
					'max_size' => 'Maksimal ukuran gambar adalah 3MB.',
					'mime_in' => 'Format gambar harus JPEG,JPG,PNG.',
					'is_image' => 'File harus bentuk gambar.',
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

			$image = $this->request->getFile('image_destinasi');
			$recent_image = $recent_destinasi['image_destinasi'];
			if ($image->getError() == 4) {
				$imageName = $recent_image;
			}else{
		        $imageName = $image->getRandomName();
		        $image->move(ROOTPATH . 'public/image_destinasi',$imageName);
		        // Hapus gambar sebelumnya
		        if ($recent_image != 'default.png') {
			        unlink('image_destinasi/'.$recent_image);
		        }
			}
			$data = [
				'destinasi_id' => $this->request->getPost('id'),
				'destinasi' => $this->request->getPost('destinasi'),
				'image_destinasi' => $imageName
			];

			$this->destinasiModel->save($data);
				echo json_encode(['success' => 'Success Save Data']);
		}
	}

	public function delete(){
		$id = $this->request->getPost('id');
		$recent_destinasi = $this->destinasiModel->where(['destinasi_id' => $id])->first();
		$recent_image = $recent_destinasi['image_destinasi'];
		if ($recent_image != 'default.png') {
	        unlink('image_destinasi/'.$recent_image);
        }
		$this->destinasiModel->delete($id);
	}


}

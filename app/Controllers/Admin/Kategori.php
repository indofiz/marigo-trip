<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\kategoriModel;

class Kategori extends BaseController
{
	protected $kategoriModel;
	public function __construct(){
		$this->kategoriModel = new KategoriModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Kategori',
			'url' => 'kategori',
			'sub_head' => 'Informasi Kategori paket wisata marigo',
			'icon' => 'wine',
		];
		return view('admin/kategori',$data);
	}

	public function showData(){

		$data = $this->kategoriModel->orderBy('kategori_id','DESC')->findAll();
		$i=1;
		foreach($data as $cat) {
			$data_out[] = [
				'i' => $i++,
				'kategori_id' => $cat['kategori_id'],
				'kategori' => $cat['kategori'],
				'button' => '<center>
						<button type="button" class="btn btn-info btn-sm item_edit" data-id="'.$cat['kategori_id'].'" data-kategori="'.$cat['kategori'].'" data-toggle="modal" data-target="#Modal_edit"><i class="fa fa-edit"></i> Edit</button>
						<a href="" class="btn btn-danger btn-sm remove" data-id="'.$cat['kategori_id'].'" data-type="kategori"><i class="fa fa-trash"></i> Delete</a></center>'
			];
		}
		
        echo json_encode(['data' => $data_out]);
	}

	public function saveData(){
		if(!$this->validate([
			'kategori' => [
				'rules' => 'required|is_unique[kategori.kategori]',
				'errors' => [
					'required' => '{field} harus diisi.',
					'is_unique' => '{field} sudah ada.',
				]
			]
		])){
			$validation = \Config\Services::validation();
			if ($validation->getErrors())
			{
				echo json_encode(['error' => $validation->getErrors()]);
			}
		}else{
			$data = [
				'kategori' => $this->request->getPost('kategori')
			];
			$this->kategoriModel->save($data);
				echo json_encode(['success' => 'Success Save Data']);
		}

	}

	public function edit(){
		$data = [
			'kategori_id' => $this->request->getPost('id'),
			'kategori' => $this->request->getPost('kategori')
		];

		$this->kategoriModel->save($data);
	}

	public function delete(){
		$id = $this->request->getPost('id');
		$this->kategoriModel->delete($id);
	}


}

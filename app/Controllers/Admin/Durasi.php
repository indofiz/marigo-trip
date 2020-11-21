<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\durasiModel;

class Durasi extends BaseController
{
	protected $durasiModel;
	public function __construct(){
		$this->durasiModel = new DurasiModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Durasi',
			'url' => 'durasi',
			'sub_head' => 'Informasi Durasi paket wisata marigo',
			'icon' => 'timer',
		];
		return view('admin/durasi',$data);
	}

	public function showData(){

		$data = $this->durasiModel->orderBy('durasi_id','DESC')->findAll();

		$i=1;
		foreach($data as $dur) {
			$data_out[] = [
				'i' => $i++,
				'durasi_id' => $dur['durasi_id'],
				'durasi' => $dur['durasi'],
				'button' => '<center>
						<button type="button" class="btn btn-info btn-sm item_edit" data-id="'.$dur['durasi_id'].'" data-durasi="'.$dur['durasi'].'" data-toggle="modal" data-target="#Modal_edit"><i class="fa fa-edit"></i> Edit</button>
						<a href="" class="btn btn-danger btn-sm remove" data-id="'.$dur['durasi_id'].'" data-type="durasi"><i class="fa fa-trash"></i> Delete</a></center>'
			];
		}
		
        echo json_encode(['data' => $data_out]); 
	}

	public function saveData(){
		if(!$this->validate([
			'durasi' => [
				'rules' => 'required|is_unique[durasi.durasi]',
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
				'durasi' => $this->request->getPost('durasi')
			];

			$this->durasiModel->save($data);
				echo json_encode(['success' => 'Success Save Data']);
		}
	}

	public function edit(){
		$data = [
			'durasi_id' => $this->request->getPost('id'),
			'durasi' => $this->request->getPost('durasi')
		];

		$this->durasiModel->save($data);
	}

	public function delete(){
		$id = $this->request->getPost('id');
		$this->durasiModel->delete($id);
	}


}

<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\paketTourModel;
use App\Models\destinasiModel;
use App\Models\durasiModel;
use App\Models\kategoriModel;
use App\Models\hargaModel;
use App\Models\orderModel;
// use Dompdf\Dompdf;
// use Dompdf\Options;
use \Mpdf\Mpdf;
class Order extends BaseController
{
	protected $paketTourModel;
	protected $destinasiModel;
	protected $durasiModel;
	protected $kategoriModel;
	protected $hargaModel;
	protected $orderModel;
	public function __construct(){
		$this->paketTourModel = new PaketTourModel();
		$this->destinasiModel = new DestinasiModel();
		$this->durasiModel = new DurasiModel();
		$this->kategoriModel = new KategoriModel();
		$this->hargaModel = new HargaModel();
		$this->orderModel = new OrderModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Order paket',
			'url' => 'order',
			'sub_head' => 'order paket marigo',
			'icon' => 'cart',
		];
		return view('admin/order_paket',$data);
	}

	public function list_paket()
	{
		$data['paket_tour'] = $this->paketTourModel->orderBy('tour_id','DESC')->findAll();
		$msg = [
			'data' => view('admin/layout/list_pilihPaket',$data),
		];
        echo json_encode($msg);
	}

	public function search_paket()
	{
		$data['paket_tour'] = $this->paketTourModel->orderBy('tour_id','DESC')->like('tour_judul',$this->request->getPost('search'))->findAll();
		$msg = [
			'data' => view('admin/layout/list_pilihPaket',$data),
		];
        echo json_encode($msg);
	}

	public function saveData(){
		if(!$this->validate([
			'namaLengkap' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama lengkap harus diisi.',
				]
			],
			'email' => [
				'rules' => 'required|valid_email',
				'errors' => [
					'required' => 'Email harus diisi.',
					'valid_email' => 'Email harus format email.'
				]
			],
			'noTelpon' => [
				'rules' => 'required|integer',
				'errors' => [
					'required' => 'Nomor telpon harus diisi.',
					'integer' => 'Nomor telpon harus angka.',
				]
			],
			'asal' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Alamat harus diisi.'
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
				$idTour = $this->request->getPost('tour_id');
				$jumlah = $this->request->getPost('jumlahOrang');
				$getHarga = $this->hargaModel->where(['id_tour' => $idTour])->findAll();
				$getTour = $this->paketTourModel->where(['tour_id' => $idTour])->first();
				foreach ($getHarga as $listHarga) {
					$min = $listHarga['min_orang'];
					$max = $listHarga['max_orang'];
					$harga = $listHarga['harga'];
					for ($i=$min; $i <= $max; $i++) { 
						$data[] = [
							'jumlah' => $i,
							'harga' => $harga
						];
					}
				}
				// Dapatkan Jumlah Terbesar
				$maxJumlah = max($data)['jumlah'];
				// Dapat Harga Dari Jumlah
				if ($jumlah > $maxJumlah) {
					$harga = array_search($maxJumlah, array_column($data, 'jumlah'));
				}else{
					$harga = array_search($jumlah, array_column($data, 'jumlah'));
				}
				$hargaDiskon = ($getTour['tour_diskon']/100)*$data[$harga]['harga'];
				$hargaKurang = $hargaDiskon+$getTour['tour_asuransi'];
				$hargaNow= abs($data[$harga]['harga']-$hargaKurang);
				$invoice = $this->random_strings();
				$data = [
					'nomor_invoice' => $invoice,
					'pelanggan_nama' => $this->request->getPost('namaLengkap'),
					'pelanggan_institusi' => $this->request->getPost('institusi'),
					'pelanggan_email' => $this->request->getPost('email'),
					'pelanggan_telepon' => $this->request->getPost('noTelpon'),
					'pelanggan_asal' => $this->request->getPost('asal'),
					'pelanggan_permintaan' => $this->request->getPost('permintaan'),
					'tour_id' => $idTour,
					'total_harga' => $hargaNow,
					'quantity' => $jumlah,
					'dp' => $this->request->getPost('bayarMetode'),
					'status' => false,
					'tanggal' => $this->request->getPost('tanggal'),
					'diskon' => $getTour['tour_diskon'],
					'asuransi' => $getTour['tour_asuransi'],
				];

				$this->orderModel->save($data);
				
				$to = $this->request->getVar('email');
		        $subject = "Invoice";
		        $message = '';
		        
		        $email = \Config\Services::email();

		        $email->setTo($to);
		        $email->setFrom('eggfizzz@gmail.com', 'Invoice Marigo');
		        
		        $email->setSubject($subject);
		        $email->setMessage($message);
		        $this->invoice($invoice);
		        $invoice_file = 'http://localhost/marigo-trip/public/invoice/'.$invoice.'.pdf';
		        $email->attach($invoice_file);
		        if ($email->send()) 
				{
					unlink('invoice/'.$invoice.'.pdf');
					echo json_encode(['success' => 'berhasil email bro']);
		        } 
				else 
				{
		            $data = $email->printDebugger(['headers']);
					echo json_encode(['success' => 'berhasil bro']);
		        }
			}
	}

	public function paket_select(){
		$id = $this->request->getPost('id');
		$paket = $this->paketTourModel->where(['tour_id' => $id])->first();
		$destinasi = $this->destinasiModel->where(['destinasi_id' => $paket['tour_destinasi']])->first();
		$durasi = $this->durasiModel->where(['durasi_id' => $paket['tour_durasi']])->first();
		$kategori = $this->kategoriModel->where(['kategori_id' => $paket['tour_kategori']])->first();

		$data = [
			'image' => base_url('image_tour/'.$paket['tour_image']),
			'judul' => $paket['tour_judul'],
			'diskon' => $paket['tour_diskon'],
			'asuransi' => $paket['tour_asuransi'],
			'destinasi' => $destinasi['destinasi'],
			'durasi' => $durasi['durasi'],
			'kategori' => $kategori['kategori']
		];

		echo json_encode($data);
	}

	public function get_harga(){
		$jumlah = $this->request->getPost('jumlah');
		$tourId = $this->request->getPost('tour_id');
		$getHarga = $this->hargaModel->where(['id_tour' => $tourId])->findAll();
		$getTour = $this->paketTourModel->where(['tour_id' => $tourId])->first();
		foreach ($getHarga as $listHarga) {
			$min = $listHarga['min_orang'];
			$max = $listHarga['max_orang'];
			$harga = $listHarga['harga'];
			for ($i=$min; $i <= $max; $i++) { 
				$data[] = [
					'jumlah' => $i,
					'harga' => $harga,
					'diskon' => $getTour['tour_diskon'],
					'asuransi' => $getTour['tour_asuransi'],
				];
			}

		}
		// Dapatkan Jumlah Terbesar
		$maxJumlah = max($data)['jumlah'];

		// Dapat Harga Dari Jumlah
		if ($jumlah > $maxJumlah) {
			$harga = array_search($maxJumlah, array_column($data, 'jumlah'));
		}else{
			$harga = array_search($jumlah, array_column($data, 'jumlah'));
		}

		echo json_encode($data[$harga]);
	}

	function sendMail() { 
        $to = $this->request->getVar('mailTo');
        $subject = $this->request->getVar('subject');
        $message = $this->request->getVar('message');
        
        $email = \Config\Services::email();

        $email->setTo($to);
        $email->setFrom('eggfizzz@gmail.com', 'Confirm Registration');
        
        $email->setSubject($subject);
        $email->setMessage($message);

        if ($email->send()) 
		{
            echo 'Email successfully sent';
        } 
		else 
		{
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }

    public function check_step1(){
    	if(!$this->validate([
			'namaPaket' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Silahkan pilih Paket dulu.',
				]
			],
			'tanggal' => [
				'rules' => 'required|valid_date',
				'errors' => [
					'required' => 'Tanggal harus diisi.',
					'valid_date' => 'Tanggal harus format yang benar.'
				]
			],
			'jumlahOrang' => [
				'rules' => 'required|numeric|greater_than_equal_to[1]',
				'errors' => [
					'required' => 'Jumlah orang harus diisi.',
					'numeric' => 'Jumlah harus angka.',
					'greater_than_equal_to' => 'Jumlah harus minimal 1.',
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
			
			echo json_encode(['success' => 'berhasil bro']);
		}
    }

    function invoice($invoice = null){
    	if (!$invoice) {
    		return redirect()->to(base_url('/') );
    	}
    	$getOrder = $this->orderModel->where(['nomor_invoice' => $invoice])->first();
    	$tourId = $getOrder['tour_id'];
    	$getPaket = $this->paketTourModel->where(['tour_id' => $tourId])->first();
    	$data = [
    		'invoice' => $invoice,
    		'tanggal' => $getOrder['tanggal'],
    		'nama' => $getOrder['pelanggan_nama'],
    		'telepon' => $getOrder['pelanggan_telepon'],
    		'email' => $getOrder['pelanggan_email'],
    		'nama_paket' => $getPaket['tour_judul'],
    		'diskon' => $getPaket['tour_diskon']
    	];
    	$data['logo'] = 'http://localhost/marigo-trip/public/logo.png';
		$mpdf = new Mpdf();
        $mpdf->WriteHTML(view('admin/layout/invoice',$data));
		$mpdf->Image($data['logo'], 152, 14, 42, 18, 'png', '', true, false);
		// return $mpdf->Output('invoice/'.$invoice.'.pdf', \Mpdf\Output\Destination::INLINE);
        return redirect()->to($mpdf->Output('invoice.pdf', 'I'));
    }

    function random_strings() 
	{ 
	    // String of all alphanumeric character 
	    $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	    $str_number = '0123456789';
	    return substr(str_shuffle($str_result),0, 3).substr(str_shuffle($str_number),0, 3); 
	} 

}

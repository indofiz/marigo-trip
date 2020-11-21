<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'url' => 'dashboard',
			'sub_head' => 'Informasi dashboard marigo',
			'icon' => 'rocket',
		];
		return view('admin/dashboard',$data);
	}


}

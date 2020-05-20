<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		chek_admin();
		not_login();
	}

	public function index()
	{

		$data = array(
			'title' 			=> 'Dashboard',
			'topik' 			=> 'Selamat Data Di Website Egy Gym',
			'totalmember' 		=> $this->home->countMember(),
			'totalallpaket' 	=> $this->home->countPaket(),
			'totalfasilitas' 	=> $this->home->countFasilitas(),
			'totaljenissenam' 	=> $this->home->countJenisSenam(),
			'isi' 				=> 'home/home'
		);
		$this->load->view('layout/wrap', $data, false);
	}
}

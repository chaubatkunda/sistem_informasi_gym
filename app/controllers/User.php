<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		chek_user();
		not_login();
	}

	public function index()
	{
		$id_member = $this->fungsi->user_login()['id'];
		$id = $this->db->get_where('t_member', ['id_user' => $id_member])->row()->id_member;
		$data = array(
			'title' 		=> 'User',
			'topik' 		=> '',
			'totalfasmem' 	=> $this->home->countFasMember($id),
			'totalpaket' 	=> $this->home->countPaketMember($id),
			'isi' 			=> 'user/home'
		);
		$this->load->view('layout/wrap', $data, false);
	}
	public function paket()
	{
		$data = array(
			'title' 		=> 'Paket',
			'topik' 		=> '',
			'paket' 		=> $this->paket->getAllPaket(),
			'isi' 			=> 'user/prodak/paket'
		);
		$this->load->view('layout/wrap', $data, false);
	}

	public function belipaket($id)
	{
		$data = array(
			'title' 		=> 'Detail Pembelian Paket',
			'topik' 		=> '',
			'paket'			=> $this->paket->getPakeById($id),
			'isipaket'  	=> $this->paket->selectPkIsiPaket($id),
			'member'		=> $this->fungsi->chek_member(),
			'isi' 			=> 'user/prodak/detail_paket'
		);
		$this->load->view('layout/wrap', $data, false);
	}
	public function usertranspaket()
	{
	}



	public function fasilitas()
	{
		$data = array(
			'title' 		=> 'Fasilitas',
			'topik' 		=> '',
			'fasilitas' 	=> $this->user->getAllFasilitasByKet(),
			'isi' 			=> 'user/prodak/fasilitas'
		);
		$this->load->view('layout/wrap', $data, false);
	}

	// public function profile()
	// {
	// 	$data['title'] = 'Profile';
	// 	$data['topik'] = '';
	// 	// $data['user'] = $this->fungsi();
	// 	$this->load->view('template/header', $data);
	// 	$this->load->view('template/navbar', $data);
	// 	$this->load->view('user/profil', $data);
	// 	$this->load->view('template/footer');
	// }
	// public function daftar()
	// {
	// 	$data['title'] = 'Daftar';
	// 	$data['topik'] = 'Form Pendaftaran Member';
	// 	// $data['user'] = $this->fungsi();
	// 	$this->form_validation->set_rules('nama', 'Nama', 'required');
	// 	$this->form_validation->set_rules('notelp', 'No Telp/Hp', 'required|max_length[12]|min_length[4]|numeric');
	// 	$this->form_validation->set_rules('alamat', 'Alamat', 'required');
	// 	if ($this->form_validation->run() == false) {
	// 		$this->load->view('template/header', $data);
	// 		$this->load->view('template/navbar', $data);
	// 		$this->load->view('user/add_member', $data);
	// 		$this->load->view('template/footer');
	// 	} else {
	// 		$transfer = $this->input->post('chek-transfer', true);
	// 		$tunai = $this->input->post('chek-tunai', true);
	// 		$edc = $this->input->post('chek-edc', true);
	// 		$this->user->daftarMember($transfer, $tunai, $edc);
	// 		redirect('user');
	// 	}
	// }

	// public function detailpaket($id)
	// {
	// 	$data['title'] = 'User Produk';
	// 	$data['topik'] = '';
	// 	$data['detpaket'] = $this->master->selectPkIsiPaket($id);
	// 	$data['paket'] = $this->master->getPakeById($id);
	// 	$this->load->view('template/header', $data);
	// 	$this->load->view('template/navbar', $data);
	// 	$this->load->view('user/prodak/detail-paket', $data);
	// 	$this->load->view('template/footer');
	// }

	// public function belipaket($id)
	// {

	// 	$data = array(
	// 		'title' 	=> 'Transaksi',
	// 		'topik' 	=> '',
	// 		'paket' 	=> $this->paket->getPakeById($id),
	// 		'detail'	=> $this->paket->selectPkIsiPaket($id),
	// 		'isi' 		=> 'user/prodak/beli-paket'
	// 	);


	// 	$chektransfer = $this->input->post('chek-transfer', true);
	// 	$chektunai = $this->input->post('chek-tunai', true);
	// 	$chekedc = $this->input->post('chek-edc', true);
	// 	$this->form_validation->set_rules('id_member', 'ID Member', 'trim|required');
	// 	if ($this->form_validation->run() == false) {
	// 		$this->load->view('layout/wrap', $data, false);
	// 	} else {
	// 		$this->user->simpanTransPaket($chektransfer, $chektunai, $chekedc);
	// 		$this->user->simpanTransIsiPaket();
	// 		$this->user->simpanTglTransisiPaket();
	// 		if ($this->db->affected_rows() > 0) {
	// 			redirect('transaksi-mypaket');
	// 		} else {
	// 			redirect('transaksi-mypaket');
	// 		}
	// 	}
	// }
	// public function sewafas($id)
	// {
	// 	$chektransfer = $this->input->post('chek-transfer', true);
	// 	$chektunai = $this->input->post('chek-tunai', true);
	// 	$chekedc = $this->input->post('chek-edc', true);
	// 	$this->form_validation->set_rules('tgl_booking', 'Tanggal Booking', 'trim|required|valid_date');
	// 	$this->form_validation->set_rules('jmpakai', 'Jam Pakai', 'trim|required|valid_time');

	// 	$data = array(
	// 		'title' 		=> 'Sewa Fasilitas',
	// 		'topik' 		=> '',
	// 		'fasilitas' 	=> $this->fasilitas->getAllFasilitasById($id),
	// 		'isi' 			=> 'user/prodak/sewa-fasilitas'
	// 	);

	// 	if ($this->form_validation->run() == false) {
	// 		$this->load->view('layout/wrap', $data, false);
	// 	} else {
	// 		$this->user->simpanFasilitas($chektransfer, $chektunai, $chekedc);
	// 		if ($this->db->affected_rows() > 0) {
	// 			redirect('transaksi-myfasilitas');
	// 		} else {
	// 			redirect('transaksi-myfasilitas');
	// 		}
	// 	}
	// }
	// public function sewafasnonmember($id)
	// {
	// 	$tgltr = date('Y-m-d', strtotime($this->input->post('tgl_trans')));
	// 	$tglbk = date('Y-m-d', strtotime($this->input->post('tgl_booking')));
	// 	$jamtr = date('H:i:s', strtotime($this->input->post('jmpakai')));
	// 	$namafas = $this->input->post('nama-fas');
	// 	$queryNamaFas = $this->user->countFasilitas($namafas);
	// 	$queryTrNamaFas = $this->user->countTrFasilitas($namafas, $tglbk);
	// 	$queryFas = $this->user->chekTanggalBooking($tglbk, $tgltr, $jamtr);
	// 	// print_r($queryTrNamaFas);
	// 	// die;
	// 	$data = array(
	// 		'title' 		=> 'Fasilitas',
	// 		'topik' 		=> '',
	// 		'fasilitas' 	=> $this->fasilitas->getAllFasilitasById($id),
	// 		'isi' 			=> 'user/prodak/sewa-fasnonmember'
	// 	);
	// 	$this->load->view('layout/wrap', $data, false);

	// 	$chektransfer 	= $this->input->post('chek-transfer', true);
	// 	$chektunai 		= $this->input->post('chek-tunai', true);
	// 	$chekedc 		= $this->input->post('chek-edc', true);

	// 	$this->form_validation->set_rules('tgl_booking', 'Tanggal Booking', 'trim|required|valid_date');
	// 	$this->form_validation->set_rules('jmpakai', 'Jam Pakai', 'trim|required|valid_time');

	// 	if ($this->form_validation->run() == false) {
	// 		$this->load->view('layout/wrap', $data, false);
	// 	} else {
	// 		// die;
	// 		if ($queryNamaFas == $queryTrNamaFas) {
	// 			$this->session->set_flashdata('chektgl', 'Fasilitas Tersebut Sudah Full Terpakai');
	// 			redirect('sewafasilitas/' . $id);
	// 		} else {
	// 			// die;
	// 			if ($queryFas) {
	// 				$this->session->set_flashdata('chektgl', 'Fasilitas Tersebut Sudah Dipakai di Tanggal dan Jam Yang Sama');
	// 				redirect('sewafasilitas/' . $id);
	// 			} else {
	// 				$this->user->simpanFasilitas($chektransfer, $chektunai, $chekedc);
	// 				if ($this->db->affected_rows() > 0) {
	// 					redirect('transaksi-myfasilitas');
	// 				} else {
	// 					redirect('transaksi-myfasilitas');
	// 				}
	// 			}
	// 		}
	// 	}
	// }

	// public function mypaket()
	// {
	// 	$iduser = $this->fungsi->user_login()['id'];
	// 	$getidmember = $this->db->get_where('t_member', ['id_user' => $iduser])->row_array();
	// 	$idmember = $getidmember['id_member'];

	// 	$data = array(
	// 		'title' 	=> 'My Paket',
	// 		'topik' 	=> '',
	// 		'mypaket' 	=> $this->home->getAllMyPaket($idmember),
	// 		'isi' 		=> 'transaksi/paket/mypaket'
	// 	);
	// 	$this->load->view('layout/wrap', $data, false);
	// }

	// public function traspaket()
	// {
	// 	$data = array(
	// 		'title' 	=> 'My Paket',
	// 		'topik' 	=> '',
	// 		'paket' 	=> $this->paket->getAllPaket(),
	// 		'isi' 		=> 'transaksi/paket/addpaket'
	// 	);
	// 	$this->load->view('layout/wrap', $data, false);
	// }

	// public function myfasilitas()
	// {
	// 	$iduser = $this->fungsi->user_login()['id'];
	// 	$idmember = $this->user->getAllMemberById($iduser)['id_member'];
	// 	$data = array(
	// 		'title' 		=> 'My Fasilitas',
	// 		'topik' 		=> '',
	// 		'transaksi' 	=> $this->home->getAllMyFasilitas($idmember),
	// 		'isi' 			=> 'transaksi/fasilitas/myfasilitas'
	// 	);
	// 	$this->load->view('layout/wrap', $data, false);
	// }
}

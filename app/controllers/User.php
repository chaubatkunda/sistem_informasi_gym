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
		$id = $this->fungsi->chek_member()->id_member;
		$data = array(
			'title' 		=> 'User',
			'topik' 		=> '',
			'totalfasmem' 	=> $this->home->countFasMember($id),
			'totalpaket' 	=> $this->home->countPaketMember($id),
			'isi' 			=> 'user/home'
		);
		$this->load->view('layout/user_wrap', $data, false);
	}

	// !user paket
	public function paket()
	{
		$data = array(
			'title' 		=> 'Paket',
			'topik' 		=> '',
			'paket' 		=> $this->paket->getAllPaket(),
			'isi' 			=> 'user/prodak/paket'
		);
		$this->load->view('layout/user_wrap', $data, false);
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
		$this->load->view('layout/user_wrap', $data, false);
	}
	public function usertranspaket()
	{
		$kodetrans 	= $this->input->post('kode_trans', true);
		$jsenam 	= $this->input->post('jenis_senam', true);
		$tglm		= $this->input->post('tgl_masuk', true);

		// !Insert IsiPaket
		for ($i = 0; $i < count($jsenam); $i++) {
			$isipaket = [
				'setpaket_id'		=> $this->input->post('id_setp', true)[$i],
				'kode_pembelian'	=> $this->input->post('kode_trans', true),
				'jenis_senam'		=> $this->input->post('jenis_senam', true)[$i],
				'kuota'				=> $this->input->post('kuota', true)[$i],
			];
			$this->member->insert_isipaket($isipaket);
		}

		// !Insert TanggalLatihan
		for ($ii = 0; $ii < count($tglm); $ii++) {
			$tgllatih = [
				'setpaket_id'		=> $this->input->post('id_setpa', true)[$ii],
				'kode_pembelian'	=> $this->input->post('kode_trans', true),
				'tgl_mulai'			=> $this->input->post('tgl_masuk', true)[$ii],
				'jam_mulai'			=> $this->input->post('jam_mulai', true)[$ii],
				'jam_selesai'		=> $this->input->post('jam_selesai', true)[$ii],
			];
			$this->member->insert_tglisipaket($tgllatih);
		}

		// !Insert Paket
		$datapaket = [
			'tgl_trans'			=> $this->input->post('tgl_trans', true),
			'kode_pembelian'	=> $this->input->post('kode_trans', true),
			'id_member'			=> $this->input->post('id_member', true),
			'nama_paket'		=> $this->input->post('nama_paket', true),
			'harga_paket'		=> $this->input->post('harga_paket', true),
			'ket_bayar'			=> 0,
			'is_success'		=> 2
		];
		$this->member->insert_detailbeli($datapaket);
		redirect('user.konfirmasi.pembelian/' . $kodetrans);
	}

	public function userconfirmtranspaket($id)
	{
		$data = array(
			'title' 		=> 'Konfirmasi Pembayaran',
			'topik' 		=> '',
			'paket' 		=> $this->user->getAllTransPaketById($id),
			'isi' 			=> 'user/prodak/konfirmasi_pembelian_paket'
		);
		$this->load->view('layout/user_wrap', $data, false);
	}
	public function useraddconfirmtranspaket($id)
	{
		$config['upload_path']          = './public/assets/buktitransfer/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['overwrite'] 			= TRUE;
		$this->upload->initialize($config);

		if ($this->upload->do_upload('file_upload')) {
			$datap = [
				'bukti_pembayaran'	=> $this->upload->data('file_name', true),
				'ket_bayar'			=> 1,
				'is_success'		=> 2
			];
			$this->konfirmasi->update_transpaket($datap, $id);
			redirect('info.peket.success/' . $id);
		} else {
			$error = $this->upload->display_errors('Gambar Tidak Dapat Diupload');
			$this->session->set_flashdata('error', $error);
			redirect('info.peket.notsuccess/' . $id);
		}
	}

	// !user fasilitas

	public function fasilitas()
	{
		$data = array(
			'title' 		=> 'Fasilitas',
			'topik' 		=> '',
			'fasilitas' 	=> $this->user->getAllFasilitasByKet(),
			'isi' 			=> 'user/prodak/fasilitas'
		);
		$this->load->view('layout/user_wrap', $data, false);
	}
	public function userconfirmfasilitas($id)
	{
		$data = array(
			'title' 		=> 'Fasilitas',
			'topik' 		=> '',
			'fasilitas' 	=> $this->user->getAllFasilitasByKet(),
			'isi' 			=> 'user/prodak/fasilitas'
		);
		$this->load->view('layout/user_wrap', $data, false);
	}



	// * Riwayar Transaksi
	public function riwayattransaksi()
	{
		$id = $this->fungsi->chek_member()->id_member;
		$data = array(
			'title' 		=> 'Riwayat Transaksi',
			'topik' 		=> 'Riwayat Transaksi',
			'paket' 		=> $this->user->getDetMyPaket($id),
			'fasilitas' 	=> $this->user->getDetMyFasilitas($id),
			'isi' 			=> 'user/prodak/riwayat_transaksi'
		);
		$this->load->view('layout/user_wrap', $data, false);
	}
}

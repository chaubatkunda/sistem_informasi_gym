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

	public function daftar()
	{
		$data = array(
			'title' 		=> 'Daftar Member',
			'topik' 		=> '',
			'paket' 		=> $this->paket->getAllPaket(),
			'isi' 			=> 'user/add_member'
		);
		$this->form_validation->set_rules('notelp', 'Telepon', 'trim|required|numeric');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/user_wrap', $data, false);
		} else {
			$id = $this->input->post('iduser', true);
			$datau = [
				'id_member'		=> $this->input->post('idmem', true),
				'id_user'		=> $id,
				'alamat'		=> $this->input->post('alamat', true),
				'notelp'		=> $this->input->post('notelp', true)
			];
			$this->user->update_user($id);
			$this->user->insert_member($datau);
			redirect('user');
		}
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
			'isi' 			=> 'user/prodak/chek_paket'
		);
		$this->load->view('layout/user_wrap', $data, false);
	}
	public function detailpaket($id)
	{
		$data = array(
			'title' 		=> 'Detail Paket',
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
	public function sewafasilitas($id)
	{
		$data = array(
			'title' 		=> 'Sewa Fasilitas',
			'topik' 		=> '',
			'fasilitas'	=> $this->fasilitas->getAllFasilitasById($id),
			// 'fasilitas' 	=> $this->user->getAllFasilitasByKet($id),
			'isi' 			=> 'user/prodak/sewa_fasilitas'
		);
		$this->form_validation->set_rules('tgl_booking', 'Tanggal Booking', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/user_wrap', $data, false);
		} else {
			$jmselesai = $this->input->post('jam_mulai', true);
			$durasi = $this->input->post('durasijam', true);
			$kode = $this->input->post('kode_beli', true);
			$time = date("H:i", strtotime($jmselesai));
			$dateJmPki = date_create($time);
			date_add($dateJmPki, date_interval_create_from_date_string('+' . $durasi . ' hours'));
			$strjmsleles = date_format($dateJmPki, 'H:i');

			$data = [
				'tgl_transfasilitas'	=> $this->input->post('tgl_trans', true),
				'id_member'				=> $this->input->post('id_member', true),
				'tgl_booking'			=> $this->input->post('tgl_booking', true),
				'jam_mulai'				=> $this->input->post('jam_mulai', true),
				'jam_selesai'			=> $strjmsleles,
				'nama_fasilitas'		=> $this->input->post('nama_fasilitas', true),
				'kode_pembelian'		=> $this->input->post('kode_beli', true),
				'total_bayar'			=> $this->input->post('total', true),
				'ket_bayar'				=> 0,
				'is_success'			=> 2
			];
			$this->member->insert_chekout_fasilitas($data);
			redirect('user.konfirmasi.fasilitas/' . $kode);
		}
	}

	public function userconfirmfasilitas($id)
	{
		$data = array(
			'title' 		=> 'Konfirmasi Pembayaran Fasilitas',
			'topik' 		=> 'Konfirmasi Pembayaran Fasilitas',
			'idf'			=> $id,
			'isi' 			=> 'user/prodak/konfirmasi_pembelian_fasilitas'
		);
		$this->load->view('layout/user_wrap', $data, false);
	}

	public function usersaveconfirmfasilitas($id)
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
			$this->konfirmasi->update_fasilitas($datap, $id);
			redirect('user.transaksi');
		} else {
			$error = $this->upload->display_errors('Gambar Tidak Dapat Diupload');
			$this->session->set_flashdata('error', $error);
			redirect('user.konfirmasi.fasilitas/' . $id);
		}
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

	public function userdatailfas($id)
	{
		$data = array(
			'title' 		=> 'Detail Fasilitas',
			'topik' 		=> 'Detail Fasilitas /' . $id,
			'fasilitas' 	=> $this->user->getDetFasilitas($id),
			'isi' 			=> 'user/prodak/detail_fasilitas_user'
		);
		$this->load->view('layout/user_wrap', $data, false);
	}
	public function userdatailpaket($id)
	{
		$data = array(
			'title' 		=> 'Detail Paket',
			'topik' 		=> 'Detail Paket /' . $id,
			'paket'		 	=> $this->user->getDetPaket($id),
			'isipaket'		=> $this->user->getDetIsiPaket($id),
			'isi' 			=> 'user/prodak/detail_paket_user'
		);
		$this->load->view('layout/user_wrap', $data, false);
	}
}

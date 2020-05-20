<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Controller Member
 * This Controller for ...
 * @package     Codeigniter
 * @category    Controller CI
 * @author      Esau Batkunda <Maniklusi31@gmail.com>
 * @link        https://github.com/chaubatkunda
 * @param       ...
 * @return      ...
 */
class Member extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		not_login();
		chek_admin();
	}
	//!============================== Member ==============================//
	public function aktiftidak()
	{
		$id = $this->input->post('id', true);
		$tidak = $this->input->post('tidak', true);
		$this->member->setTidakAktif($id, $tidak);
	}
	public function aktifya()
	{
		$id = $this->input->post('id', true);
		$aktif = $this->input->post('aktif', true);
		$this->member->setAktif($id, $aktif);
	}
	public function member()
	{
		$data = array(
			'title' 	=> 'Member',
			'topik' 	=> '',
			'member' 	=> $this->member->getAllMember(),
			'isi' 		=> 'member/home'
		);
		$this->load->view('layout/wrap', $data, false);
	}
	public function addmember()
	{
		$data = array(
			'title' 	=> 'Member',
			'topik' 	=> '',
			'fasilitas' => $this->fasilitas->getAllFasilitas(),
			'paket' 	=> $this->paket->getAllPaket(),
			'isi' 		=> 'member/add'
		);
		// $chektransfer = $this->input->post('chek-transfer', true);
		// $chektunai = $this->input->post('chek-tunai', true);
		// $chekedc = $this->input->post('chek-edc', true);
		// $chekpaket = $this->input->post('chek-paket', true);
		// $chekfasil = $this->input->post('chek-fasil', true);
		$idmember = $this->input->post('idmember', true);

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('notelp', 'No Telp', 'required|trim|numeric|max_length[12]|min_length[4]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[4]|is_unique[t_user.username]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[6]|matches[password1]');
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/wrap', $data, false);
		} else {
			$this->db->select_max('id');
			$queryUser = $this->db->get('t_user')->row_array();
			$genIduser = $queryUser['id'] + 1;
			$datauser = [
				// Akun Member
				'id' 		=> $genIduser,
				'nama' 		=> htmlspecialchars($this->input->post('nama', true)),
				'username' 	=> htmlspecialchars($this->input->post('username', true)),
				'password' 	=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'level' 	=> 2,
				'aktif' 	=> 1,
				'foto' 		=> 'default.png'
			];
			$datamember = [
				'id_member' 	=> htmlspecialchars($this->input->post('idmember', true)),
				'id_user' 		=> $genIduser,
				'alamat' 		=> htmlspecialchars($this->input->post('alamat', true)),
				'notelp' 		=> htmlspecialchars($this->input->post('notelp', true)),
				'tgl_daftar'	=> date('Y-m-d')
			];
			$this->member->insert_user($datauser);
			$this->member->insert_member($datamember);
			if ($this->db->affected_rows() > 0) {
				redirect('pilih.produk/' . $idmember);
			} else {
				redirect('add.member');
			}
		}
	}
	public function hapusmember($id)
	{
		if ($this->member->deleteMember($id)) {
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('member', 'Berhasil Dihapus');
				redirect('member');
			} else {
				$this->session->set_flashdata('member', 'Gagal Dihapus');
				redirect('member');
			}
		} else {
			$this->session->set_flashdata('member', 'Gagal Dihapus');
			redirect('member');
		}
	}

	public function pilihproduk($id)
	{
		$data = array(
			'title' 	=> 'Pilih Produk',
			'topik' 	=> '',
			'paket'     => $this->paket->getAllPaket(),
			'fasilitas' => $this->fasilitas->getAllFasilitas(),
			'member'	=> $this->member->getAllMemberById($id),
			'isi' 		=> 'member/pilih_produk'
		);
		$this->load->view('layout/wrap', $data, false);
	}
	public function chekoutpaket($id, $idm)
	{
		$data = array(
			'title' 	=> 'Chekout Paket',
			'topik' 	=> '',
			'paket'		=> $this->paket->getPakeById($id),
			'isipaket'  => $this->paket->selectPkIsiPaket($id),
			'member'	=> $this->member->getAllMemberById($idm),
			'isi' 		=> 'member/detail_produk'
		);
		$this->load->view('layout/wrap', $data, false);
	}
	public function detailbeli($id, $idm)
	{
		$data = array(
			'title' 	=> 'Detail Pembelian',
			'topik' 	=> '',
			'paket'		=> $this->paket->getPakeById($id),
			'isipaket'  => $this->paket->selectPkIsiPaket($id),
			'member'	=> $this->member->getAllMemberById($idm),
			'isi' 		=> 'member/pembayaran'
		);
		$this->load->view('layout/wrap', $data, false);
	}

	public function add_detailbeli()
	{
		$kodetrans 	= $this->input->post('kode_transaksi', true);
		$jsenam 	= $this->input->post('jenis_senam', true);
		$tglm		= $this->input->post('tgl_masuk', true);

		// !Insert IsiPaket
		for ($i = 0; $i < count($jsenam); $i++) {
			$isipaket = [
				'setpaket_id'		=> $this->input->post('id_setingpaket', true)[$i],
				'kode_pembelian'	=> $this->input->post('kode_transaksi', true),
				'jenis_senam'		=> $this->input->post('jenis_senam', true)[$i],
				'kuota'				=> $this->input->post('kuota', true)[$i],
			];
			$this->member->insert_isipaket($isipaket);
		}

		// !Insert TanggalLatihan
		for ($ii = 0; $ii < count($tglm); $ii++) {
			$tgllatih = [
				'setpaket_id'		=> $this->input->post('id_setingpakett', true)[$ii],
				'kode_pembelian'	=> $this->input->post('kode_transaksi', true),
				'tgl_mulai'			=> $this->input->post('tgl_masuk', true)[$ii],
				'jam_mulai'			=> $this->input->post('jam_mulai', true)[$ii],
				'jam_selesai'		=> $this->input->post('jam_selesai', true)[$ii],
			];
			$this->member->insert_tglisipaket($tgllatih);
		}

		// !Insert Paket
		$datapaket = [
			'tgl_trans'			=> $this->input->post('tgl_transaksi', true),
			'kode_pembelian'	=> $this->input->post('kode_transaksi', true),
			'id_member'			=> $this->input->post('id_member', true),
			'nama_paket'		=> $this->input->post('nama_paket', true),
			'harga_paket'		=> $this->input->post('harga_paket', true),
			'ket_bayar'			=> 2
		];
		$this->member->insert_detailbeli($datapaket);
		if ($this->db->affected_rows() > 0) {
			redirect('konfirmasi.pembelian/' . $kodetrans);
		} else {
			redirect('dashboard');
		}
	}
	public function konfirmbeli($id)
	{
		$data = array(
			'title' 	=> 'Konfirmasi Pembayaran',
			'topik' 	=> '',
			'isi' 		=> 'member/konfirm_pembayaran'
		);
		$this->load->view('layout/wrap', $data, false);
	}

	public function chekfasilitas($id, $idm)
	{
		$data = array(
			'title' 	=> 'Chek Fasilitas',
			'topik' 	=> '',
			'member'	=> $this->member->getAllMemberById($idm),
			'fasilitas'	=> $this->fasilitas->getAllFasilitasById($id),
			'isi' 		=> 'member/det_fasilitas'
		);
		$this->load->view('layout/wrap', $data, false);
	}

	public function chekoutfasilitas()
	{
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
		redirect('konfirmasi.fasilitas/' . $kode);
	}
	public function confirmfasil($id)
	{
		$data = array(
			'title' 	=> 'Confirmasi Pembayaran Fasilitas',
			'topik' 	=> '',
			'transfas'	=> $this->member->getAllTransFasilitas($id),
			'isi' 		=> 'member/pembayaran_fasil'
		);
		$this->load->view('layout/wrap', $data, false);
	}

	//!============================== Endmember ==============================//

	//* ============================== Instruktur ==============================//
	public function instruktur()
	{
		$data['title'] = 'Instruktur';
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('instruktur/home', $data);
		$this->load->view('template/footer');
	}
	//! ============================== End Instruktur ==============================//
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller Transaksi_fasilitas
 * This Controller for ...
 * @package     Codeigniter
 * @category    Controller CI
 * @author      Esau Batkunda <Maniklusi31@gmail.com>
 * @link        https://github.com/chaubatkunda
 * @param       ...
 * @return      ...
 */

class Konfirmasi extends CI_Controller
{
	//?======================== Login ========================//
	public function __construct()
	{
		parent::__construct();
		// chek_admin();
		not_login();
	}
	//!======================== End Login ========================//

	//?======================== Data Konfirmasi ========================//
	public function index()
	{
		$data = array(
			'title' 	=> 'Data Konfirmasi',
			'topik' 	=> '',
			'paket' 	=> $this->konfirmasi->getAllChekPaket(),
			'fasilitas'	=> $this->konfirmasi->getAllChekFasilitas(),
			'isi' 		=> 'konfirmasi/all_produk'
		);
		$this->load->view('layout/wrap', $data, false);
	}

	//!======================== End Data Konfirmasi ========================//

	public function veripaket($id)
	{
		$data = array(
			'title' 	=> 'Verifikasi Paket',
			'topik' 	=> '',
			'paket' 	=> $this->konfirmasi->verPaket($id),
			'isi' 		=> 'konfirmasi/veri_paket'
		);
		$this->load->view('layout/wrap', $data, false);
	}
	public function saveconfirmpaket($id)
	{
		$tunai = $this->input->post('chek-tunai', true);
		$edc = $this->input->post('chek-edc', true);
		$transfer = $this->input->post('chek-transfer', true);

		if (isset($tunai)) {
			$datap = [
				'ket_bayar'			=> $tunai,
				'is_success'		=> 1
			];
			$this->konfirmasi->update_transpaket($datap, $id);
			redirect('dashboard');
		} elseif (isset($edc)) {
			$datap = [
				'ket_bayar'			=> $edc,
				'is_success'		=> 1
			];

			$this->konfirmasi->update_transpaket($datap, $id);
			redirect('dashboard');
		} elseif (isset($transfer)) {
			$config['upload_path']          = './public/assets/buktitransfer/';
			$config['allowed_types']        = 'jpg|jpeg|png';
			$config['overwrite'] 			= TRUE;
			$config['max_size']             = 2048;
			$this->upload->initialize($config);

			if ($this->upload->do_upload('file_upload')) {
				// Data Fasilitas
				$datap = [
					'bukti_pembayaran'	=> $this->upload->data('file_name', true),
					'ket_bayar'			=> $transfer,
					'is_success'		=> 1
				];
				$this->konfirmasi->update_transpaket($datap, $id);
				redirect('dashboard');
			} else {
				$error = $this->upload->display_errors('Gambar Tidak Dapat Diupload');
				$this->session->set_flashdata('error', $error);
				redirect('dashboard');
			}
		} else {
			redirect('dashboard');
		}
	}
	public function detconfirmpaket($id)
	{
		$data = array(
			'title' 	=> 'Detail Pembelian Paket',
			'topik' 	=> '',
			'paket' 	=> $this->konfirmasi->detaiPaket($id),
			'isi' 		=> 'konfirmasi/detail_paket'
		);
		$this->load->view('layout/wrap', $data, false);
	}

	public function infopaketsukses($id)
	{
		$data = array(
			'title' 	=> 'Success',
			'topik' 	=> '',
			// 'paket' 	=> $this->konfirmasi->detaiPaket($id),
			'isi' 		=> 'user/prodak/info_pembelian_paket'
		);
		$this->load->view('layout/wrap', $data, false);
	}

	public function verifasilitas($id)
	{
		$data = array(
			'title' 	=> 'Verifikasi Fasilitas',
			'topik' 	=> '',
			'fasilitas' => $this->konfirmasi->verFasilitas($id),
			'isi' 		=> 'konfirmasi/veri_fasilitas'
		);
		$this->load->view('layout/wrap', $data, false);
	}
	public function saveconfirmfasilitas()
	{
		$id = $this->input->post('kodep', true);
		$tunai = $this->input->post('chek-tunai', true);
		$edc = $this->input->post('chek-edc', true);
		$transfer = $this->input->post('chek-transfer', true);

		if (isset($tunai)) {
			$dataf = [
				// 'bukti_pembayaran'	=> $this->upload->data('file_name', true),
				'ket_bayar'			=> $tunai,
				'is_success'		=> 1
			];
			$this->konfirmasi->update_fasilitas($dataf, $id);
			redirect('dashboard');
		} elseif (isset($edc)) {
			$dataf = [
				// 'bukti_pembayaran'	=> $this->upload->data('file_name', true),
				'ket_bayar'			=> $edc,
				'is_success'		=> 1
			];

			$this->konfirmasi->update_fasilitas($dataf, $id);
			redirect('dashboard');
		} elseif (isset($transfer)) {
			$config['upload_path']          = './public/assets/buktitransfer/';
			$config['allowed_types']        = 'jpg|jpeg|png';
			$config['overwrite'] 			= TRUE;
			$config['max_size']             = 2048;
			$this->upload->initialize($config);

			if ($this->upload->do_upload('file_upload')) {
				// Data Fasilitas
				$dataf = [
					'bukti_pembayaran'	=> $this->upload->data('file_name', true),
					'ket_bayar'			=> $transfer,
					'is_success'		=> 1
				];
				$this->konfirmasi->update_fasilitas($dataf, $id);
				redirect('dashboard');
			} else {
				$error = $this->upload->display_errors('Gambar Tidak Dapat Diupload');
				$this->session->set_flashdata('error', $error);
				redirect('dashboard');
			}
		} else {
			redirect('dashboard');
		}
	}
	public function detconfirmfasilitas($id)
	{
		$data = array(
			'title' 	=> 'Detail Fasilitas',
			'topik' 	=> '',
			'fasilitas' => $this->konfirmasi->detailFasilitas($id),
			'isi' 		=> 'konfirmasi/detail_fasilitas'
		);
		$this->load->view('layout/wrap', $data, false);
	}
}

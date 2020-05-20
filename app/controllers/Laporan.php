<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
	//!======================== Login ========================//
	public function __construct()
	{
		parent::__construct();
		chek_admin();
		not_login();
	}

	public function paket()
	{
		$tgl1 = $this->input->post('tgl1', true);
		$tgl2 = $this->input->post('tgl2', true);
		$cetak = '?tgl1=' . $tgl1 . '&tgl2=' . $tgl2;
		// $data['cetak'] = $cetak;

		if ($tgl1 and $tgl2) {
			$data = array(
				'title' 	=> 'Laporan Paket',
				'topik'		=> '',
				'transaksi'	=> $this->laporan->getAllTransPaket(),
				'transaksi' => $this->laporan->filterLaporanPaket($tgl1, $tgl2),
				'total' 	=> $this->laporan->sumSearchPaket($tgl1, $tgl2),
				'cetak'		=> $cetak,
				'isi'		=> 'laporan/paket'
			);
		} else {
			$data = array(
				'title' 	=> 'Laporan Paket',
				'topik'		=> '',
				'transaksi'	=> $this->laporan->getAllTransPaket(),
				'cetak'		=> $cetak,
				'isi'		=> 'laporan/paket'
			);
		}
		$this->load->view('layout/wrap', $data, false);
	}
	public function fasilitas()
	{


		// $data['title'] = ':: Laporan Fasilitas';
		// $data['transaksi'] = $this->laporan->getAllTransFasilitas();
		$tgl1 = $this->input->post('tgl1', true);
		$tgl2 = $this->input->post('tgl2', true);
		$cetak = '?tgl1=' . $tgl1 . '&tgl2=' . $tgl2;
		// $data['cetak'] = $cetak;
		// if ($tgl1 and $tgl2) {
		// 	$data['transaksi'] = $this->laporan->filterLaporanFasilitas($tgl1, $tgl2);
		// 	$data['total'] = $this->laporan->sumSearchFasilitas($tgl1, $tgl2);
		// }
		// $this->load->view('template/header', $data);
		// $this->load->view('template/navbar', $data);
		// $this->load->view('laporan/fasilitas', $data);
		// $this->load->view('template/footer');




		if ($tgl1 and $tgl2) {
			$data = array(
				'title' 	=> 'Laporan Fasilitas',
				'topik'		=> '',
				// 'transaksi'	=> $this->laporan->getAllTransPaket(),
				'transaksi' => $this->laporan->filterLaporanFasilitas($tgl1, $tgl2),
				'total' 	=> $this->laporan->sumSearchFasilitas($tgl1, $tgl2),
				'cetak'		=> $cetak,
				'isi'		=> 'laporan/paket'
			);
		} else {
			$data = array(
				'title' 	=> 'Laporan Paket',
				'topik'		=> '',
				'transaksi'	=> $this->laporan->getAllTransFasilitas(),
				'cetak'		=> $cetak,
				'isi'		=> 'laporan/fasilitas'
			);
		}
		$this->load->view('layout/wrap', $data, false);
	}
}

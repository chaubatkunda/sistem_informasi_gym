<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{
	//!======================== Login ========================//
	public function __construct()
	{
		parent::__construct();
		//! chek_admin();
		not_login();
	}

	public function cetaktrpaket($id)
	{
		$title = 'Cetak Detail Paket';
		// $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [100, 100]]);
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [150, 150]]);
		$paket = $this->transaksi->getAllDetPaketById($id);
		$valid = $this->transaksi->getValidPaketById($id);
		$data = $this->load->view('cetak/transaksipaket', ['title' => $title, 'detail' => $paket, 'trpaket' => $valid], TRUE);
		$mpdf->WriteHTML($data);
		// $mpdf->AutoPrint(true);
		$mpdf->Output();
	}
	public function downloadtrpaket($id)
	{
		$title = 'Download Detail Paket';
		// $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [100, 100]]);
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [150, 150]]);
		$paket = $this->transaksi->getAllDetPaketById($id);
		$valid = $this->transaksi->getValidPaketById($id);
		$data = $this->load->view('cetak/transaksipaket', ['title' => $title, 'detail' => $paket, 'trpaket' => $valid], TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output('bukti-pembelian-paket.pdf', \Mpdf\Output\Destination::DOWNLOAD);
	}

	public function cetakfilterpaket()
	{
		$tgl1 = urldecode($this->input->get('tgl1'));
		$tgl2 = urldecode($this->input->get('tgl2'));

		$title = 'Cetak Detail Paket';
		// $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [100, 100]]);
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$periode = indoDate($tgl1) . " Sampai " . indoDate($tgl2);
		$cetak = $this->laporan->filterLaporanPaket($tgl1, $tgl2);
		$total = $this->laporan->sumSearchPaket($tgl1, $tgl2);
		$data = $this->load->view('cetak/filter_paket', ['title' => $title, 'cetak' => $cetak, 'total' => $total, 'periode' => $periode], TRUE);
		$mpdf->WriteHTML($data);
		// $mpdf->AutoPrint(true);
		$mpdf->Output();
	}

	public function cetakfilterfasilitas()
	{
		$tgl1 = urldecode($this->input->get('tgl1'));
		$tgl2 = urldecode($this->input->get('tgl2'));
		$title = 'Cetak Detail Fasilitas';
		// $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [100, 100]]);
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$periode = date('d-m-Y', strtotime($tgl1)) . " Sampai " . date('d-m-Y', strtotime($tgl2));
		$cetak = $this->laporan->filterLaporanFasilitas($tgl1, $tgl2);
		$total = $this->laporan->sumSearchFasilitas($tgl1, $tgl2);
		$data = $this->load->view('cetak/filter-fasilitas', ['title' => $title, 'cetak' => $cetak, 'total' => $total, 'periode' => $periode], TRUE);
		$mpdf->WriteHTML($data);
		// $mpdf->AutoPrint(true);
		$mpdf->Output();
	}

	public function cetaklappaket()
	{
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$title = 'Laporan Paket';
		$lap = $this->laporan->getAllTransPaket();
		$total = $this->laporan->sumAllPaket();
		$data = $this->load->view('cetak/lap_paket', ['lap' => $lap, 'total' => $total, 'title' => $title], TRUE);
		$mpdf->WriteHTML($data);
		// $mpdf->AutoPrint(true);
		$mpdf->Output();
	}
	public function cetaklapfasilitas()
	{
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$title = 'Laporan Fasilitas';
		$lap = $this->laporan->getAllTransFasilitas();
		$total = $this->laporan->sumAllFasilitas();
		$data = $this->load->view('cetak/lap-fasilitas', ['lap' => $lap, 'total' => $total, 'title' => $title], TRUE);
		$mpdf->WriteHTML($data);
		// $mpdf->AutoPrint(true);
		$mpdf->Output();
	}
}

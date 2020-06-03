<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
	public function getAllTransFasilitas()
	{
		return $this->db->get_where('t_transfasilitas', ['is_success' => 1])->result_array();
	}
	public function filterLaporanFasilitas($tgl1, $tgl2)
	{
		return $this->db->query("SELECT * FROM t_transfasilitas WHERE tgl_transfasilitas BETWEEN '$tgl1' AND '$tgl2'  AND ket_bayar = 1 ")->result_array();
	}
	public function sumSearchFasilitas($tgl1, $tgl2)
	{
		$hasil = $this->db->query("SELECT sum(total_bayar) as total FROM t_transfasilitas WHERE tgl_transfasilitas BETWEEN '$tgl1' AND '$tgl2' AND ket_bayar = 1 ");
		if ($hasil->num_rows() > 0) {
			return $hasil->row()->total;
		} else {
			return 0;
		}
	}
	public function sumAllFasilitas()
	{
		$hasil = $this->db->query("SELECT sum(total_bayar) as total FROM t_transfasilitas WHERE ket_bayar = 1 ");
		if ($hasil->num_rows() > 0) {
			return $hasil->row()->total;
		} else {
			return 0;
		}
	}

	public function getAllTransPaket()
	{
		$this->db->order_by('kode_pembelian', 'ASC');
		return $this->db->get_where('t_transpaket', ['is_success' => 1])->result_array();
	}
	public function filterLaporanPaket($tgl1, $tgl2)
	{
		return $this->db->query("SELECT * FROM t_transpaket WHERE tgl_trans BETWEEN '$tgl1' AND '$tgl2'  AND ket_bayar = 1 ")->result_array();
	}
	public function sumSearchPaket($tgl1, $tgl2)
	{
		$hasil = $this->db->query("SELECT sum(harga_paket) as total FROM t_transpaket WHERE tgl_trans BETWEEN '$tgl1' AND '$tgl2' ");
		if ($hasil->num_rows() > 0) {
			return $hasil->row()->total;
		} else {
			return 0;
		}
	}
	public function sumAllPaket()
	{
		$hasil = $this->db->query("SELECT sum(harga_paket) as total FROM t_transpaket WHERE ket_bayar = 1");
		if ($hasil->num_rows() > 0) {
			return $hasil->row()->total;
		} else {
			return 0;
		}
	}
}

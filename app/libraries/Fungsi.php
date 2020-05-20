<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fungsi
{
	protected $lb;
	function __construct()
	{
		// parent::__construct();
		$this->lb = &get_instance();
	}
	function user_login()
	{
		$session_user = $this->lb->session->userdata('id');
		return $this->lb->user->loginsession($session_user);
	}
	function chek_member()
	{
		$iduser = $this->lb->session->userdata('id');
		return $this->lb->user->getChekMember($iduser);
	}

	//? ======================= ID Seting Paket =======================//
	function getIdSetingPaket()
	{
		$this->lb->db->select_max('id_setingpaket');
		$querySet = $this->lb->db->get('t_setingpaket')->row_array();
		return $querySet['id_setingpaket'] + 1;
	}
	//! ======================= End ID Seting Paket =======================//

	//!================== Kode Transaksi Fasilitas ==================//
	function kodeTransFasilitas()
	{
		$sql = "SELECT MAX(MID(kode_pembelian,9,4)) as kode_belipaket 
				FROM t_transfasilitas 
				WHERE MID(kode_pembelian,3,6) = DATE_FORMAT(CURDATE(),'%y%m%d')";
		$query = $this->lb->db->query($sql);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$n = ((int) $row->kode_belipaket) + 1;
			$no = sprintf("%'.04d", $n);
		} else {
			$no = "0001";
		}
		$kodepaket = "TF" . date('ymd') . $no;
		return $kodepaket;
	}

	function kodeTransPaket()
	{
		$sql = "SELECT MAX(MID(kode_pembelian,9,4)) as kode_belipaket 
				FROM t_transpaket 
				WHERE MID(kode_pembelian,3,6) = DATE_FORMAT(CURDATE(),'%d%m%y')";
		$query = $this->lb->db->query($sql);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$n = ((int) $row->kode_belipaket) + 1;
			$no = sprintf("%'.04d", $n);
		} else {
			$no = "0001";
		}
		$kodepaket = "TR" . date('dmy') . $no;
		return $kodepaket;
	}

	public function geneRateIdMember()
	{
		$sql = "SELECT MAX(MID(id_member,9,4)) as idmem 
				FROM t_member 
				WHERE MID(id_member,3,6) = DATE_FORMAT(CURDATE(),'%d%m%y')";
		$query = $this->lb->db->query($sql);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$n = ((int) $row->idmem) + 1;
			$no = sprintf("%'.04d", $n);
		} else {
			$no = "0001";
		}
		$kodepaket = "MB" . date('dmy') . $no;
		return $kodepaket;
	}

	function kodePaket()
	{
		$this->lb->db->select_max('id_paket');
		$queryIdPaket = $this->lb->db->get('t_paket')->row_array();
		$ambilId = $queryIdPaket['id_paket'];
		$hitung = substr($ambilId, 0, 999);
		$hasil = (int) $hitung + 1;
		if (strlen($hasil) == 1) {
			$idpaket = "000" . $hasil;
		} elseif (strlen($hasil) == 2) {
			$idpaket = "00" . $hasil;
		} elseif (strlen($hasil) == 3) {
			$idpaket = "0" . $hasil;
		} elseif (strlen($hasil) == 4) {
			$idpaket = $hasil;
		}
		return $idpaket;
	}
	function idFasilitas()
	{

		$sql = "SELECT MAX(MID(id_fasilitas,9,4)) as idfas 
				FROM t_fasilitas 
				WHERE MID(id_fasilitas,3,6) = DATE_FORMAT(CURDATE(),'%d%m%y')";
		$query = $this->lb->db->query($sql);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$n = ((int) $row->idfas) + 1;
			$no = sprintf("%'.04d", $n);
		} else {
			$no = "0001";
		}
		$kodepaket = "FS" . date('dmy') . $no;
		return $kodepaket;
	}
	function idSenam()
	{

		$sql = "SELECT MAX(MID(id_senam,9,4)) as idsn 
				FROM t_jenis_senam 
				WHERE MID(id_senam,3,6) = DATE_FORMAT(CURDATE(),'%d%m%y')";
		$query = $this->lb->db->query($sql);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$n = ((int) $row->idsn) + 1;
			$no = sprintf("%'.04d", $n);
		} else {
			$no = "0001";
		}
		$kodepaket = "SN" . date('dmy') . $no;
		return $kodepaket;
	}


	/* function idTransIsiPaket()
	{
		$this->lb->db->select_max('id_transisip');
		$querySet = $this->lb->db->get('t_transisipaket')->row_array();
		return $querySet['id_transisip'] + 1;
	} */
}

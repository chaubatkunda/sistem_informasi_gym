<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
	//!=========================== Count Member ===========================//
	public function countMember()
	{
		/* $tgl1 = date("Y-m-d") . " " . "00:00:00";
		$tgl2 = date("Y-m-d") . " " . "23:59:59";
		return $this->db->query("SELECT count(id_member) as total_member FROM t_member WHERE tgl_daftar >='$tgl1' AND tgl_daftar <= '$tgl2'")->result_array(); */
		return $this->db->get('t_member')->num_rows();
	}

	//TODO=========================== Count Paket ===========================//
	public function countPaket()
	{
		/* $tgl1 = date("Y-m-d") . " " . "00:00:00";
        $tgl2 = date("Y-m-d") . " " . "23:59:59";
		return $this->db->query("SELECT * FROM t_transpaket WHERE tgl_trans>='$tgl1' AND tgl_trans<= '$tgl2'")->num_rows(); */
		return $this->db->get('t_transpaket')->num_rows();
	}
	//?=========================== Count Fasilitas ===========================//
	public function countFasilitas()
	{
		return $this->db->get('t_fasilitas')->num_rows();
	}
	//*=========================== Count Jenis Senam ===========================//
	public function countJenisSenam()
	{
		return $this->db->get('t_jenis_senam')->num_rows();
	}


	public function countPaketMember($id_member)
	{
		return $this->db->get_where('t_transpaket', ['id_member' => $id_member])->num_rows();
	}
	public function getAllMyPaket($idmember)
	{
		$this->db->order_by('kode_pembelian', 'ASC');
		return $this->db->get_where('t_transpaket', ['id_member' => $idmember])->result_array();
	}
	public function getAllMyFasilitas($idmember)
	{
		return $this->db->get_where('t_transfasilitas', ['id_member' => $idmember])->result_array();
	}
	public function countFasMember($id_member)
	{
		return $this->db->get_where('t_transfasilitas', ['id_member' => $id_member])->num_rows();
	}
}

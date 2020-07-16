<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	// ! User Login
	public function getUserLogin($username)
	{
		return $this->db->get_where('t_user', ['username' => $username])->row_array();
	}

	public function loginsession($session_user)
	{
		return $this->db->get_where('t_user', ['id' => $session_user])->row_array();
	}
	// ! End UserLogin

	// !Chek Member
	public function getChekMember($iduser)
	{
		$this->db->select('*');
		$this->db->from('t_user');
		$this->db->join('t_member', 't_member.id_user = t_user.id', 'left');
		$this->db->where('t_user.id', $iduser);
		return $this->db->get()->row();
	}
	// !End Chek Member

	// !User Paket
	public function getAllTransPaketById($id)
	{
		return $this->db->get_where('t_transpaket', ['kode_pembelian' => $id])->row();
	}
	public function getDetMyPaket($id)
	{
		return $this->db->get_where('t_transpaket', ['id_member' => $id])->result();
	}
	public function getDetPaket($id)
	{
		return $this->db->get_where('t_transpaket', ['kode_pembelian' => $id])->row();
	}
	public function getDetIsiPaket($id)
	{
		// $id = $this->getDetPaket(0);
		return $this->db->get_where('t_transisipaket', ['kode_pembelian' => $id])->result();
	}

	// ! User Fasilitas
	public function getDetMyFasilitas($id)
	{
		return $this->db->get_where('t_transfasilitas', ['id_member' => $id])->result();
	}
	public function getDetFasilitas($id)
	{
		return $this->db->get_where('t_transfasilitas', ['kode_pembelian' => $id])->row();
	}
	public function getAllFasilitasByKet()
	{
		return $this->db->get_where('t_fasilitas', ['ket' => 1])->result();
	}

	public function update_user($id)
	{
		$data = [
			'level'	=> 2
		];
		return $this->db->update('t_user', $data, ['id' => $id]);
	}
	public function insert_member($datau)
	{
		return $this->db->insert('t_member', $datau);
	}
}

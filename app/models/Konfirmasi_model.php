<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Model Transaksifasilitas
 * This Model for ...
 * @package     Codeigniter
 * @category    Model CI
 * @author      Esau Batkunda <Maniklusi31@gmail.com>
 * @link        https://github.com/chaubatkunda
 * @param       ...
 * @return      ...
 */

class Konfirmasi_model extends CI_Model
{
	//?======================== Transaksi Fasilitas ========================//

	public function getAllChekPaket()
	{
		$this->db->select('*');
		$this->db->from('t_transpaket');
		$this->db->join('t_member', 't_member.id_member = t_transpaket.id_member');
		$this->db->join('t_user', 't_user.id = t_member.id_user');
		return $this->db->get()->result();
	}
	public function detaiPaket($id)
	{
		$this->db->select('*');
		$this->db->from('t_transpaket');
		$this->db->join('t_member', 't_member.id_member = t_transpaket.id_member');
		$this->db->join('t_user', 't_user.id = t_member.id_user');
		$this->db->where('kode_pembelian', $id);
		return $this->db->get()->row();
	}
	public function getAllChekFasilitas()
	{
		$this->db->select('*');
		$this->db->from('t_transfasilitas');
		$this->db->join('t_member', 't_member.id_member = t_transfasilitas.id_member');
		$this->db->join('t_user', 't_user.id = t_member.id_user');
		// $this->db->where('ket_bayar', 2);
		return $this->db->get()->result();
	}

	public function detailFasilitas($id)
	{
		$this->db->select('*');
		$this->db->from('t_transfasilitas');
		$this->db->join('t_member', 't_member.id_member = t_transfasilitas.id_member');
		$this->db->join('t_user', 't_user.id = t_member.id_user');
		$this->db->where('kode_pembelian', $id);
		return $this->db->get()->row();
	}

	public function verPaket($id)
	{
		return $this->db->get_where('t_transpaket', ['kode_pembelian' => $id])->row();
	}
	public function verFasilitas($id)
	{
		return $this->db->get_where('t_transfasilitas', ['kode_pembelian' => $id])->row();
	}

	public function update_fasilitas($dataf, $id)
	{
		return $this->db->update('t_transfasilitas', $dataf, ['kode_pembelian' => $id]);
	}
	public function update_transpaket($datap, $id)
	{
		return $this->db->update('t_transpaket', $datap, ['kode_pembelian' => $id]);
	}

	//!======================== Transaksi Fasilitas ========================//
}

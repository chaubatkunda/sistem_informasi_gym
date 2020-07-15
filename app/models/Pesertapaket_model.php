<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesertapaket_model extends CI_Model
{

    //?=========================== Peserta Paket ===========================//
    public function getAllPesertaPaket()
    {
        $sql = "t_member.id_member as idmember, nama, t_transpaket.id_member as trp-dmember, nama_paket, tgl_trans";

        $this->db->select($sql);
        $this->db->from('t_member');
        $this->db->join('t_transpaket', 't_transpaket.id_member = t_member.id_member');
        $this->db->join('t_user', 't_user.id = t_member.id_user', 'left');
        $this->db->order_by('tgl_trans', 'asc');
        // $this->db->where('t_member,id_member');
        return $this->db->get()->result();
    }

    public function getAllPeserta($id)
    {
        $this->db->select('*');
        $this->db->from('t_transpaket');
        $this->db->join('t_member', 't_member.id_member = t_transpaket.id_member');
        $this->db->join('t_user', 't_user.id = t_member.id_user');
        $this->db->where('nama_paket', $id);
        return $this->db->get()->result();
        // return $this->db->get_where('t_transpaket', ['nama_paket' => $id])->result();
    }
    //!=========================== EndPeserta Paket ===========================//
}

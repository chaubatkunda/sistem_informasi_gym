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
    //!=========================== EndPeserta Paket ===========================//
}

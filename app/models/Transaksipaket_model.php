<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Model Transaksi_paket
 * This Model for ...
 * @package     Codeigniter
 * @category    Model CI
 * @author      Esau Batkunda <Maniklusi31@gmail.com>
 * @link        https://github.com/chaubatkunda
 * @param       ...
 * @return      ...
 */

class Transaksipaket_model extends CI_Model
{

    //?======================== Transaksi Paket ========================//
    public function getAllTransPaket()
    {
        $this->db->order_by('kode_pembelian', 'ASC');
        return $this->db->get('t_transpaket')->result_array();
    }

    public function cariAllMember($cari)
    {
        // $cari = $this->input->post('cari', true);
        $this->db->select('nama, id_member');
        $this->db->from('t_member');
        $this->db->join('t_user', 't_user.id = t_member.id_user');
        $this->db->like('t_member.id_member', $cari);
        $this->db->or_like('t_user.nama', $cari);
        return $this->db->get()->result();
    }

    public function getCountMember($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->join('t_member', 't_member.id_user = t_user.id', 'right');
        $this->db->limit($limit, $start);
        $this->db->order_by('tgl_daftar', 'desc');
        return $this->db->get()->result();
    }

    public function count_member()
    {
        $this->db->select('nama, id_member');
        $this->db->from('t_member');
        $this->db->join('t_user', 't_user.id = t_member.id_user');
        return $this->db->get()->num_rows();
    }

    public function getPeriodeTransPaket()
    {
        $tgl = date('Y-m-d');
        $this->db->order_by('kode_pembelian', 'ASC');
        return $this->db->get_where('t_transpaket', ['tgl_trans' => $tgl])->result_array();
    }

    public function getValidPaketById($id)
    {
        $this->db->select('t_member.id_member as idmem, notelp, id_user, t_user.id, nama, t_transpaket.id_member as trpidmem, id_transp, tgl_trans, kode_pembelian, nama_paket, harga_paket, ket_bayar, bukti_pembayaran');
        $this->db->from('t_transpaket');
        $this->db->join('t_member', 't_member.id_member = t_transpaket.id_member');
        $this->db->join('t_user', 't_user.id = t_member.id_user');
        $this->db->where('t_transpaket.kode_pembelian', $id);
        return $this->db->get()->row_array();
    }
    public function getAllTransPaketById($id)
    {
        return $this->db->get_where('t_transpaket', ['id_transp' => $id])->row_array();
    }

    //!======================== End Transaksi Paket ========================//


    //?======================== Detail Paket ========================//
    public function getAllDetPaketById($id)
    {
        $this->db->select('*');
        $this->db->from('t_transpaket');
        $this->db->join('t_transisipaket', 't_transisipaket.kode_pembelian = t_transpaket.kode_pembelian');
        $this->db->where('t_transpaket.kode_pembelian', $id);
        return $this->db->get()->result_array();
    }
    //!======================== End Detail Paket ========================//
}

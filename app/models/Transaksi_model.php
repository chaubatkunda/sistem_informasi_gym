<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    public function transaksiAllPaket()
    {
        return $this->db->get_where('t_transpaket', ['is_success' => 1])->result();
    }
    public function transaksiAllFasilita()
    {
        return $this->db->get_where('t_transfasilitas', ['is_success' => 1])->result();
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller Pesertapaket
 * This Controller for ...
 * @package     Codeigniter
 * @category    Controller CI
 * @author      Esau Batkunda <Maniklusi31@gmail.com>
 * @link        https://github.com/chaubatkunda
 * @param       ...
 * @return      ...
 */

class Transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        not_login();
        chek_admin();
    }
    //?============================== Transaksi==============================//
    public function index()
    {
        $data = array(
            'title'     => 'Riwayat Transaksi',
            'topik'     => 'Riwayat Transaksi',
            'transaksi' => $this->transaksi->transaksiAllPaket(),
            'fasilitas' => $this->transaksi->transaksiAllFasilita(),
            'isi'       => 'transaksi/riwayat_transaksi/riwayat'
        );
        $this->load->view('layout/wrap', $data, false);
    }


    //!============================== EndTransaksi==============================//
}

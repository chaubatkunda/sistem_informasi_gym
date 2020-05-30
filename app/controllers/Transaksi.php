<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller Member
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
    //?======================== Login ========================//
    public function __construct()
    {
        parent::__construct();
        chek_admin();
        not_login();
    }

    //?======================== Transaksi Paket ========================//

    public function index()
    {

        $config['per_page']     = 7;
        $config['total_rows']   = $this->transpaket->count_member();
        $this->pagination->initialize($config);
        $start         = $this->uri->segment(3);
        $data = array(
            'title'     => 'Transaksi Paket',
            'topik'     => '',
            'start'     => $start,
            'member'       => $this->transpaket->getCountMember($config['per_page'],  $start),
            'isi'       => 'transaksi/paket/add'
        );
        $this->load->view('layout/wrap', $data, false);
    }


    public function carimember()
    {
        $cari = $this->input->get('key', true);
        $data = array(
            'member'        => $this->transpaket->cariAllMember($cari)
        );
        $this->load->view('transaksi/paket/cari_ajax', $data);
    }
    public function transpaket()
    {
        $data = array(
            'title'         => 'Transaksi Paket',
            'topik'         => 'Keseluruhan Transaksi Paket',
            'transaksi'     => $this->transpaket->getAllTransPaket(),
            'isi'           => 'transaksi/paket/home'
        );
        $this->load->view('layout/wrap', $data, false);
    }
    public function periodetranspaket()
    {
        $data = array(
            'title'     => 'Periode Paket',
            'topik'     => 'Data Transaksi Paket Dalam Satu Hari',
            'periode'     => $this->transpaket->getPeriodeTransPaket(),
            'isi'         => 'transaksi/paket/periode'
        );
        $this->load->view('layout/wrap', $data, false);
    }
    public function dettranspaket($id)
    {
        $data = array(
            'title'     => 'Detail Paket',
            'topik'     => 'Data Transaksi Paket Dalam Satu Hari',
            'detail'     => $this->transpaket->getAllDetPaketById($id),
            'trpaket'     => $this->transpaket->getValidPaketById($id),
            'isi'         => 'transaksi/paket/det'
        );
        $this->load->view('layout/wrap', $data, false);
    }

    public function validasipaket($id)
    {

        $data = array(
            'title'     => 'Validasi Paket',
            'topik'     => '',
            'validasi'  => $this->transpaket->getValidPaketById($id),
            'isi'       => 'transaksi/paket/validasi'
        );
        $this->load->view('layout/wrap', $data, false);
    }



    //!======================== End Transaksi Paket ========================//
}

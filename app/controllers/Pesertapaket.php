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

class Pesertapaket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        not_login();
        chek_admin();
    }
    //?============================== PesertaPaket ==============================//
    public function index()
    {
        $data = array(
            'title'     => 'Peserta Paket',
            'topik'     => 'Data Peserta Paket',
            'peserta'   => $this->paket->getAllPaket(),
            'isi'       => 'peserta_paket/home'
        );
        $this->load->view('layout/wrap', $data, false);
    }

    public function detail($id)
    {
        $data = array(
            'title'     => 'Peserta Paket',
            'topik'     => 'Data Peserta Paket',
            'peserta'   => $this->peserta->getAllPeserta($id),
            'isi'       => 'peserta_paket/detail-peserta'
        );
        $this->load->view('layout/wrap', $data, false);
    }
    //!============================== EndPesertaPaket ==============================//
}

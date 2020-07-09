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

class Pembelian extends CI_Controller
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

        // $config['per_page']     = 7;
        // $config['total_rows']   = $this->transpaket->count_member();
        // $this->pagination->initialize($config);
        // $start         = $this->uri->segment(3);
        $data = array(
            'title'     => 'Pembelian',
            'topik'     => '',
            // 'start'     => $start,
            // 'member'    => $this->transpaket->getCountMember($config['per_page'],  $start),
            'member'    => $this->member->getAllMember(),
            'isi'       => 'transaksi/paket/add'
        );
        $this->load->view('layout/wrap', $data, false);
    }


    // public function carimember()
    // {
    //     $cari = $this->input->get('key', true);
    //     $data = array(
    //         'member'        => $this->transpaket->cariAllMember($cari)
    //     );
    //     $this->load->view('transaksi/paket/cari_ajax', $data);
    // }



    //!======================== End Transaksi Paket ========================//
}

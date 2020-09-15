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
        $data = array(
            'title'     => 'Pembelian',
            'topik'     => '',
            'member'    => $this->member->getAllMember(),
            'isi'       => 'transaksi/paket/add'
        );
        $this->load->view('layout/wrap', $data, false);
    }
    //!======================== End Transaksi Paket ========================//
}

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

class Pagehome extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title'     => 'Home',
            'isi'       => 'page/home/home'
        );
        $this->load->view('page/layout/wrap', $data, false);
    }
}

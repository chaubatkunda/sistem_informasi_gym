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
class Instruktur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        not_login();
        chek_admin();
    }


    //* ============================== Instruktur ==============================//
    public function index()
    {
        $data = [
            'title'         => 'Instruktur',
            'topik'         => 'Instruktur',
            'instruktur'    => $this->instruktur->getAllInstruktur(),
            'isi'           => 'instruktur/home'
        ];
        $this->load->view('layout/wrap', $data, false);
    }

    public function delete($id)
    {
        $this->instruktur->delete($id);
        if ($this->db->affected_rows() > 0) {
            redirect('admin/instruktur');
        } else {
            redirect('admin/instruktur');
        }
    }
    //! ============================== End Instruktur ==============================//
}

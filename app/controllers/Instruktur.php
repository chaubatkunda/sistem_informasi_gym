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
    public function create()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('telp', 'Telpon', 'trim|required|numeric|min_length[6]|max_length[12]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $data = [
            'title'         => 'Create',
            'topik'         => 'Create',
            'instruktur'    => $this->instruktur->getAllInstruktur(),
            'isi'           => 'instruktur/add'
        ];
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/wrap', $data, false);
        } else {
            $instruktur = [
                'nama_instruktur'   =>   $this->input->post('nama', true),
                'no_hp'           => $this->input->post('telp', true),
                'alamat'            => $this->input->post('alamat', true),
                'aktif'             => 1
            ];
            $this->instruktur->insert_instruktur($instruktur);
            redirect('admin/instruktur');
        }
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

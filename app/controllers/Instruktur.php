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

    public function detail($id)
    {

        $data = [
            'title'         => 'Detail Instruktur',
            'topik'         => 'Instruktur',
            'detail'        => $this->instruktur->detil_instruktur($id),
            'instruktur'    => $this->instruktur->getAllInstrukturById($id),
            'isi'           => 'instruktur/detail-instruktur'
        ];
        $this->load->view('layout/wrap', $data, false);
    }
    public function detailt_create($id)
    {
        $data = [
            'title'         => 'Detail Instruktur',
            'topik'         => 'Instruktur',
            'instruktur'    => $this->instruktur->getAllInstrukturById($id),
            'senam'         => $this->senam->getAllJenisSenam(),
            'isi'           => 'instruktur/create_detail'
        ];
        $this->form_validation->set_rules('jenis_senam', 'Jenis Senam', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/wrap', $data, false);
        } else {
            $ins = [
                'instruktur_id'     => $this->input->post('instruktur', true),
                'senam_id'     => $this->input->post('jenis_senam', true)
            ];
            $this->instruktur->insert_detail($ins);
            redirect('admin/instruktur/detail/' . $id);
        }
    }
    public function detailt_edit($id)
    {
        $idi = $this->input->post('instruktur', true);
        $data = [
            'title'         => 'Detail Instruktur',
            'topik'         => 'Instruktur',
            'instruktur'    => $this->instruktur->getAllInstrukturById($id),
            'senam'         => $this->senam->getAllJenisSenam(),
            'det'           => $this->instruktur->detail_instrukturbyId($id),
            'isi'           => 'instruktur/edit_detail'
        ];
        $this->form_validation->set_rules('jenis_senam', 'Jenis Senam', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/wrap', $data, false);
        } else {
            $ins = [
                'senam_id'     => $this->input->post('jenis_senam', true)
            ];
            $this->instruktur->update_detail($id, $ins);
            redirect('admin/instruktur/detail/' . $idi);
        }
    }
    public function detailt_delete($id)
    {
        $ins = $this->input->get('ins', true);
        $this->instruktur->delete_detail($id);
        redirect('admin/instruktur/detail/' . $ins);
    }

    //! ============================== End Instruktur ==============================//
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller Senam
 * This Controller for ...
 * @package     Codeigniter
 * @category    Controller CI
 * @author      Esau Batkunda <Maniklusi31@gmail.com>
 * @link        https://github.com/chaubatkunda
 * @param       ...
 * @return      ...
 */

class Senam extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        not_login();
        chek_admin();
    }

    //? ============================== Senam ==============================//
    public function index()
    {
        $data = array(
            'title'     => 'Senam',
            'topik'     => '',
            'senam'     => $this->senam->getAllJenisSenam(),
            'isi'       => 'senam/home'
        );
        $this->load->view('layout/wrap', $data, false);
    }
    public function addsenam()
    {
        $data = array(
            'title'     => 'Senam',
            'topik'     => '',
            'isi'       => 'senam/add_senam'
        );

        $this->form_validation->set_rules('senam', 'Senam', 'required|trim|is_unique[t_jenis_senam.jenis_senam]');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric|trim|max_length[8]');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/wrap', $data, false);
        } else {
            if ($this->senam->simpanSenam() == true) {
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('senam', 'Berhasil Disimpan');
                    redirect('admin/senam');
                } else {
                    $this->session->set_flashdata('senam', 'Gagal Disimpan');
                    redirect('admin/senam');
                }
            } else {
                $this->session->set_flashdata('senam', 'Gagal Disimpan');
                redirect('admin/senam');
            }
        }
    }
    public function editsenam($id)
    {
        $data = array(
            'title'     => 'Edit Senam',
            'topik'     => '',
            'senam'     => $this->senam->getAllSenamById($id),
            'isi'       => 'senam/edit_senam'
        );

        $this->form_validation->set_rules('senam', 'Senam', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric|trim|max_length[8]');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/wrap', $data, false);
        } else {
            if ($this->senam->updateSenam($id) == true) {
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('senam', 'Berhasil Diubah');
                    redirect('admin/senam');
                } else {
                    $this->session->set_flashdata('senam', 'Gagal Diubah');
                    redirect('admin/senam');
                }
            } else {
                $this->session->set_flashdata('senam', 'Gagal Diubah');
                redirect('admin/senam');
            }
        }
    }

    public function hapussenam($id)
    {
        if ($this->senam->deleteSenam($id) == true) {
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('senam', 'Berhasil Dihapus');
                redirect('admin/senam');
            } else {
                $this->session->set_flashdata('senam', 'Gagal Dihapus');
                redirect('admin/senam');
            }
        } else {
            $this->session->set_flashdata('senam', 'Gagal Dihapus');
            redirect('admin/senam');
        }
    }
    //! ============================== End Senam ==============================//
}

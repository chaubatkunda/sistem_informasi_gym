<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Controller Fasilitas
 * This Controller for ...
 * @package     Codeigniter
 * @category    Controller CI
 * @author      Esau Batkunda <Maniklusi31@gmail.com>
 * @link        https://github.com/chaubatkunda
 * @param       ...
 * @return      ...
 */
class Fasilitas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        not_login();
        chek_admin();
    }

    //? ============================== Fasilitas ==============================//
    public function index()
    {
        $data = array(
            'title'     => 'Fasilitas',
            'topik'     => '',
            'fasilitas' => $this->fasilitas->getAllFasilitas(),
            'isi'       => 'fasilitas/home'
        );
        $this->load->view('layout/wrap', $data, false);
    }
    public function detfas()
    {
        $id = $this->input->post('idfas');
        $data = $this->fasilitas->getAllFasilitasById($id);
        echo json_encode($data);
    }
    public function addfasilitas()
    {
        $data = array(
            'title'     => 'Add Fasilitas',
            'topik'     => '',
            'fasilitas' => $this->fasilitas->getAllFasilitas(),
            'durasi'    => ['1', '2', '3', '4'],
            'isi'       => 'fasilitas/add-fasilitas'
        );

        $this->form_validation->set_rules('fasilitas', 'Fasilias', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim|numeric|max_length[8]');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/wrap', $data, false);
        } else {
            $tglm = date('Y-m-d', strtotime($this->input->post('tgl_masuk', true)));
            $dataf = [
                'id_fasilitas'  => $this->input->post('idfasilitas', true),
                'fasilitas'     => htmlspecialchars($this->input->post('fasilitas', true)),
                'harga'         => htmlspecialchars($this->input->post('harga', true)),
                'tgl_masuk'     => $tglm,
                'jml_jmpakai'   => htmlspecialchars($this->input->post('durasi')),
                'tgl_rusak'     => '0000-00-00',
                'ket'           => 1
            ];
            if ($this->fasilitas->simpanFasilitas($dataf) == true) {
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('fasilitas', 'Berhasil Ditambahkan');
                    redirect('fasilitas');
                } else {
                    $this->session->set_flashdata('fasilitas', 'Gagal Ditambahkan');
                    redirect('fasilitas');
                }
            } else {
                $this->session->set_flashdata('fasilitas', 'Gagal Ditambahkan');
                redirect('fasilitas');
            }
        }
    }
    public function editfasilitas($id)
    {
        $data = array(
            'title'     => 'Edit Fasilitas',
            'topik'     => '',
            'durasi'    => ['1', '2', '3', '4'],
            'fasilitas' => $this->fasilitas->getAllFasilitasById($id),
            'isi'       => 'fasilitas/edit-fasilitas'
        );
        $this->form_validation->set_rules('fasilitas', 'Fasilias', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim|max_length[8]');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/wrap', $data, false);
        } else {
            $rusak = $this->input->post('chek-rusak', true);
            $tglr = date('Y-m-d', strtotime($this->input->post('tgl_rusak', true)));
            if (isset($rusak)) {
                $datar = [
                    'fasilitas' => htmlspecialchars($this->input->post('fasilitas', true)),
                    'harga'     => htmlspecialchars($this->input->post('harga', true)),
                    'tgl_masuk' => $this->input->post('tgl_masuk', true),
                    'jml_jmpakai'   => htmlspecialchars($this->input->post('durasi')),
                    'tgl_rusak' => $tglr,
                    'ket'       => $this->input->post('chek-rusak', true)
                ];
            } else {
                $datar = [
                    'fasilitas' => htmlspecialchars($this->input->post('fasilitas', true)),
                    'harga'     => htmlspecialchars($this->input->post('harga', true)),
                    'tgl_masuk' => $this->input->post('tgl_masuk', true),
                    'jml_jmpakai'   => htmlspecialchars($this->input->post('durasi')),
                    'tgl_rusak' => '0000-00-00',
                    'ket' => $this->input->post('chek-baik', true)
                ];
            }
            if ($this->fasilitas->updateFasilitas($datar, $id) == true) {
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('fasilitas', 'Berhasil Diubah');
                    redirect('fasilitas');
                } else {
                    $this->session->set_flashdata('fasilitas', 'Gagal Diubah');
                    redirect('fasilitas');
                }
            } else {
                $this->session->set_flashdata('fasilitas', 'Gagal Diubah');
                redirect('fasilitas');
            }
        }
    }
    public function hapusfasilitas($id)
    {
        if ($this->fasilitas->deleteFasilitas($id) == true) {
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('fasilitas', 'Berhasil Dihapus');
                redirect('fasilitas');
            } else {
                $this->session->set_flashdata('fasilitas', 'Gagal Dihapus');
                redirect('fasilitas');
            }
        } else {
            $this->session->set_flashdata('fasilitas', 'Gagal Dihapus');
            redirect('fasilitas');
        }
    }
    //!============================== EndFasilitas ==============================//
}

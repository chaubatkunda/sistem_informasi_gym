<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{
    //?======================== Login ========================//
    public function __construct()
    {
        parent::__construct();
        chek_admin();
        not_login();
    }
    //TODO============================== Paket ==============================//

    public function index()
    {
        $data = array(
            'title'     => 'Paket',
            'topik'     => 'Data Paket',
            'paket'     => $this->paket->getAllPaket(),
            'isi'       => 'paket/home'
        );
        $this->load->view('layout/wrap', $data, false);
    }
    public function addpaket()
    {
        $data = array(
            'title'     => 'Add Paket',
            'topik'     => '',
            'durasi'    => ['1', '2', '3', '4'],
            'paket'     => $this->paket->getAllPaket(),
            'isi'       => 'paket/add-paket'
        );

        $this->form_validation->set_rules('paket', 'Paket', 'required|trim|is_unique[t_paket.nama_paket]|max_length[3]');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim|max_length[7]');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/wrap', $data, false);
        } else {
            $tglm = date('Y-m-d', strtotime($this->input->post('tgl_masuk')));
            $durasi = $this->input->post('durasi');

            $tgl_awal = $tglm;
            $time = date("d-m-Y", strtotime($tgl_awal));
            $date = date_create($time);
            date_add($date, date_interval_create_from_date_string('+' . $durasi . 'month'));
            $tambahbulan = date_format($date, 'Y-m-d');

            $datap = [
                'id_paket'      => $this->input->post('idpaket', true),
                'nama_paket'    => htmlspecialchars($this->input->post('paket', true)),
                'harga'         => htmlspecialchars($this->input->post('harga', true)),
                'tgl_awal'      => $tglm,
                'tgl_akhir'     => $tambahbulan
            ];
            if ($this->paket->simpanPaket($datap) == true) {
                $this->session->set_flashdata('paket', 'Berhasil Ditambahkan');
                redirect('paket');
            } else {
                $this->session->set_flashdata('paket', 'Gagal Ditambahkan');
                redirect('paket');
            }
        }
    }
    public function editpaket($id)
    {
        $paket = $this->paket->getPakeById($id);

        $data = array(
            'title'     => 'Edit Paket',
            'topik'     => '',
            'durasi'    => ['1', '2', '3', '4'],
            'bulan'     => date("m", strtotime($paket->tgl_akhir)) - date("m", strtotime($paket->tgl_awal)),
            'paket'     => $paket,
            'isi'       => 'paket/edit_paket'
        );
        $this->form_validation->set_rules('paket', 'Paket', 'required|trim|max_length[3]');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim|max_length[7]');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/wrap', $data, false);
        } else {
            $tglm = date('Y-m-d', strtotime($this->input->post('tgl_masuk')));
            $durasi = $this->input->post('durasi');

            $tgl_awal = $tglm;
            $time = date("d-m-Y", strtotime($tgl_awal));
            $date = date_create($time);
            date_add($date, date_interval_create_from_date_string('+' . $durasi . 'month'));
            $tambahbulan = date_format($date, 'Y-m-d');

            $datap = [
                'nama_paket'    => htmlspecialchars($this->input->post('paket', true)),
                'harga'         => htmlspecialchars($this->input->post('harga', true)),
                'tgl_awal'      => $tglm,
                'tgl_akhir'     => $tambahbulan
            ];
            if ($this->paket->updatePaket($datap, $id) == true) {
                $this->session->set_flashdata('paket', 'Berhasil Diubah');
                redirect('admin/paket');
            } else {
                $this->session->set_flashdata('paket', 'Gagal Diubah');
                redirect('admin/paket');
            }
        }
    }
    public function detpaket($id)
    {
        $data = array(
            'title'         => 'Detail Paket',
            'topik'         => 'Data Paket',
            'detpaket'      => $this->paket->selectPkIsiPaket($id),
            'tgldet'        => $this->paket->tglDetPaket($id),
            'paket'         => $this->paket->getPakeById($id),
            'isi'           => 'paket/detail'
        );
        $this->load->view('layout/wrap', $data, false);
    }

    public function adddetpaket($id)
    {

        $data = array(
            'title'     => 'Add Isi Paket',
            'topik'     => 'Tambah Isi Paket',
            'paket'     => $this->paket->getPakeById($id),
            'senam'     => $this->senam->getAllJenisSenam(),
            'kuota'     => ['1', '2', '3'],
            'isi'       => 'paket/add_det'
        );
        $this->form_validation->set_rules('senam', 'Senam', 'required');
        $this->form_validation->set_rules('kuota', 'Kuota', 'required|trim|numeric|max_length[2]');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/wrap', $data, false);
        } else {
            if ($this->paket->simpanDetkPaket($id) == true) {
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('detpaket', 'Berhasil Ditambahkan');
                    redirect(base_url('admin/detail_paket/' . $id));
                } else {
                    $this->session->set_flashdata('detpaket', 'Gagal Ditambahkan');
                    redirect(base_url('admin/detail_paket/' . $id));
                }
            } else {
                $this->session->set_flashdata('detpaket', 'Gagal Ditambahkan');
                redirect(base_url('admin/detail_paket/' . $id));
            }
        }
    }
    public function editdetpaket($id)
    {
        $idp = $this->paket->getAllSetingPaketById($id)->id_paket;
        $data = array(
            'title'     => 'Detail Paket',
            'topik'     => 'Data Paket',
            'kuota'     => ['1', '2', '3'],
            'senam'     => $this->senam->getAllJenisSenam(),
            'paket'     => $this->paket->getAllSetingPaketById($id),
            'isi'       => 'paket/edit_det'
        );

        $this->form_validation->set_rules('senam', 'Senam', 'required');
        $this->form_validation->set_rules('kuota', 'Kuota', 'required|trim|numeric|max_length[2]');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/wrap', $data, false);
        } else {
            if ($this->paket->updateDetkPaket($id) == true) {
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('detpaket', 'Berhasil Diubah');
                    redirect('detail.paket/' . $idp);
                } else {
                    $this->session->set_flashdata('detpaket', 'Gagal Diubah');
                    redirect('detail.paket/' . $idp);
                }
            } else {
                $this->session->set_flashdata('detpaket', 'Gagal Diubah');
                redirect('detail.paket/' . $idp);
            }
        }
    }
    public function hapusdetpaket($id)
    {
        $ambilidset = $this->paket->getAllSetingPaket($id);
        $idset = $ambilidset['id_paket'];
        $this->paket->hapusDetkPaket($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('detpaket', 'Berhasil Dihapus');
            redirect(base_url('admin/detail_paket/' . $idset));
        } else {
            $this->session->set_flashdata('detpaket', 'Gagal Dihapus');
            redirect(base_url('admin/detail_paket/' . $idset));
        }
    }


    public function hapuspaket($id)
    {
        if ($this->paket->hapusPaket($id) == true) {
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('paket', 'Berhasil Dihapus');
                redirect('admin/paket');
            } else {
                $this->session->set_flashdata('paket', 'Gagal Dihapus');
                redirect('admin/paket');
            }
        } else {
            $this->session->set_flashdata('paket', 'Gagal Dihapus');
            redirect('admin/paket');
        }
    }
    public function getpaketbyid()
    {
        $idpk = $this->input->post('idpk');
        $data = $this->paket->selectPkIsiPaket($idpk);
        echo json_encode($data);
    }
    public function getdetpaketid()
    {
        $idpaket = $this->input->post('idPaket');
        $data = $this->paket->getPakeById($idpaket);
        echo json_encode($data);
    }
    public function tgldetpaket()
    {
        $id = $this->input->post('id');
        $data = $this->paket->tglDetPaket($id);
        echo json_encode($data);
    }
    public function showtgldetpaket()
    {
        $id = $this->input->post('idp');
        $data = $this->paket->showtglDetPaket($id);
        echo json_encode($data);
    }
    //TODO ============================== EndPaket ==============================//
}

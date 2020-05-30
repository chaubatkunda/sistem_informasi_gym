<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket_model extends CI_Model
{
    //*=========================== paket ===========================//
    public function getAllPaket()
    {
        return $this->db->get('t_paket')->result();
    }
    public function getPakeById($id)
    {
        return $this->db->get_where('t_paket', ['id_paket' => $id])->row();
    }
    public function selectPkIsiPaket($idpk)
    {
        $this->db->select('*');
        $this->db->from('t_setingpaket');
        $this->db->join('t_jenis_senam', 't_jenis_senam.id_senam = t_setingpaket.id_jenis_senam');
        $this->db->where('t_setingpaket.id_paket', $idpk);
        return $this->db->get()->result();
    }
    public function seldettglpaket($idpk)
    {
        $this->db->select('*');
        $this->db->from('t_setingpaket');
        $this->db->join('t_jenis_senam', 't_jenis_senam.id_senam = t_setingpaket.id_jenis_senam');
        $this->db->where('t_setingpaket.id_paket', $idpk);
        return $this->db->get()->result_array();
    }
    public function tglDetPaket($id)
    {
        $this->db->select('*');
        $this->db->from('t_setpaket_det');
        $this->db->join('t_setingpaket', 't_setingpaket.id_setingpaket = t_setpaket_det.id_setpaket', 'right');
        $this->db->where('t_setpaket_det.id_setpaket', $id);
        return $this->db->get()->result_array();
    }
    public function showtglDetPaket($id)
    {
        // return $this->db->get_where('v_settglpaket', ['id_paket' => $id])->result_array();
        $this->db->select('*');
        $this->db->from('t_setingpaket');
        $this->db->join('t_setpaket_det', 't_setpaket_det.id_setpaket = t_setingpaket.id_setingpaket');
        $this->db->where('t_setingpaket.id_paket', $id);
        return $this->db->get()->result_array();
    }
    public function simpanDetkPaket($id)
    {
        $idseting = $this->fungsi->getIdSetingPaket();
        // $thn = date('Y');
        //? Tanggal Latihan 1
        $tgl1 = $this->input->post('tgl', true);
        $jam1 = $this->input->post('jam1', true);
        $jam2 = $this->input->post('jam2', true);
        $con = count($tgl1);
        for ($i = 0; $i < $con; $i++) {
            $setdetpaket = [
                'id_setpaket' => $idseting,
                'tgl_masuk' => $tgl1[$i],
                'jam_mulai' => $jam1[$i],
                'jam_selesai' => $jam2[$i]
            ];
            $this->db->insert('t_setpaket_det', $setdetpaket);
        }
        $this->db->delete('t_setpaket_det', ['tgl_masuk' => '0000-00-00']);

        $seting = [
            'id_setingpaket' => $idseting,
            'id_paket' => $id,
            'id_jenis_senam' => htmlspecialchars($this->input->post('senam', true)),
            'kuota' => htmlspecialchars($this->input->post('kuota', true))
        ];
        return $this->db->insert('t_setingpaket', $seting);
    }
    public function updateDetkPaket($id)
    {
        $data = [
            'id_paket' => htmlspecialchars($this->input->post('id_paket', true)),
            'id_jenis_senam' => htmlspecialchars($this->input->post('senam', true)),
            'kuota' => htmlspecialchars($this->input->post('kuota', true)),
            'date1' => $this->input->post('periode1', true),
            'date2' => $this->input->post('periode2', true),
            'jam_mulai' => htmlspecialchars($this->input->post('jam1', true)),
            'jam_selesai' => htmlspecialchars($this->input->post('jam2', true))
        ];
        return $this->db->update('t_setingpaket', $data, ['id_setingpaket' => $id]);
    }
    public function hapusDetkPaket($id)
    {
        $this->db->delete('t_setingpaket', ['id_setingpaket' => $id]);
        $this->db->delete('t_setpaket_det', ['id_setpaket' => $id]);
    }
    public function getAllSetingPaket($id)
    {
        return $this->db->get_where('t_setingpaket', ['id_setingpaket' => $id])->row_array();
    }
    public function getAllSetingPaketById($id)
    {
        $this->db->select('*');
        $this->db->from("t_setingpaket");
        $this->db->join("t_paket", "t_paket.id_paket = t_setingpaket.id_paket");
        $this->db->join("t_jenis_senam", "t_jenis_senam.id_senam = t_setingpaket.id_jenis_senam");
        // $this->db->order_by("t_paket.id_paket", "ASC");
        $this->db->where("t_setingpaket.id_setingpaket", $id);
        return $this->db->get()->row();
    }
    public function simpanPaket($datap)
    {
        return $this->db->insert('t_paket', $datap);
    }
    public function updatePaket($datap, $id)
    {
        return $this->db->update('t_paket', $datap, ['id_paket' => $id]);
    }
    public function hapusPaket($id)
    {
        return $this->db->delete('t_paket', ['id_paket' => $id]);
    }
    //*=========================== Endpaket ===========================//
}

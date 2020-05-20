<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Model Transaksi_paket
 * This Model for ...
 * @package     Codeigniter
 * @category    Model CI
 * @author      Esau Batkunda <Maniklusi31@gmail.com>
 * @link        https://github.com/chaubatkunda
 * @param       ...
 * @return      ...
 */

class Transaksipaket_model extends CI_Model
{

    //?======================== Transaksi Paket ========================//
    public function getAllTransPaket()
    {
        $this->db->order_by('kode_pembelian', 'ASC');
        return $this->db->get('t_transpaket')->result_array();
    }

    public function cariAllMember($cari)
    {
        // $cari = $this->input->post('cari', true);
        $this->db->select('nama, id_member');
        $this->db->from('t_member');
        $this->db->join('t_user', 't_user.id = t_member.id_user');
        $this->db->like('t_member.id_member', $cari);
        $this->db->or_like('t_user.nama', $cari);
        return $this->db->get()->result();
    }

    public function getCountMember($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->join('t_member', 't_member.id_user = t_user.id', 'right');
        $this->db->limit($limit, $start);
        $this->db->order_by('tgl_daftar', 'desc');
        return $this->db->get()->result();
    }

    public function count_member()
    {
        $this->db->select('nama, id_member');
        $this->db->from('t_member');
        $this->db->join('t_user', 't_user.id = t_member.id_user');
        return $this->db->get()->num_rows();
    }

    public function getPeriodeTransPaket()
    {
        $tgl = date('Y-m-d');
        $this->db->order_by('kode_pembelian', 'ASC');
        return $this->db->get_where('t_transpaket', ['tgl_trans' => $tgl])->result_array();
    }

    public function getValidPaketById($id)
    {
        $this->db->select('t_member.id_member as idmem, notelp, id_user, t_user.id, nama, t_transpaket.id_member as trpidmem, id_transp, tgl_trans, kode_pembelian, nama_paket, harga_paket, ket_bayar, bukti_pembayaran');
        $this->db->from('t_transpaket');
        $this->db->join('t_member', 't_member.id_member = t_transpaket.id_member');
        $this->db->join('t_user', 't_user.id = t_member.id_user');
        $this->db->where('t_transpaket.kode_pembelian', $id);
        return $this->db->get()->row_array();
    }
    public function getAllTransPaketById($id)
    {
        return $this->db->get_where('t_transpaket', ['id_transp' => $id])->row_array();
    }
    public function simpanTransPaket($chektransfer, $chektunai, $chekedc)
    {
        $this->db->select_max('id_transp');
        $queryTrPaket = $this->db->get('t_transpaket')->row_array();
        $getIdTrPaket = $queryTrPaket['id_transp'] + 1;
        $tglb = date('Y-m-d', strtotime($this->input->post('tgl_beli', true)));

        // Direktory FileUpload
        $config['upload_path']          = './public/assets/buktitransfer/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 2048;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($chektransfer == 1) {
            if ($this->upload->do_upload('file_upload')) {
                $config['overwrite'] = TRUE;
                $upload_data = array('upload_data' => $this->upload->data());
                $img = $upload_data['upload_data']['file_name'];
                $dataPaket = [
                    'id_transp'         => $getIdTrPaket,
                    'tgl_trans'         => $tglb,
                    'kode_pembelian'    => $this->input->post('kode-trans', true),
                    'id_member'         => htmlspecialchars($this->input->post('id_member', true)),
                    'nama_paket'        => htmlspecialchars($this->input->post('nama-pk')),
                    'harga_paket'       => htmlspecialchars($this->input->post('harga-pk')),
                    'ket_bayar'         => 1,
                    'bukti_pembayaran'  => $img
                ];
                return $this->db->insert('t_transpaket', $dataPaket);
            } else {
                $error = $this->upload->display_errors('Gambar Tidak Dapat Diupload');
                $this->session->set_flashdata('error', $error);
                redirect('dashboard');
            }
        } elseif ($chektunai == 2) {
            $dataPaket = [
                'id_transp' => $getIdTrPaket,
                'tgl_trans' => $tglb,
                'kode_pembelian' => $this->input->post('kode-trans', true),
                'id_member' => htmlspecialchars($this->input->post('id_member', true)),
                'nama_paket' => htmlspecialchars($this->input->post('nama-pk')),
                'harga_paket' => htmlspecialchars($this->input->post('harga-pk')),
                'ket_bayar' => 1,
                'bukti_pembayaran' => 'Tunai'
            ];
            return $this->db->insert('t_transpaket', $dataPaket);
        } elseif ($chekedc == 3) {
            $dataPaket = [
                'id_transp' => $getIdTrPaket,
                'tgl_trans' => $tglb,
                'kode_pembelian' => $this->input->post('kode-trans', true),
                'id_member' => htmlspecialchars($this->input->post('id_member', true)),
                'nama_paket' => htmlspecialchars($this->input->post('nama-pk')),
                'harga_paket' => htmlspecialchars($this->input->post('harga-pk')),
                'ket_bayar' => 1,
                'bukti_pembayaran' => 'EDC'
            ];
            return $this->db->insert('t_transpaket', $dataPaket);
        }
    }
    public function simpanTransIsiPaket()
    {
        //* Data Array IsiPaket/Produk
        $kode = $this->input->post('kode-trans', true);
        $idstp = $this->input->post('idstp', true);
        $jenis = $this->input->post('jan_senam');
        $kuota = $this->input->post('kuota');

        for ($i = 0; $i < count($jenis); $i++) {
            $dataIsiPaket = [
                'kode_pembelian'    => $kode,
                'id_setpaket'        => $idstp[$i],
                'jenis_senam'         => $jenis[$i],
                'kuota'             => $kuota[$i]
            ];
            $this->db->insert('t_transisipaket', $dataIsiPaket);
        }
    }

    public function simpanDetTglIsiPk()
    {
        $tglmasuk = $this->input->post('tgl_masuk');
        $jammulai = $this->input->post('jam_mulai');
        $jamselesai = $this->input->post('jam_selesai');
        $kode = $this->input->post('kode-trans', true);
        $idset = $this->input->post('id_sn', true);

        for ($i = 0; $i < count($tglmasuk); $i++) {
            $data = [
                'id_setpaket'        => $idset[$i],
                'kode_pembelian'    => $kode,
                'tgl_mulai'            => $tglmasuk[$i],
                'jam_mulai'            => $jammulai[$i],
                'jam_selesai'        => $jamselesai[$i]
            ];
            $this->db->insert('t_transisipaket_det', $data);
        }
    }
    //!======================== End Transaksi Paket ========================//
    //?======================== Validasi Paket ========================//
    public function validasiPaket($id)
    {
        $data = [
            'ket_bayar' => 1
        ];
        return $this->db->update('t_transpaket', $data, ['id_transp' => $id]);
    }
    public function validasiPaketBelum($id)
    {
        $data = [
            'ket_bayar' => 3
        ];
        return $this->db->update('t_transpaket', $data, ['id_transp' => $id]);
    }
    //!======================== End Validasi Paket ========================//
    //?======================== Detail Paket ========================//
    public function getAllDetPaketById($id)
    {
        $this->db->select('*');
        $this->db->from('t_transpaket');
        $this->db->join('t_transisipaket', 't_transisipaket.kode_pembelian = t_transpaket.kode_pembelian');
        $this->db->where('t_transpaket.kode_pembelian', $id);
        return $this->db->get()->result_array();
    }
    //!======================== End Detail Paket ========================//
}

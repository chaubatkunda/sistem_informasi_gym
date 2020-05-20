<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Model Fasilitas_model
 * This model for ...
 * @package     Codeigniter
 * @category    Molde
 * @author      Esau Batkunda <Maniklusi31@gmail.com>
 * @link        https://github.com/chaubatkunda
 * @param       ...
 * @return      ...
 */

class Fasilitas_model extends CI_Model
{
    //?============================== Fasilitas ==============================//
    public function getAllFasilitas()
    {
        $this->db->order_by('tgl_masuk', 'desc');
        return $this->db->get('t_fasilitas')->result();
    }
    public function getAllFasilitasById($id)
    {
        return $this->db->get_where('t_fasilitas', ['id_fasilitas' => $id])->row();
    }
    public function simpanFasilitas($dataf)
    {
        return $this->db->insert('t_fasilitas', $dataf);
    }

    public function updateFasilitas($datar, $id)
    {
        return $this->db->update('t_fasilitas', $datar, ['id_fasilitas' => $id]);
    }
    public function deleteFasilitas($id)
    {
        return $this->db->delete('t_fasilitas', ['id_fasilitas' => $id]);
    }
    //!=========================== EndFasilitas ===========================//
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Model Senam_molde
 * This Model for ...
 * @package     Codeigniter
 * @category    Model
 * @author      Esau Batkunda <Maniklusi31@gmail.com>
 * @link        https://github.com/chaubatkunda
 * @param       ...
 * @return      ...
 */

class Senam_model extends CI_Model
{
    //?=========================== Senam ===========================//
    public function getAllJenisSenam()
    {
        $this->db->order_by('id_senam', 'ASC');
        return $this->db->get('t_jenis_senam')->result();
    }
    public function getAllSenamById($id)
    {
        return $this->db->get_where('t_jenis_senam', ['id_senam' => $id])->row();
    }
    public function simpanSenam()
    {
        $data = [
            'id_senam'      => $this->input->post('idsn', true),
            'jenis_senam'   => htmlspecialchars($this->input->post('senam', true)),
            'harga_senam'   => htmlspecialchars($this->input->post('harga', true))
        ];
        return $this->db->insert('t_jenis_senam', $data);
    }
    public function updateSenam($id)
    {
        $data = [
            'jenis_senam' => htmlspecialchars($this->input->post('senam', true)),
            'harga_senam' => htmlspecialchars($this->input->post('harga', true))
        ];
        return $this->db->update('t_jenis_senam', $data, ['id_senam' => $id]);
    }
    public function deleteSenam($id)
    {
        return $this->db->delete('t_jenis_senam', ['id_senam' => $id]);
    }
    //!=========================== EndSenam ===========================//
}

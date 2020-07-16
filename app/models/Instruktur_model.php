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

class Instruktur_model extends CI_Model
{

    public function getAllInstruktur()
    {
        return $this->db->get('t_instruktur')->result();
    }
    public function getAllInstrukturById($id)
    {
        return $this->db->get_where('t_instruktur', ['id_instruktur' => $id])->row();
    }
    public function insert_instruktur($instruktur)
    {
        return $this->db->insert('t_instruktur', $instruktur);
    }
    public function delete($id)
    {
        return $this->db->delete('t_instruktur', ['id_instruktur' => $id]);
    }

    public function detil_instruktur($id)
    {
        $this->db->select('id, instruktur_id, senam_id, id_senam,jenis_senam');
        $this->db->from('t_instruktur_detail');
        $this->db->join('t_jenis_senam', 't_instruktur_detail.senam_id = t_jenis_senam.id_senam', 'left');
        $this->db->where('instruktur_id', $id);
        return $this->db->get()->result();
    }
    public function detail_instrukturbyId($id)
    {
        $this->db->select('id, instruktur_id, senam_id, id_senam,jenis_senam');
        $this->db->from('t_instruktur_detail');
        $this->db->join('t_jenis_senam', 't_instruktur_detail.senam_id = t_jenis_senam.id_senam');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    public function insert_detail($ins)
    {
        return $this->db->insert('t_instruktur_detail', $ins);
    }
    public function update_detail($id, $ins)
    {
        return $this->db->update('t_instruktur_detail', $ins, ['id' => $id]);
    }
    public function delete_detail($id)
    {
        return $this->db->delete('t_instruktur_detail', ['id' => $id]);
    }
}

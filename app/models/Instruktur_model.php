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
    public function insert_instruktur($instruktur)
    {
        return $this->db->insert('t_instruktur', $instruktur);
    }
    public function delete($id)
    {
        return $this->db->delete('t_instruktur', ['id_instruktur' => $id]);
    }
}

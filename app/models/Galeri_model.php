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

class Galeri_model extends CI_Model
{
    public function getAllGaleri()
    {
        $this->db->select('*');
        $this->db->from('t_galeri');
        $this->db->join('t_jenis_senam', 't_jenis_senam.id_senam = t_galeri.senam_id');
        return $this->db->get()->result();
    }
}

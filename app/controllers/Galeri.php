<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    //?======================== Login ========================//
    public function __construct()
    {
        parent::__construct();
        chek_admin();
        not_login();
    }
    //TODO============================== Galeri ==============================//

    public function index()
    {
        $data = array(
            'title'     => 'Galeri',
            'topik'     => 'Data Paket',
            'galeri'    => $this->galeri->getAllGaleri(),
            'isi'       => 'galeri/galeri'
        );
        $this->load->view('layout/wrap', $data, false);
    }
    public function create()
    {
        $data = array(
            'title'     => 'Create',
            'topik'     => 'Data Paket',
            'isi'       => 'galeri/create'
        );
        $this->load->view('layout/wrap', $data, false);
    }

    //TODO ============================== EndGaleri ==============================//
}

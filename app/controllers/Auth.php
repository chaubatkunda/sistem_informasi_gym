<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller Auth
 * Group TA 1
 * Desain Interface, Perancangan Sistem	: Yerry Kalele
 * Perancangan Sistem					: Lina M W
 * This Controller for ...
 * @package     Codeigniter
 * @category    Controller CI
 * @author      Esau Batkunda <Maniklusi31@gmail.com>
 * @link        https://github.com/chaubatkunda
 * @param       ...
 * @return      ...
 */

class Auth extends CI_Controller
{
	public function index()
	{
		//! Login
		is_login();
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$user_login = $this->user->getUserLogin($username);

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/login');
		} else {
			if (isset($user_login)) {
				if ($user_login['aktif'] == 1) {
					if (password_verify($password, $user_login['password'])) {
						$data = [
							'id'        => $user_login['id'],
							'username'  => $user_login['username'],
							'level'     => $user_login['level']
						];
						$this->session->set_userdata($data);
						if ($user_login['level'] == 1) {
							redirect('dashboard');
						} else {
							redirect('user');
						}
					} else {
						$this->session->set_flashdata('login', '<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Warning!</strong> Password Salah
                        </div>');
						redirect('auth');
					}
				} else {
					$this->session->set_flashdata('login', '<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> Akun Tidak Aktif
                    </div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('login', '<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> Username Salah
                </div>');
				redirect('auth');
			}
		}
	}
	public function daftar()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|alpha_numeric|min_length[3]|matches[password1]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|alpha_numeric|min_length[3]|matches[password]');
		$this->db->select_max('id');
		$queryUser = $this->db->get('t_user')->row_array();
		$genIduser = $queryUser['id'] + 1;

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/daftar');
		} else {
			$dataUser = [
				'id' => $genIduser,
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'level' => 3,
				'aktif' => 1,
				'foto' => 'default.png'
			];
			$this->db->insert('t_user', $dataUser);
			$dataMember = [
				'id_member' => $this->fungsi->geneRateIdMember(),
				'id_user' => $genIduser
			];
			$this->db->insert('t_member', $dataMember);
			$this->session->set_flashdata('login', '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Selamat!</strong> Anda Berhasil Mendaftar, Silahkan Login
                </div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->set_flashdata('login', '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Berhasil</strong> Logout
                </div>');
		redirect('/');
	}
	public function blocked()
	{
		$this->load->view('404');
	}
}

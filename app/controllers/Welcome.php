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

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}
}

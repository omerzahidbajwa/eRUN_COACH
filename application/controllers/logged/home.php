<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('basic/header');
		$this->load->view('logged/nav_menu_logged');
		$this->load->view('logged/home');
		$this->load->view('basic/footer');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
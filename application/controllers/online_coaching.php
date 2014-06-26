<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Online_coaching extends CI_Controller {
	public function index()
	{
		$this->load->view('basic/header');
		$this->load->view('basic/nav_menu');
		$this->load->view('basic/online_coaching');
		$this->load->view('basic/footer');
	}

}


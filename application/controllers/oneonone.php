<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oneonone extends CI_Controller {

	public function index()
	{
		$this->load->view('basic/header');
		$this->load->view('basic/nav_menu');
		$this->load->view('basic/oneonone');
		$this->load->view('basic/footer');
	}
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemap extends CI_Controller {
	public function index()
	{
		$this->load->view('basic/header');
		$this->load->view('basic/nav_menu');
		$this->load->view('basic/site-map');
		$this->load->view('basic/footer');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends CI_Controller {

	 public function __construct()
 	{
  		parent::__construct();
 	}

	public function index()
	{
		$this->load->view('basic/forum');
	}
	public function save_entry()
	{
		sleep(2);
		$this->load->model('forum_model');
		$result = $this->forum_model->register_forum_details();
		$this->load->library('../controllers/home');
		$this->home->index();
	}

}

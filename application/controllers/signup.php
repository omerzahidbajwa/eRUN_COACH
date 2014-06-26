<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {
	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('signup/signup',$data);
	}
	public function already_exists($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('signup/already_exists',$data);
	}
	public function login(){
		// Load the model
		$this->load->model('login_model');
		// Validate the user can login
		$result = $this->login_model->validate();
		// Now we verify the result
		if(! $result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index($msg);
		}else{
			// If user did validate, 
			// Send them to members area
			echo "logged in";
			redirect('logged/home','refresh');
		}		
	}
	public function do_logout(){
		$this->session->sess_destroy();
		redirect('','refresh');
	}
	public function register()
	{
		$this->load->model('register_model');
		$result = $this->register_model->register_user();

		if($result == 'a')
		{
			$msg = '<font style=bold color=red>Username already exists.</font><br />';
			$this->already_exists($msg);
		}
		else if($result == 'b')
		{
			$msg = '<font style=bold color=red>Email already exists.</font><br />';
			$this->already_exists($msg);
		}
		else
		{
			//$this->format_email($result,'txt');
			//$msg = 'registered';
			$username=$result['username'];

			$this->load->library('../controllers/home');
			$this->home->index();
			
		}
	}
}

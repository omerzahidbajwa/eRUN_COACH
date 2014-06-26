<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Login_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function validate(){
		// grab user input
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));
		
		// Prep the query
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		//$this->db->where('validate',1);
		
		// Run the query
		$query = $this->db->get('users');
		//echo $query[thumbnail']
		// Let's check if there are any results
		if($query->num_rows == 1)
		{
			
			// If there is a user, then create session data
			$row = $query->row();
			$data = array(
					'userid' => $row->userid,
					'username' => $row->username,
					'email' => $row->email,
					'validated' => true
					);
		/*	$this->db->where('UserId', $row->userid);
			$pict=$this->db->get('useradditionalinfo');

			$row=$pict->row();
			$data['thumbnail']=$row->thumbnail; 
			//echo $data['thumbnail'];
			*/
			$this->session->set_userdata($data);
			return true;
		}
		// If the previous process did not validate
		// then return false.
		return false;
	}
}
?>
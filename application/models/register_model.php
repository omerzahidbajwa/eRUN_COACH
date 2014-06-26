<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Register_model extends CI_Model {
		
	    function register_user()
	  	{


	    	$data['username'] = $this->security->xss_clean($this->input->post('usernamesignup'));
	    	$data['email'] = $this->security->xss_clean($this->input->post('emailsignup'));
			$data['password'] = $this->security->xss_clean($this->input->post('passwordsignup'));

			$this->db->select('username');
			$this->db->where('username',$data['username']);
    		$query = $this->db->get('users');


			if($query->num_rows() > 0)	//if username already exists
			{
				return 'a';
			}

			$this->db->select('email');
			$this->db->where('email',$data['email']);
    		$query = $this->db->get('users');


    		if($query->num_rows() > 0)	//if email already exists
			{
				return 'b';
			}	
			else
			{
			$this->db->insert('users', $data);
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('username', $data['username']);
			$query = $this->db->get();
			$row = $query->row_array();

			$userid = $row['userid'];

			$key = $data['username'] . date('mY');
			$key = md5($key);
			$email=$data['email'];
			$username = $data['username'];
			//$confirm = mysql_query("INSERT INTO `confirm` VALUES(NULL,'$userid','$key','$email')"); 
			$data1 = array(
   			'userid' =>  $userid, 
   			'key' => $key ,
   			'email' => $email
			);
			$confirm=$this->db->insert('confirm', $data1); 

			if($confirm){
				$info ['username'] = $username;  
    			$info ['key'] = $key;
    			$info ['value'] = true;
    			$info ['email'] = $email;
    			return $info;
    			
			}  
      
				
			

			return true;
	        }
	    }

	     function register_user_details()
	    {
	    	$username = $this->security->xss_clean($this->input->post('username'));
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('username',$username);
    		$query = $this->db->get();
    		$row = $query->row_array();

			$data['UserId']= $row['userid'];
			$data['Country'] = $this->security->xss_clean($this->input->post('countryCode'));
			$data['PostalCode'] = $this->security->xss_clean($this->input->post('postalCode'));
	    	$data['JTitle'] = $this->security->xss_clean($this->input->post('workCompanyTitle'));
			$data['SelfEmp'] = $this->security->xss_clean($this->input->post('selfEmployed'));
			$data['Company'] = $this->security->xss_clean($this->input->post('companyName'));
			$data['Industry'] = $this->security->xss_clean($this->input->post('industryChooser'));
			$data['TypeId'] = $this->security->xss_clean($this->input->post('status-chooser'));
			$this->db->insert('useradditionalinfo', $data);
			
			$result['username']=$username;
			$result['value']=true;
			return $result;
	    }

	   
	    function register_user_details_image($path = null,$path_thumb=null)
	    {
	    	$username = $this->security->xss_clean($this->input->post('username'));
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('username',$username);
    		$query = $this->db->get();
    		$row = $query->row_array();

			$data['UserId']= $row['userid'];

			$image = $this->security->xss_clean($this->input->post('file'));
			$path= "'" . $path . "'";
			$path_thumb= "'" . $path_thumb . "'";
			if($query->num_rows() == 1)
	    	{
	    		$this->db->get('useradditionalinfo');
	    		$this->db->set('Picture', $path, False);
	    		$this->db->set('thumbnail',$path_thumb, False);
	    		$this->db->where('UserId', $data['UserId']);
    			$this->db->update('useradditionalinfo');
    			return true;
	    	}
	    	else
	    		return false;
			
	    }

	    function verify($key)
	    {
	
	    	$this->db->select('*');
	    	$this->db->from('confirm');
	 		$this->db->where('key', $key);
	 		$query = $this->db->get();

	 		$row = $query->row_array();
	 		$username = $row['email'];

	 		
	 		//echo $query->result();

	    	if($query->num_rows() == 1)
	    	{
	    		$this->db->get('users');
	    		$this->db->set('validate', '1', False);
	    		$this->db->where('username', $username);
    			$this->db->update('users');
    			return true;
	    	}
	    	else
	    		return false;
	    	

	    }
	}

?>

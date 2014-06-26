<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Forum_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
function register_forum_details()
	{
	    	
			$data['firstName'] = $this->security->xss_clean($this->input->post('q1'));
			$data['lastName'] = $this->security->xss_clean($this->input->post('q2'));
			$data['address'] = $this->security->xss_clean($this->input->post('q3'));
	    	$data['postalCode'] = $this->security->xss_clean($this->input->post('q4'));
			$data['homePhone'] = $this->security->xss_clean($this->input->post('q5'));
			$data['mobilePhone'] = $this->security->xss_clean($this->input->post('q6'));
			$data['email'] = $this->security->xss_clean($this->input->post('q7'));
			$data['emergencyContactNo'] = $this->security->xss_clean($this->input->post('q8'));
			$data['theirNo'] = $this->security->xss_clean($this->input->post('q9'));
			$data['mostImportantGoal'] = $this->security->xss_clean($this->input->post('q10'));
			$data['shortTermGoal'] = $this->security->xss_clean($this->input->post('q11'));
			$data['mediumTermGoal'] = $this->security->xss_clean($this->input->post('q12'));
			$data['longTermGoal'] = $this->security->xss_clean($this->input->post('q13'));
			$data['runningFor'] = $this->security->xss_clean($this->input->post('q14'));
			$data['runningAchievements'] = $this->security->xss_clean($this->input->post('q15'));
			$data['currentActivityProgram'] = $this->security->xss_clean($this->input->post('q16'));
			$data['daysAWeekForGoal'] = $this->security->xss_clean($this->input->post('q17'));
			$data['hoursPerDayForGoal'] = $this->security->xss_clean($this->input->post('q18'));
			$data['daysForTraining'] = $this->security->xss_clean($this->input->post('q19'));
			$data['timeOfDayForTraining'] = $this->security->xss_clean($this->input->post('q20'));
			$data['achieveGoalIfContinueCurrent'] = $this->security->xss_clean($this->input->post('q21'));
			$data['changeOrGiveUp'] = $this->security->xss_clean($this->input->post('q22'));
			$data['mainFactorsGettingInWay'] = $this->security->xss_clean($this->input->post('q23'));
			$data['whatWouldYouLikeMeToDo'] = $this->security->xss_clean($this->input->post('q24'));
			$this->db->insert('foruminfo', $data);
			
			$result['value']=true;
			return $result;
	}
}
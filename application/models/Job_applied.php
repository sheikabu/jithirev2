<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_applied extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function insert_job_applied($user_details){		
		$this->db->insert('jh_job_applied',$user_details);	   
		return TRUE;
	}

}

?>
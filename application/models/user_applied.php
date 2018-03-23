<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_applied extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	/*public function job_history(){ //comments
	
	$this->db->select('jh_job_apply.*,jh_company_details.*');
	  $this->db->from('jh_job_apply');
	   $this->db->join('jh_company_details', 'jh_job_apply.company_id = jh_company_details.id');
	  $this->db->where('jh_registration.id',$candidate_id);

	  
	  $query=$this->db->get();
	  $results = $query->result_array();
	  return $results;
	}*/

    //suganya
	public function user_applied($Job_id){ //comments
	
	  $this->db->select('jh_job_applied.*, jh_user_profile.*');
	  $this->db->from('jh_job_applied');	  
	  $this->db->join('jh_user_profile', ' jh_user_profile.id = jh_job_applied.applied_job_id');
	
	   $this->db->where('jh_user_profile.id',$user_id);
	  
	  $query=$this->db->get();
	  $this->db->last_query();
	  $results = $query->result_array();
	  return $results;
	}


}
?>
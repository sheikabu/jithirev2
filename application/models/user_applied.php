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
	public function user_applied(){ //comments
	  $this->db->select(' jh_user_profile.*, jh_job_applied.*, jh_company_details.*');
	  $this->db->from('jh_job_applied');	  
	  $this->db->join(' jh_user_profile', ' jh_user_profile.id = jh_job_applied.applied_job_id', 'left');
	  $this->db->join('jh_company_details', ' jh_user_profile.id = jh_company_details.id','left');
	  $this->db->order_by("jh_job_applied.aid","desc");
	  
	  $query=$this->db->get();
	  $results = $query->result_array();
	  return $results;
	}


}
?>
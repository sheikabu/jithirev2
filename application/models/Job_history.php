<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_history extends CI_Model{
	
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
	public function job_history(){ //comments
	  $this->db->select('jh_job_posting.*, jh_job_applied.*, jh_company_details.*');
	  $this->db->from('jh_job_applied');	  
	  $this->db->join('jh_job_posting', 'jh_job_posting.job_id = jh_job_applied.applied_job_id', 'left');
	  $this->db->join('jh_company_details', 'jh_job_posting.company_id = jh_company_details.id','left');
	  $this->db->order_by("jh_job_applied.aid","desc");
	  $this->db->limit(1,0);
	  $query=$this->db->get();
	  $results = $query->result_array();
	  return $results;
	}

	public function get_candidate_status(){ 
		$this->db->select('*');
		$this->db->from('jh_candidate_status');
		$query=$this->db->get();
		$results = $query->result_array();
		return $results;
	}

	public function check_candidate_status($uid, $job_id){ 
		$this->db->select('*');
		$this->db->from('jh_job_applied');
		$this->db->where('user_id',$uid);
		$this->db->where('applied_job_id',$job_id);
		$this->db->order_by("aid","desc");
		$query=$this->db->get();
		$results = $query->result_array();
		return $results;
	}


}
?>
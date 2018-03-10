<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_apply extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function job_apply(){ //comments
	
	$this->db->select('jh_job_apply.*,jh_company_details.*');
	  $this->db->from('jh_job_apply');
	   $this->db->join('jh_company_details', 'jh_job_apply.company_id = jh_company_details.id');
	  $this->db->where('jh_registration.id',$candidate_id);

	  
	  $query=$this->db->get();
	  $results = $query->result_array();
	  return $results;
	}


}
?>
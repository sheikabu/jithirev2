<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_browse extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function job_list(){ //comments
	
	$this->db->select('jh_job_posting.*,jh_company_details.*');
	  $this->db->from('jh_job_posting');
	   $this->db->join('jh_company_details', 'jh_job_posting.company_id = jh_company_details.id');
	  //$this->db->where('jh_registration.id',$candidate_id);

	  
	  $query=$this->db->get();
	  $results = $query->result_array();
	  return $results;
	}


}
?>
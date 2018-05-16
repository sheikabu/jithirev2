<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_post extends CI_Model{ 
	
	public function __construct()
	{
		parent::__construct();
	}

	public function  get_user_profile_id($company_id){ //comments
		$this->db->select('*');
	  	 $this->db->from('jh_company_details');
		 $this->db->where('id',$company_id);
		 
	  if($query=$this->db->get())
	  {
	      return $query->row_array();
	     
	  }
	  else{
	    return false;
	  }
	}

	public function  insert_job_posting($user_details){ //comments
		    $this->db->insert('jh_job_posting',$user_details);
			return TRUE;
	}

	public function posted_job_list($cid){ //comments
	
	  $this->db->select('*');
	  $this->db->from('jh_job_posting');
	  $this->db->where('company_id',$cid);
	  $query=$this->db->get();
	   if($query->num_rows()>0){ 
			$this->db->where('company_id',$cid);
			$this->db->update('jh_job_posting', $user_details);
		    return true;
		  }else{
		    $this->db->insert('jh_job_posting',$user_details);
	  return $results;
	}
	}
	public function  update_job_posting($user_details, $uid){ //comments		    
		    $this->db->where('job_id',$uid);
		    $this->db->update('jh_job_posting',$user_details);
		    //echo $this->db->last_query(); exit;
			return TRUE;
	}

}
?>
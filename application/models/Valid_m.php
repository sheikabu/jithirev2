<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Valid_m extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function login_user($email,$password){

	  $this->db->select('*');
	  $this->db->from('jh_registration');
	  $this->db->where('email',$email);
	  $this->db->where('password',$password);

	  if($query=$this->db->get())
	  {
	      return $query->row_array();
	     
	  }
	  else{
	    return false;
	  }
	}

	public function company_login_user($email,$password){

	  $this->db->select('*');
	  $this->db->from('jh_company_details');
	  $this->db->where('email',$email);
	  $this->db->where('password',$password);

	  if($query=$this->db->get())
	  {
	      return $query->row_array();
	     
	  }
	  else{
	    return false;
	  }
	}
	public function email_check($email){

	  $this->db->select('*');
	  $this->db->from('jh_registration');
	  $this->db->where('email',$email);
	  $query=$this->db->get();

	  if($query->num_rows()>0){
	    return false;
	  }else{
	    return true;
	  }

	}

	public function forgot_email_check($email){

	  $this->db->select('*');
	  $this->db->from('jh_registration');
	  $this->db->where('email',$email);
	  $query=$this->db->get();

	  if($query->num_rows()>0){
	    return true;
	  }else{
	    return false;
	  }

	}
	public function forgot_password_check($password,$email_det){
		$field = array(
		'password'=>$this->input->post('$password'));
		$this->db->where('email', $email_det);
		$this->db->update('jh_registration', $field);
		//echo $this->db->last_query();extit;
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	public function  register_insert($register_details){ //comments
			
		$this->db->insert('jh_registration',$register_details);		
		return true;		
	}
	
	public function  company_registration_insert($company_details){ //comments

		$this->db->insert('jh_company_details',$company_details);
		return true;
	}

	public function company_name_check($cName){

	  $this->db->select('*');
	  $this->db->from('jh_company_details');
	  $this->db->where('company_name',$cName);
	  $query=$this->db->get();

	  if($query->num_rows()>0){
	    return false;
	  }else{
	    return true;
	  }

	}
	
	public function job_list(){ //comments
	
	  $this->db->select('jh_job_posting.*,jh_company_details.*, jh_job_applied.*');
	  $this->db->from('jh_job_posting');
	  $this->db->join('jh_company_details', 'jh_job_posting.company_id = jh_company_details.id', 'left');
	  $this->db->join('jh_job_applied', 'jh_job_applied.applied_job_id = jh_job_posting.job_id', 'left');
	  $this->db->order_by("jh_job_posting.job_id","desc");
	  //$this->db->where('jh_registration.id',$candidate_id);

	  
	  $query=$this->db->get();
	  $results = $query->result_array();
	  return $results;
	}
	
	public function posted_job_list($cid){
	  $this->db->select('*');
	  $this->db->from('jh_job_posting');
	  $this->db->where('company_id',$cid);
	  $this->db->order_by("job_id","desc");
	  $query=$this->db->get();
	  $results = $query->result_array();
	  return $results;
	}

	public function update_posted_job($uid){
	  $this->db->select('*');
	  $this->db->from('jh_job_posting');
	  $this->db->where('job_id',$uid);
	  $query=$this->db->get();
	  //$this->db->last_query();
	  $results = $query->result_array();
	  return $results;
	}


	public function  insert_job_posting($user_details){ //comments 
		
		    $this->db->insert('jh_job_posting',$user_details);
			return TRUE;
	}

	public function get_skills(){
	  $this->db->select('*');
	  $this->db->from('jh_skills');	  	  
	  $query=$this->db->get();
	  $this->db->last_query();
	  $results = $query->result_array();
	  return $results;
	}
	public function get_domains(){
	  $this->db->select('*');
	  $this->db->from('jh_domains');	  	  
	  $query=$this->db->get();
	  $this->db->last_query();
	  $results = $query->result_array();
	  return $results;
	}
	public function get_cities(){
	  $this->db->select('*');
	  $this->db->from('jh_cities');	  	  
	  $query=$this->db->get();
	  $this->db->last_query();
	  $results = $query->result_array();
	  return $results;
	}
	public function get_countries(){
	  $this->db->select('*');
	  $this->db->from('jh_countries');	  	  
	  $query=$this->db->get();
	  $this->db->last_query();
	  $results = $query->result_array();
	  return $results;
	}
	
	
}
?>
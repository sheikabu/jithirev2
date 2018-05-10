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
	  $this->db->where('status','active');

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
	  $this->db->where('status','active');

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

	public function check_user_pass($email){

	  $this->db->select('*');
	  $this->db->from('jh_registration');
	  $this->db->where('email',$email);	  
	  $query=$this->db->get();
	  $results = $query->result_array();
	  return $results;

	}
	public function check_company_pass($email){

	  $this->db->select('*');
	  $this->db->from('jh_company_details');
	  $this->db->where('email',$email);	  
	  $query=$this->db->get();
	  $results = $query->result_array();
	  return $results;

	}
	public function forget_password_update_user($password,$user_id){
		$field = array('password'=>$password);
		$this->db->where('id', $user_id);
		$this->db->update('jh_registration', $field);
		//echo $this->db->last_query();extit;
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function forget_password_update_company($password,$comp_id){
		$field = array('password'=>$password);
		$this->db->where('id', $comp_id);
		$this->db->update('jh_company_details', $field);
		//echo $this->db->last_query();extit;
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	public function  register_insert($register_details){ //comments
		$this->db->insert('jh_registration',$register_details);		
		$insert_id = $this->db->insert_id();
   		return  $insert_id;	
	}
	
	public function  company_registration_insert($company_details){ //comments
		$this->db->insert('jh_company_details',$company_details);
		$insert_id = $this->db->insert_id();
   		return  $insert_id;	
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

	public function matching_job_list(){ //comments
		
	  $this->session->userdata("id");

	  $this->db->select('jh_job_posting.*,jh_company_details.*, GROUP_CONCAT(`jh_job_posting`.Job_code) as Job_code');
	  $this->db->from('jh_job_posting');
	  $this->db->join('jh_company_details', 'jh_job_posting.company_id = jh_company_details.id', 'left');
	  $this->db->join('jh_job_applied', 'jh_job_applied.applied_job_id = jh_job_posting.job_id', 'right');
	  $this->db->order_by("jh_job_posting.job_id","desc");
	   $this->db->group_by("jh_job_posting.job_id");
	  
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
	  //echo $this->db->last_query(); exit;
	  $results = $query->result_array();
	  return $results;
	}
	public function candidate_job_list($uid){
	  $this->db->select('*');
	  $this->db->from(' jh_user_profile');
	  $query=$this->db->get();
	  //echo $this->db->last_query(); exit;
	  $results = $query->result_array();
	  return $results;
	} 

	public function single_posted_job($jid){
	  $this->db->select('*');
	  $this->db->from('jh_job_posting');
	  $this->db->where('job_id',$jid);
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
	    $insert_id = $this->db->insert_id();



		/*find candidate logic here*/
		/*if($insert_id!=''){

			echo '<pre>';
			var_dump($user_details);
			echo $user_details['job_role'];
			$primary_skill = json_decode($user_details['primary_skill']);

			foreach ($primary_skill as $key => $value)
				echo $value;

			 $this->db->select('*');
			 $this->db->from('jh_user_profile');	

			 //$this->db->like('primary_skill', $key, 'before');
			 $this->db->where('primary_skill','{"'.$key.'":"Basic"}'); 
			 $this->db->or_where('primary_skill','{"'.$key.'":"Fresher"}'); 
			 $this->db->or_where('primary_skill','{"'.$key.'":"Intermediate"}'); 
			 $this->db->or_where('primary_skill','{"'.$key.'":"Advanced"}'); 
		
			  $query=$this->db->get();
			  $this->db->last_query();
			  $results = $query->result_array();
			  //print_r($results);
	  		  //return $results;*/
		//}
		//exit;
		/*END*/

	    return $insert_id;
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
	public function get_job_type(){
	  $this->db->select('*');
	  $this->db->from('jh_job_type');	  	  
	  $query=$this->db->get();
	  $this->db->last_query();
	  $results = $query->result_array();
	  return $results;
	}
	public function get_gender(){
	  $this->db->select('*');
	  $this->db->from('jh_gender');	  	  
	  $query=$this->db->get();
	  $this->db->last_query();
	  $results = $query->result_array();
	  return $results;
	}
	public function get_total_it_experience(){
	  $this->db->select('*');
	  $this->db->from('jh_total_it_experience');	 
	  $this->db->order_by("total_it_experience_id","asc"); 	  
	  $query=$this->db->get();
	  $results = $query->result_array();
	  return $results;
	}
	public function insert_offer_letter($user_details){	
		$this->db->insert('jh_offer_letter',$user_details);		
		$insert_id = $this->db->insert_id();
   		return  $insert_id;	
	}
	public function view_letter($compid){


	  $this->db->select('jh_job_posting.*, jh_offer_letter.*, jh_user_profile.*');
	  $this->db->from('jh_job_posting');	  
	  $this->db->join('jh_offer_letter', 'jh_job_posting.job_id = jh_offer_letter.posted_job_id','left');
	  $this->db->join('jh_user_profile', 'jh_user_profile.user_id = jh_offer_letter.user_id','left');
	  //$this->db->order_by("jh_offer_letter.offer_id","desc");
	  $this->db->where('jh_offer_letter.company_id',$compid);
	  $query=$this->db->get();
	  //$this->db->last_query();
	  $results = $query->result_array();
	  return $results;
	}

	public function count_applied($jid){
	  $this->db->select('count(*)');
	  $this->db->from('jh_job_applied');
	  $this->db->group_by(array("user_id", "applied_job_id")); 	
	  $this->db->where('applied_job_id 	',$jid); 
	      
	  $query=$this->db->get();
	  $this->db->last_query();
	  $count = $query->num_rows();
	  return $count;
	}

	public function verify_email($user_id){
		$field = array('status'=>'active');
		$this->db->where('id', $user_id);
		$this->db->update('jh_registration', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function company_verify($comp_id){
		$field = array('status'=>'active');
		$this->db->where('id', $comp_id);
		$this->db->update('jh_company_details', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function candidate_list(){
	  $this->db->select('*');
	  $this->db->from(' jh_user_profile');
	  $query=$this->db->get();
	  $results = $query->result_array();
	  return $results;
	} 

	public function select_shortlisted_candidates($candidate_id){
	  $this->db->select('*');
	  $this->db->from(' jh_user_profile');
	  $this->db->where('id 	',$candidate_id); 
	  $query=$this->db->get();
	  $results = $query->result_array();
	  return $results;
	} 
	public function print_offer_letter($offer_id){
	  $this->db->select('*');
	  $this->db->from('jh_offer_letter');
	  $this->db->where('offer_id',$offer_id); 
	  //$this->db->last_query();
	  $query=$this->db->get();
	  $results = $query->result_array();
	  
	  return $results;
	} 
	
}
?>
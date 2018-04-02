<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_offer_letter extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function insert_offer_letter($user_details){		
		$this->db->insert('jh_offer_letter',$user_details);	   
		return TRUE;
	}

}

?>
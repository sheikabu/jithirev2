<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class location_model extends CI_Model{
	
	public function getlDetails(){	
	  $this->db->select('*');
	  $this->db->from('jh_location');
	
	  $query=$this->db->get();
	  //echo $this->db->last_query(); exit;
	  $results = $query->result();
	  return $results;
	}
   
 function deletelocation($id)
   {

  $this->load->database();
  $this->db->where('id',$id);
  $this->db->delete(jh_location);
   
  return $this->db->affected_rows();
  
    
   }
    public function getelocation($id)

         {
             $this->db->where('id', $id);
             $query = $this->db->get('jh_location');
             return $query->row();
         }
   public function updatelocation($id,$location) {
	  
		
		$this->db->set('location', ''.$location.'');  //Set the column name and which value to set..

		$this->db->where('id', $id); //set column_name and value in which row need to update

		$this->db->update('jh_location');

		return true;
   }
 public function insertlocation($id,$location,$now) { echo $row;
	  
	  $data = array( 
        'location'	=>  $location,
		 'date_time'	=>  $now,
        
    );
	$this->db->insert('jh_location', $data);

	return true;

		
   }
}



?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>
   
    <!-- job applied history dashboard -->
    <section id="history_jobs">
      <div class="container">
    	<div class="row">
    		<div class="col-md-12 job-history">
    		<table class="table">
		  <thead>
	    <tr>
	      <th>Job Code</th>
	      <th>Candidate name</th>
	      <th>Candidate email</th>
		 <th>Contact Number</th>
		  <th>Applied Date</th>
		  <th>candidate Status</th>
		  <th>View Profile</th>
		  
		  
	    </tr>
		  </thead>
		  <tbody>
		    <?php foreach($user_applied as $key=>$values) { ?>
	    <tr>
	      <td><?php echo $values['Job_code'];?></td>
	      <td><?php echo $values['name']; ?></td>
	      <td><?php echo $values['email']; ?></td>
	      <td> <?php echo $values['mobile_number']; ?> </td>
		  <td><?php echo $values['applied_date']; ?></td>
		  <td><?php echo $values['job_status']; ?></td>
		  <td><a href="<?php echo site_url() ?>user/view_profile/<?php echo $values['user_id']; ?>/<?php echo $values['job_id']; ?>/job" class="link">View Profile</a></td>

		   <td><a href="<?php echo site_url() ?>user/create_offer_letter/<?php echo $values['user_id']; ?>/<?php echo $values['job_id']; ?>/<?php echo $this->session->userdata('id');  ?>" class="link">Offer letter</a></td>
		    
			  
		    </tr>
		    <?php } ?>			
		  </tbody>
		</table>
		    	
	    	</div>
			 
    	</div>
    	
    	  
    
      </div>
	 
    </section>



       
 
     


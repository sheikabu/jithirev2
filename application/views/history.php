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
      <?php $count = count($job_history); 
      		if($count!='') {
      ?>
    	<div class="row">
    		<div class="col-md-12 job-history">
    		<table class="table">
		  <thead>
		    <tr>
		      <th>Job Code</th>
		      <th>Job Role</th>
		      <th>Company</th>
			  <th>Last updated Date</th>
			  <th>Status</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php foreach($job_history as $key=>$values) { ?>
		    <tr>
		      <td><?php echo $values['Job_code']; ?></td>
		      <td><?php echo $values['job_role']; ?></td>
		      <td><?php echo $values['company_name']; ?></td>
		      <td> <?php echo $values['applied_date']; ?> </td>
		      
		      <td class="interested-status"><?php echo $values['job_status']; ?></td>
		      
		    </tr>
		    <?php } ?>			
		  </tbody>
		</table>
	    	</div>
    	</div>
    	
    	<?php } else {

    		echo '<center>No Job History</center>';
    	} ?>
      </div>
    </section>



       
 
     


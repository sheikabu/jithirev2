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
		      <th>Candidate email<th><th>
			 <th> Candidate No<th>
			  <th>Applied Date</th>
			  <th>Profile view</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php foreach($user_applied as $key=>$values) { ?>
		    <tr>
		      <td><?php echo $values['Job_code']; ?></td>
		      <td><?php echo $get_candidate_info['name']; ?></td>
		      <td><?php echo $get_candidate_info['email']; ?></td>
		      <td> <?php echo $get_candidate_info['mobile_number']; ?> </td>
			   <td><?php echo $get_candidate_info['applied_date']; ?></td>
		      <td> <?php echo $get_candidate_info['mobile_number']; ?> </td>
		     
			  
		    </tr>
		    <?php } ?>			
		  </tbody>
		</table>
    			<!-- <div class="row">
		    		<div class="col-md-4">
		    			<div class="col-xs-12">
				                  <label class="col-md-4">Company Name: </label>
				                  <span class="col-md-8">Jithhire</span>
				         </div>
				         <div class="col-xs-12">
				                  <label class="col-md-4">Description: </label>
				                  <span class="col-md-8">Company description here..</span>
				</div>
		    			
		    		</div>
		    		<div class="col-md-4">
		    			<div class="col-xs-12">
				                  <label class="col-md-4">Location: </label>
				                  <span class="col-md-8">Thiruvananthapuram</span>
				         </div>
		    			
		    		</div>
		    		<div class="col-md-4">
		    			
		    			<div class="col-xs-12">
				                  <label class="col-md-4">Status: </label>
				                  <span class="col-md-8 status-approved">Approved</span>
				        </div>
		    		</div>
					 <tr>
		      <th scope="row">jithirev</th>
		      <td>company_Description</td>
		      <td>trichy</td>
		      <td class = "select">
             <select>        
                <option value="approved" class="status approved">approved</option>
                <option value="Rejected" class="status rejected">Rejected</option>
                <option value="Waiting" class="status waiting">Waiting</option>
               
            </select>
            <td ALIGN="center"></td>
            </td>
		    </tr>
		    	</div> -->
		    	
	    	</div>
			 
    	</div>
    	
    	  
    
      </div>
	 
    </section>



       
 
     

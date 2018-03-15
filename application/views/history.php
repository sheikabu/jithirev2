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
		      <th>USER ID</th>
		      <th>JOB ID</th>
		      <th>COMPANY ID</th>
		      <th>STATUS</th>
			  <th>APPLIED DATE</th>
		    </tr>
		  </thead>
		  <tbody>
		
		    <tr>
		      <th scope="row"><?php echo $this->session->userdata('id'); ?></th>
		      <td><?php echo $values['job_id']; ?></td>
		      <td><?php echo $values['comp_id']; ?></td>
		      <td> <?php echo $values['job_status']; ?> </td>
			  <td> <?php echo $values['applied_date']; ?> </td>
		    </tr>
		 
			
			<div class="form-group">
				
				<input type="hidden" name="company_id" class="form-control" value='<?php echo($this->session->userdata("id")) ;  ?>' />
			</div>
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



       
 
     


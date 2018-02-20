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
    <section id="">
      <div class="container">
      <div class="row">
          <div class="col-md-12">
            <h2 class="section-heading text-uppercase">History</h2>
          </div>
        </div>
    	<div class="row">
    		<div class="col-md-12 job-history">
    		
    		<table class="table">
		  <thead>
		    <tr>
		      <th>Company Name</th>
		      <th>Description</th>
		      <th>Location</th>
		      <th>Status</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">Jithhire</th>
		      <td>Company description here..</td>
		      <td>Thiruvananthapuram</td>
		      <td><span class="status approved">Approved</span></td>
		    </tr>
		   <tr>
		      <th scope="row">Wipro</th>
		      <td>Company description here..</td>
		      <td>Bangalore</td>
		      <td><span class="status rejected">Rejected</span></td>
		    </tr>
		    <tr>
		      <th scope="row">Jithhire</th>
		      <td>Company description here..</td>
		      <td>Thiruvananthapuram</td>
		      <td><span class="status waiting">Waiting</span></td>
		    </tr>
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
		    	</div> -->
		    	
	    	</div>
    	</div>
    	
    	
     
      </div>
    </section>



       
 
     


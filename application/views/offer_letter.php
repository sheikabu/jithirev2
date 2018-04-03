<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>

<section id="offer_letter">
	<div class="container">
	<div class="alert-success text-center"><?php if(!empty($message)) { echo $message; } ?></div>
			<div class="col-md-12">
				<div id="message"></div>
			</div>
			<a href="#">View Offers</a>
	<?php echo form_open('user/offer_letter');?>
		<div class="row">
			 <div class="col-md-6"> 
	        	<div class="form-group">
	               <label>Company Name</label>
	                <input name="company_name" class="form-control" placeholder="Company Name*" type="text" value="" required>
	            </div>   
	            
				<div class="form-group">
	               <label>Joining Location</label>
	                <input name="joining_location" class="form-control" placeholder="Joining Location*" type="text" value="" required>
	            </div>
	            
	            <div class="form-group">
					<label>Start Date</label>
					  <input name="start_date" class="form-control" placeholder="Start Date*" type="date" value="" required>
				</div>
			</div>
			<div class="col-md-6"> 
	        	<div class="form-group">
	            	<label>Duration</label>
						<input name="duration" class="form-control" placeholder="Duration" type="text" value="" required>
				</div>
			 	<div class="form-group">
	            	<label>Role</label>
						<input name="role" class="form-control" placeholder="Role" type="text" value="" required>
				</div>
				<div class="form-group">
	            	<label>Annual CTC</label>
						<input name="annual_ctc" class="form-control" placeholder="Annual CTC" type="text" value="" required>
				</div>
			</div>
		</div>	
		<input name="posted_job_id" value="1" class="form-control" placeholder="Annual CTC" type="text" value="" required>
		<input name="company_id" value="1" class="form-control" placeholder="Annual CTC" type="text" value="" required>
		<input name="user_id" value="1" class="form-control" placeholder="Annual CTC" type="text" value="" required>
		<div class="row">
            <div class="btn-form text-center mTop-20 col-md-12">
	            <input type="submit" class="btn mRight-10 mBot-10" name="cancel" value="Cancel">
	            <input type="submit" class="btn btn-fill mRight-10 mBot-10" name="save" value="Save">
	            <input type="submit" class="btn btn-fill mRight-10 mBot-10" name="send" value="Send">
            </div>
              
        </div>
	</div>
</section>

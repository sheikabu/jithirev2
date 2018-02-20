<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>
<br><br><br><br>

<div class="row">
	<div class="container matching_job_container">
	<h2 class="section-heading text-uppercase">Posted Jobs</h2>

		<div class="col-md-8">
		<div id="message"></div>
			
			<?php //echo form_open('post_job/insert_job_post');?>
			<?php foreach($job_list as $key=>$values) { ?>
				<div class="row">
				<div class="col-md-6"><span>Role:</span> <label><?php echo $values['role'];?></label></div>
				<div class="col-md-6"><span>Location:</span><label>
				<?php $locations= json_decode($values['preferred_location'], true);
						foreach($locations as $lkey => $lvalues) {
							echo $lvalues.',';
						} 
						?>
						</label>
				</div>
				</div>
				<div class="row">
				<div class="col-md-12"><label>Job Description:</label><p> <?php echo $values['job_description'];?></p></div>
				</div>
				<div class="row">
				<div class="col-md-6"><span>No of Positions:</span><label> <?php echo $values['no_positions'];?></label></div>
				<div class="col-md-3"><span>Max Salary:</sapn><label><?php echo $values['salary_lakhs'];?>Lakhs <?php echo $values['salary_thousands'];?> </label>Thousands </div>
				</div>
				<div class="row">
				<div class="col-md-6"><span>Skills: </span><label><?php $skills = json_decode($values['skills'], true);
						foreach($skills as $key => $values) {
							echo $key.',';
						} 
						?></label></div> 
				</div>
		   
			<?php echo '<br><hr>'; } ?> 
			
			<div class="form-group">
				
				<input type="hidden" name="company_id" class="form-control" value='<?php echo($this->session->userdata("id")) ;  ?>' />
			</div>
			
			<!--<button type="submit" class="btn btn-primary" >submit</button>-->
			
			</div>
		
	</div>

</div>




       
 
     


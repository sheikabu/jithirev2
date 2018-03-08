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
				<div class="col-md-6"><span>Job code:</span> <label><?php echo $values['Job_code'];?></label></div>
				<div class="col-md-6"><span>Role:</span> <label><?php echo $values['job_role'];?></label></div>
				<div class="col-md-6"><span>Location:</span><label>
				<?php $locations= json_decode($values['preferred_location'], true);
						foreach($locations as $lkey => $lvalues) {
							echo $lvalues.',';
						} 
						?>
						</label>
				</div>
				
				<div class="col-md-6"><span>Experience:</span><label><?php echo $values['min_exp'];?> - <?php echo $values['max_exp'];?> Years</label></div>
				
				</div>
				<div class="row">
				<div class="col-md-12"><label>Job Description:</label><p> <?php echo $values['job_description'];?></p></div>
				</div>
				<div class="row">
				<div class="col-md-6"><span>No of Positions:</span><label> <?php echo $values['no_positions'];?></label></div>
				<div class="col-md-6"><span>Duration:</span><label> <?php echo $values['duration'];?></label></div>
				<div class="col-md-6"><span>Max Salary:</span><label><?php echo $values['salary_lakhs'];?> Lakhs  </label></div>
				<div class="col-md-6"><span>Job Type:</span><label><?php echo $values['job_type'];?></label></div>
				</div>
				
				<div class="row">
				
				<div class="col-md-6"><span>Primary skills: </span><label>
				<?php $primary_skill =  json_decode($values['primary_skill']);
				foreach ($primary_skill as $pkey => $pvalue) {
					echo $pkey.' - '.$pvalue;
				}
			    ?></label></div>
				 
				<div class="col-md-6"><span>Skills: </span><label><?php  $skill1 = json_decode($values['skills']);
						foreach ($skill1 as $skey1 => $svalue1)	echo $skey1.' - '.$svalue1;
						?></label><br>
						<label><?php $skill2 = json_decode($values['skill1']);
						foreach ($skill2 as $skey2 => $svalue2)	echo $skey2.' - '.$svalue2;
						?></label><br>
						<label><?php $skill3 = json_decode($values['skill2']);
						foreach ($skill3 as $skey3 => $svalue3)	echo $skey3.' - '.$svalue3;
						?></label><br>
						<label><?php $skill4 = json_decode($values['skill3']);
						foreach ($skill4 as $skey4 => $svalue4)	echo $skey4.' - '.$svalue4;
						?></label><br>
						<label><?php $skill5 =  json_decode($values['skill4']);
						foreach ($skill5 as $skey5 => $svalue5)	echo $skey5.' - '.$svalue5;
						?></label>
						
						
						</div> 
				</div>
				 <div class="row">
              <div class="col-md-6">
                <span>Opening:</span><label><?php
                $open_timestamp = strtotime($values['open_date_time']);
                echo $opening_date = date('d-m-Y', $open_timestamp);  
                ?></label>
              </div>
              <div class="col-md-6">
                <span>Closing:</span><label>12/01/2018</label>
              </div>
            </div>
		   
			<?php echo '<br><hr>'; } ?> 
			
			<div class="form-group">
				
				<input type="hidden" name="company_id" class="form-control" value='<?php echo($this->session->userdata("id")) ;  ?>' />
			</div>
			
			<!--<button type="submit" class="btn btn-primary" >submit</button>-->
			
			</div>
		
	</div>

</div>




       
 
     


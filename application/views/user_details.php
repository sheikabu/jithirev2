<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>


    <!-- Candidate dashboard -->
    <section id="">
      <div class="container">
      <!-- browse job start-->
   
    <!-- browse job end-->
      <div class="dashboard-wrap">
        <div class="row">
         <?php if($this->session->userdata('role')=='company'){ ?>
         <div class="col-md-12">
         <button onclick="goBack()">Go Back</button>
         <?php echo form_open('user/update_candidate_status');?>
         <div class="row">
	        <div class="col-md-12">
	        	<div class="pull-right mLeft-5 ">
					<button type="submit" class="btn btn-fill pull-right mBot-10">update</button>
				</div>
	        	
		        <div class="pull-right"> 
			        <select name="candidate_status" required class="form-control">
			        <?php foreach ($get_candidate_status as $key => $value) { ?>
			            	        
				        <option  value="<?php echo $value['candidate_status'] ;?>" 
						<?php if($value['closed']=='Closed') { echo "disabled"; }
						if($value['candidate_status']==$check_candidate_status[0]['job_status']) { echo "selected"; } ?>  >
						<?php echo $value['candidate_status'] ;?></option>
						
				    <?php } ?>
			        </select> 
				</div>
				<input type="hidden" name="user_id" value="<?php echo $this->uri->segment(3); ?>">
				<input type="hidden" name="applied_job_id" value="<?php echo $this->uri->segment(4); ?>">
				<input type="hidden" name="comp_id" value="<?php echo $this->session->userdata('id'); ?>">
				
				<div class="pull-right">	
	         		<label class="mRight-5 mTop-5">Status</label>
	         	</div>
	        </div>
        </div>
         </form>

         <?php } ?>
         </div>

          <div class="col-md-12">
          		<?php 
          			 $link = $_SERVER['PHP_SELF'];
    				$link_array = explode('/',$link);
    				$message = end($link_array); 
    				if($message==1) {
    					echo '<div id="message">Infomraion Successfully updated</div>';
    				}
          		 ?>
            <!-- Full profile view -->

              <div id="full-profile-view">
              		
             		<div class="line2 mBot-10 col-md-12">
             			<h2 class="title mRight-20 "><?php 
		                   $primary_skill = json_decode($get_candidate_info['primary_skill'], true);
		                  foreach($primary_skill as $key => $value) {
			                  		foreach ($get_skills as $skey => $svalue) {
										if($svalue['skill_id']==$key) {
											echo $svalue['skills'];
									}
								}			                  		
		                  	}
			                ?></h2> <span class="col-md-8"><?php if($get_candidate_info['total_experience'] == '1') { echo 'Fresher';} else { echo $get_candidate_info['total_experience'].' years Experience'; } ?></span>
             		</div>
             
             		<div class="row text-right width-fluid">
             		
             			<div class="col-md-12">
             			<?php if($this->session->userdata('role')=='candidate') { ?>
	             			<a class="pull-right nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/update_profile"><i class="fa fa-edit" aria-hidden="true"></i></a>
	             		<?php } ?>
			        		<a class="pull-right  nav-link js-scroll-trigger" href="<?php echo base_url();?>upload/resumes/<?php echo $get_candidate_info['resume']; ?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
			        	</div>
		        	
             		</div>
	        	
	                     
              	 <div class="row">
              		<div class="col-md-1">
	              		<div id="photo-show2" class="col-md-12">
	              		   <?php if($get_candidate_info['photos']!=''){ $photo = $get_candidate_info['photos']; } else { $photo = 'dummy-profile-pic.jpg'; } ?>

					       <img src="<?php echo base_url();?>upload/photos/<?php echo $photo; ?>" width="100" height="125" class="img-thumbnail" />

						</div>
						<!--  <div class="col-md-12"><a target="_blank" href="<?php echo base_url();?>upload/resumes/<?php echo $get_candidate_info['resume']; ?>" /><?php echo $get_candidate_info['resume']; ?></a></div> -->
					</div>
				

					<div class="col-md-5">
					<?php if($this->session->userdata('role')=='company'){ ?>
	              		<div class="col-xs-12 col-md-12" style="color: blue">
		                  <label class="col-md-4">Current Status: </label>
		                  <div class="col-md- d-inline"><?php echo $check_candidate_status[0]['job_status']; ?></div>
		                </div>
		            <?php } ?>
		                <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Name: </label>
		                  <div class="col-md-7 d-inline"><?php echo $get_candidate_info['first_name']; ?></div>
		                </div>
		                <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Email: </label>
		                  <div class="col-md-7 d-inline"><?php echo $get_candidate_info['email']; ?></div>
		                </div>
		                 <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">DOB: </label>
		                  <div class="col-md-7 d-inline" ><?php echo $get_candidate_info['dob']; ?></div>
		                </div>
		               
		               
					</div>
					<div class="col-md-5">
				
		              <?php $gender  = $get_candidate_info['gender']; ?>
						 <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Gender:</label>
		                  <div class="col-md-7 d-inline">
							<?php					
							foreach ($get_gender as $key => $value) {
								if($value['gender_id']==$gender) {
									echo $value['gender'];
								}
							} 
							?>
		                  </div>
		                </div>
						<div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Mobile No:</label>
		                  <div class="col-md-7 d-inline"><?php echo $get_candidate_info['mobile_number']; ?></div>
		                </div>
		                 <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Pancard: </label>
		                  <div class="col-md-7 d-inline"><?php echo $get_candidate_info['pancard']; ?></div>
		                </div>
		                
		        </div>
		    </div>

		    <div class="row">
		    	<div class="col-md-12"></div>
		    	<div class="col-md-1">
		    	</div>
			    <div class="col-md-5">
			    		 <?php $total_experience  = $get_candidate_info['total_experience']; ?>
						 <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Total IT experience:</label>
		                  <div class="col-md-7 d-inline">
								<?php					
							foreach ($get_total_it_experience as $key => $value) {
								if($value['total_it_experience_id']==$total_experience) {
									echo $value['total_experience'].' years Experience';
								}
							} 
							?>
		                  </div>
		                </div>
		                
		                
						
		                 <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Annual CTC (Lakhs): </label>
		                  <div class="col-md-7 d-inline"><?php echo $get_candidate_info['salary_lakhs']; ?> Lakhs </div>
		                </div>
		                
		                 <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Preferred Roles: </label>
		                  <div class="col-md-7 d-inline"><?php echo $get_candidate_info['preferred_roles']; ?></div>
		                </div>						
						 
						<?php $job_type  = $get_candidate_info['job_type']; ?>
						 <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Job Type:</label>
		                  <div class="col-md-7 d-inline">
							<?php					
							foreach ($get_job_type as $key => $value) {
								if($value['job_type_id']==$job_type) {
									echo $value['job_type'];
								}
							} 
							?>
		                  </div>
		                </div>

						<div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Primary Skill: </label>
		                  <div class="col-md-7 d-inline">
		                  <?php 
		                  $primary_skill = json_decode($get_candidate_info['primary_skill'], true);
		                  foreach($primary_skill as $key => $value) {
			                  		foreach ($get_skills as $skey => $svalue) {
										if($svalue['skill_id']==$key) {
											echo $svalue['skills'] .' - '.$value;
									}
								}			                  		
		                  	}
			                ?>

		                  </div>
		                </div>
		                <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Skills: </label>
		                  <div class="col-md-7 pull-right skills-wrap">
		                  <?php 
		                  $skill1 = json_decode($get_candidate_info['skill1']);
		                  $skill2 = json_decode($get_candidate_info['skill2']);
		                  $skill3 = json_decode($get_candidate_info['skill3']);
		                  $skill4 = json_decode($get_candidate_info['skill4']);
		                  $skill5 = json_decode($get_candidate_info['skill5']);

		                  foreach ($skill1 as $key1 => $value1)
		                  	foreach ($get_skills as $skillskey => $skillsvalue) {
		                  		if($skillsvalue['skill_id']==$key1) {
		                  if($key1!='_empty_'){
		                  echo $skill1 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value1.'</span><br>'; } }
		                  
			              foreach ($skill2 as $key2 => $value2)
			              		if($skillsvalue['skill_id']==$key2) {
			              	 if($key2!='_empty_'){
			                  echo $skill2 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value2.'</span><br>';} }
			              
			              foreach ($skill3 as $key3 => $value3)
			              	if($skillsvalue['skill_id']==$key3) {
			              	 if($key3!='_empty_'){
			                  echo $skill3 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value3.'</span><br>';} }
			             
			              foreach ($skill4 as $key4 => $value4)
			              	 if($skillsvalue['skill_id']==$key4) {
			              	  if($key4!='_empty_'){
			                  echo $skill4 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value4.'</span><br>';} }
			               
			              foreach ($skill5 as $key5 => $value5)
			              	if($skillsvalue['skill_id']==$key5) {
			              	if($key5!='_empty_'){
			                  echo $skill5 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value5.'</span><br>';} }
			             }
			                  ?>
		                  </div>
		                </div>
			    </div>
			    <div class="col-md-5 align-top">

		                 <?php if($get_candidate_info['total_experience']=='1') { ?>
						<div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Year of completion: </label>
		                  <div class="col-md-7 d-inline"><?php echo $get_candidate_info['year_completion']; ?></div>
		                </div>
						<div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Institute: </label>
		                  <div class="col-md-7 d-inline"><?php echo $get_candidate_info['institute']; ?></div>
		                </div>
		                <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Score: </label>
		                  <div class="col-md-7 d-inline"><?php echo $get_candidate_info['score']; ?></div>
		                </div>
						<div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Degree</label>
		                  <div class="col-md-7 d-inline"><?php echo $get_candidate_info['degree']; ?></div>
		                </div>
						  
		                <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">branch: </label>
		                  <div class="col-md-7 d-inline"><?php echo $get_candidate_info['branch']; ?></div>
		                </div>
		                <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Industry: </label>
		                  <div class="col-md-7 d-inline"><?php echo $get_candidate_info['industry']; ?></div>
		                </div>
						 <?php } else { ?>
						  <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Previous Role: </label>
		                  <div class="col-md-7 d-inline"><?php echo $get_candidate_info['previous_role']; ?></div>
		                </div>
		                <?php } ?>
						  <?php
		                $clocat  = json_decode($get_candidate_info['current_location']);		                             
		                ?>
		                <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Current location: </label>
						  <div class="col-md-7 d-inline">
		                  <?php 
		                  foreach ($clocat as $key => $value) {
		                  	 $clocation .= $value.', ';
		                  } 
		                  echo rtrim($clocation,', '); 
		                  ?>
		                 </div>
		                
		                </div>
		                <?php
		                if($get_candidate_info['preferred_location']=='on') { ?>
		                	<div class="col-xs-12 col-md-12">
			                  <label class="col-md-5">Preferred location: </label>
			                  <div class="col-md-7 d-inline">Any Location</div>
			                  </div>
		                <?php } else {
		                $locations  = json_decode($get_candidate_info['preferred_location']);		                             
		                ?>
		                 <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Preferred location: </label>
		                  <div class="col-md-7 d-inline">
		                  <?php 
		                  foreach ($locations as $key => $value) {
		                  	 $location .= $value.', ';
		                  } 
		                  echo rtrim($location,', '); 
		                  ?>
		                 </div>
		                </div>
		                <?php } ?>
						 <?php
		                $domains  = json_decode($get_candidate_info['add_domain']);		               
		                ?>
						 <div class="col-xs-12 col-md-12">
		                  <label class="col-md-5">Add Domain: </label>
		                  <div class="col-md-7 d-inline">
							<?php 
							foreach ($domains as $key => $value) {
							$domain .= $value.', ';
							} 
							echo rtrim($domain,', ');
							?>
		                  </div>
		                </div>
		            </div>

			</div> 
            <!-- End Full profile -->

          
         </div>
        </div>
       </div>
      </div>
    </section>
	<script>
$('#preferred_location').selectize({
sortField: 'text'
});
$('#primary-skill').selectize({
sortField: 'text'
});
$('#job-type').selectize({
sortField: 'text'
});
$('#skill1').selectize({
sortField: 'text'
});
$('#skill2').selectize({
sortField: 'text'
});
$('#skill3').selectize({
sortField: 'text'
});
$('#skill4').selectize({
sortField: 'text'
});
$('#skill5').selectize({
sortField: 'text'
});

$('#joining_date').datepicker({format: 'dd/mm/yyyy'});
</script>
<script>
function goBack() {
    window.history.back();
}
</script>

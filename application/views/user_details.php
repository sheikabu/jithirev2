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


    
    <!-- Candidate dashboard -->
    <section id="">
      <div class="container">
      <!-- browse job start-->
   
    <!-- browse job end-->
      <div class="dashboard-wrap">
        <div class="row">
         
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
              <div>
             		<div class="line2 mBot-10">
             			<h2 class="title mRight-20 "><?php 
		                  $primary_skill = json_decode($get_candidate_info['primary_skill']);
		                  foreach ($primary_skill as $key => $value)
		                  echo $primary_skill .= $key.'-'.$value;
			                ?></h2> <span class="col-md-8"><?php if($get_candidate_info['total_experience'] == 'Fresher') { echo 'Fresher';} else { echo $get_candidate_info['total_experience'].' years Experience'; } ?></span>
             		</div>
             
             		<div class="row text-right">
             		
             			<div class="col-md-12">
	             			<a class="pull-right nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/update_profile"><i class="fa fa-edit" aria-hidden="true"></i></a>
			        		<a class="pull-right  nav-link js-scroll-trigger" href="<?php echo base_url();?>upload/resumes/<?php echo $get_candidate_info['resume']; ?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
			        	</div>
		        	
             		</div>
	        	
	        
             
             
              	 <div class="row">
              	 
              	 
              		<div class="col-md-2">
	              		<div id="photo-show2" class="col-md-12">
	              		   <?php if($get_candidate_info['photos']!=''){ $photo = $get_candidate_info['photos']; } else { $photo = 'dummy-profile-pic.jpg'; } ?>

					       <img src="<?php echo base_url();?>upload/photos/<?php echo $photo; ?>" width="100" height="125" class="img-thumbnail" />

						</div>
						<!--  <div class="col-md-12"><a target="_blank" href="<?php echo base_url();?>upload/resumes/<?php echo $get_candidate_info['resume']; ?>" /><?php echo $get_candidate_info['resume']; ?></a></div> -->
					</div>
					



					<div class="col-md-5">
			
	              		
		                <div class="col-xs-12">
		                  <label class="col-md-4">Name: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['first_name']; ?></span>
		                </div>
		                <div class="col-xs-12">
		                  <label class="col-md-4">Email: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['email']; ?></span>
		                </div>
		                 <div class="col-xs-12">
		                  <label class="col-md-4">DOB: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['dob']; ?></span>
		                </div>
		               
		               
					</div>
					<div class="col-md-5">
				
		               <div class="col-xs-12">
		                  <label class="col-md-4">Gender: </label>
		                  <?php if($get_candidate_info['gender']=='m') { $gender = 'Male';} else { $gender = 'Female'; } ?>
		                  <span class="col-md-8"><?php echo $gender; ?></span>
		                </div>
						<div class="col-xs-12">
		                  <label class="col-md-4">Mobile No:</label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['mobile_number']; ?></span>
		                </div>
		                 <div class="col-xs-12">
		                  <label class="col-md-4">Pancard: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['pancard']; ?></span>
		                </div>
		                
		        </div>
		    </div>

		    <div class="row">
		    	<div class="col-md-12"></div>
		    	<div class="col-md-2">
		    	</div>
			    <div class="col-md-5">
			    		<div class="col-xs-12">
		                  <label class="col-md-4">IT experience: </label>
		                  <span class="col-md-8"><?php if($get_candidate_info['total_experience']=='Fresher') { echo $get_candidate_info['total_experience']; } else { echo $get_candidate_info['total_experience'].' Year(s)'; } ?></span>
		                </div>
		                
		                <div class="col-xs-12">
		                  <label class="col-md-4">Institute: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['institute_dummy']; ?> Institute </span>
		                </div>
						<div class="col-xs-12">
		                  <label class="col-md-4">Degree: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['degree_dummy']; ?> Degree </span>
		                </div>
		                 <div class="col-xs-12">
		                  <label class="col-md-4">Expected CTC: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['salary_lakhs']; ?> Lakhs </span>
		                </div>
		                
		                 <div class="col-xs-12">
		                  <label class="col-md-4">Preferred Roles: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['preferred_roles']; ?></span>
		                </div>						
						 <div class="col-xs-12">
		                  <label class="col-md-4">Job Type: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['job_type']; ?></span>
		                </div>
						<div class="col-xs-12">
		                  <label class="col-md-4">Primary Skill: </label>
		                  <span class="col-md-8">
		                  <?php 
		                  $primary_skill = json_decode($get_candidate_info['primary_skill']);
		                  foreach ($primary_skill as $key => $value)
		                  echo $primary_skill .= $key.'-'.$value.'<br>';
			                ?>
		                  </span>
		                </div>
		                <div class="col-xs-12">
		                  <label class="col-md-4">Skills: </label>
		                  <span class="col-md-8 pull-right skills-wrap">
		                  <?php 
		                  $skill1 = json_decode($get_candidate_info['skill1']);
		                  $skill2 = json_decode($get_candidate_info['skill2']);
		                  $skill3 = json_decode($get_candidate_info['skill3']);
		                  $skill4 = json_decode($get_candidate_info['skill4']);
		                  $skill5 = json_decode($get_candidate_info['skill5']);
		                  foreach ($skill1 as $key1 => $value1)
		                  if($key1!='_empty_'){
		                  echo $skill1 .= $key1.'<span class="skill-level">- '.$value1.'</span><br>'; }
		                  
			              foreach ($skill2 as $key2 => $value2)
			              	 if($key2!='_empty_'){
			                  echo $skill2 .= $key2.'<span class="skill-level">- '.$value2.'</span><br>';}
			              
			              foreach ($skill3 as $key3 => $value3)
			              	 if($key3!='_empty_'){
			                  echo $skill3 .= $key3.'<span class="skill-level">- '.$value3.'</span><br>';}
			             
			              foreach ($skill4 as $key4 => $value4)
			              	  if($key4!='_empty_'){
			                  echo $skill4 .= $key4.'<span class="skill-level">- '.$value4.'</span><br>';}
			               
			              foreach ($skill5 as $key5 => $value5)
			              	if($key5!='_empty_'){
			                  echo $skill5 .= $key5.'<span class="skill-level">- '.$value5.'</span><br>';}
			                  ?>
		                  </span>
		                </div>
			    </div>
			    <div class="col-md-5">
			    		<?php if($get_candidate_info['total_experience']!='Fresher') { ?>
		                 <div class="col-xs-12">
		                  <label class="col-md-4">Previous Role: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['previous_role']; ?></span>
		                </div>
		                <?php } else { ?>
		                
						<div class="col-xs-12">
		                  <label class="col-md-4">Year of completion: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['year_completion']; ?></span>
		                </div>
		                <div class="col-xs-12">
		                  <label class="col-md-4">Score: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['score']; ?></span>
		                </div>
						<div class="col-xs-12">
		                  <label class="col-md-4">Degree</label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['degree']; ?></span>
		                </div>
						  
		                <div class="col-xs-12">
		                  <label class="col-md-4">branch: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['branch']; ?></span>
		                </div>
		                <div class="col-xs-12">
		                  <label class="col-md-4">Industry: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['industry']; ?></span>
		                </div>
		                <?php } ?>
						  <?php
		                $clocat  = json_decode($get_candidate_info['current_location']);		                             
		                ?>
		                <div class="col-xs-12">
		                  <label class="col-md-4">Current location: </label>
						  <span class="col-md-8">
		                  <?php 
		                  foreach ($clocat as $key => $value) {
		                  	 $clocation .= $value.', ';
		                  } 
		                  echo rtrim($clocation,', '); 
		                  ?>
		                 </span>
		                
		                </div>
		                <?php
		                if($get_candidate_info['preferred_location']=='on') { ?>
		                	<div class="col-xs-12">
			                  <label class="col-md-4">Preferred location: </label>
			                  <span class="col-md-8">Any Location</span>
			                  </div>
		                <?php } else {
		                $locations  = json_decode($get_candidate_info['preferred_location']);		                             
		                ?>
		                 <div class="col-xs-12">
		                  <label class="col-md-4">Preferred location: </label>
		                  <span class="col-md-8">
		                  <?php 
		                  foreach ($locations as $key => $value) {
		                  	 $location .= $value.', ';
		                  } 
		                  echo rtrim($location,', '); 
		                  ?>
		                 </span>
		                </div>
		                <?php } ?>
						 <?php
		                $domains  = json_decode($get_candidate_info['add_domain']);		               
		                ?>
						 <div class="col-xs-12">
		                  <label class="col-md-4">Add Domain: </label>
		                  <span class="col-md-8">
							<?php 
							foreach ($domains as $key => $value) {
							$domain .= $value.', ';
							} 
							echo rtrim($domain,', ');
							?>
		                  </span>
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
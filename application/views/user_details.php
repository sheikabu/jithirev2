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
             <h1 class="title"></h1>
             
             
             		<div class="row text-right">
             		
             			<div class="col-md-12">
             			<a class="pull-right nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/update_profile"><i class="fa fa-edit" aria-hidden="true"></i></a>
	        		<a class="pull-right  nav-link js-scroll-trigger" href="<?php echo base_url();?>upload/resumes/<?php echo $get_candidate_info['resume']; ?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
		        	</div>
		        	
             		
             		
             		
             		</div>
	        	
	        
             
             
              	 <div class="row">
              	 
              	 
              		<div class="col-md-2">
	              		<div id="photo-show2" class="col-md-12">
		                   <img src="<?php echo base_url();?>upload/photos/<?php echo $get_candidate_info['photos']; ?>" width="100" height="125" class="img-thumbnail" />
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
		                
		                 <?php if($get_candidate_info['total_experience']!='Fresher') { ?>
		                 <div class="col-xs-12">
		                  <label class="col-md-4">Previous Role: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['role']; ?></span>
		                </div>
		                <?php } ?>
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
		                  <span class="col-md-8 pull-right">
		                  <?php 
		                  $skill1 = json_decode($get_candidate_info['skill1']);
		                  $skill2 = json_decode($get_candidate_info['skill2']);
		                  $skill3 = json_decode($get_candidate_info['skill3']);
		                  $skill4 = json_decode($get_candidate_info['skill4']);
		                  $skill5 = json_decode($get_candidate_info['skill5']);
		                  foreach ($skill1 as $key1 => $value1)
		                  echo $skill1 .= $key1.'-'.$value1.'<br>';
			              foreach ($skill2 as $key2 => $value2)
			                  echo $skill2 .= $key2.'-'.$value2.'<br>';
			              foreach ($skill3 as $key3 => $value3)
			                  echo $skill3 .= $key3.'-'.$value3.'<br>';
			              foreach ($skill4 as $key4 => $value4)
			                  echo $skill4 .= $key4.'-'.$value4.'<br>';
			              foreach ($skill5 as $key5 => $value5)
			                  echo $skill5 .= $key5.'-'.$value5.'<br>';
			                  ?>
		                  </span>
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
		                
		                  <div class="col-xs-12">
		                  <label class="col-md-4">IT experience: </label>
		                  <span class="col-md-8"><?php if($get_candidate_info['total_experience']=='Fresher') { echo $get_candidate_info['total_experience']; } else { echo $get_candidate_info['total_experience'].' Year(s)'; } ?></span>
		                </div>
		                
		                <div class="col-xs-12">
		                  <label class="col-md-4">Industry: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['industry']; ?></span>
		                </div>
		                <div class="col-xs-12">
		                  <label class="col-md-4">Current location: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['current_location_dummy']; ?></span>
		                </div>
		                <?php
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
            </div>
            <!-- End Full profile -->

          
         </div>
        </div>
       </div>
      </div>
    </section>
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
		                
		                  
		                 <div class="col-xs-12">
		                  <label class="col-md-4">Previous Role: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['role']; ?></span>
		                </div>
		                 <div class="col-xs-12">
		                  <label class="col-md-4">Expected CTC: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['salary_lakhs']; ?> Lakhs </span>
		                </div>
		                
		                 <div class="col-xs-12">
		                  <label class="col-md-4">Preferred Roles: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['preferred_roles']; ?></span>
		                </div>
						 <?php
		                  	if($get_candidate_info['job_type'] == 'Permanent') {
			               $job_type= 'Permanent'; 
			               } elseif($get_candidate_info['job_type'] == 'Short Term') {
			               $job_type= 'Short Term'; 
			               }elseif($get_candidate_info['job_type'] == 'Both') {
			               $job_type= 'Both'; 
			               }
						   
		                ?>
						 <div class="col-xs-12">
		                  <label class="col-md-4">Job Type: </label>
		                  <span class="col-md-8"><?php echo $job_type; ?></span>
		                </div>
		                <div class="col-xs-12">
		                  <label class="col-md-4">Skills: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['skills']; ?></span>
		                </div>
		               
			</div>
			<div class="col-md-5">
				 <?php
		                  	if($get_candidate_info['gender'] == 'm') {
			               $gender= 'Male'; 
			               } elseif($get_candidate_info['gender'] == 'f') {
			               $gender= 'Female'; 
			               }
		                ?>
		               <div class="col-xs-12">
		                  <label class="col-md-4">Gender: </label>
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
		                  <span class="col-md-8"><?php echo $get_candidate_info['total_experience']; ?> Year(s)</span>
		                </div>
		                
		                <div class="col-xs-12">
		                  <label class="col-md-4">Industry: </label>
		                  <span class="col-md-8"><?php echo $get_candidate_info['industry']; ?></span>
		                </div>
		                
		                <?php
		                $locations  = json_decode($get_candidate_info['preferred_location']);
		                if(in_array('Trivandrum', $locations)) {
		               $locations= 'Trivandrum'; 
		               } elseif(in_array('Chennai', $locations)) {
		               $locations= 'Chennai'; 
		               }elseif(in_array('Madurai', $locations)) {
		               $locations= 'Madurai'; 
		               }elseif(in_array('Kochi', $locations)) {
		               $locations= 'Kochi'; 
		               }elseif(in_array('Bengalore', $locations)) {
		               $locations= 'Bengalore'; 
		               }
		                ?>
		                 <div class="col-xs-12">
		                  <label class="col-md-4">Preferred location: </label>
		                  <span class="col-md-8"><?php echo $locations; ?></span>
		                </div>
						 <?php
		                $locations  = json_decode($get_candidate_info['add_domain']);
		                if(in_array('Finance', $locat)) {
		               $locations= 'Finance'; 
		               } elseif(in_array('Operations Management', $locat)) {
		               $locations= 'Operations Management'; 
		               }elseif(in_array('Supply Chain & Logistics', $locat)) {
		               $locations= 'Supply Chain & Logistics'; 
		               }elseif(in_array('Banking & Insurance', $locat)) {
		               $locations= 'Banking & Insurance'; 
		               }elseif(in_array('Manufacturing & Product Design', $locat)) {
		               $locations= 'Manufacturing & Product Design'; 
		               }elseif(in_array('Health', $locat)) {
		               $locations= 'Health'; 
		               }
		                ?>
						 <div class="col-xs-12">
		                  <label class="col-md-4">Add Domain: </label>
		                  <span class="col-md-8"><?php echo $locat; ?></span>
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
`
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
    
      <div class="dashboard-wrap">
        <div class="row">
          
          <div class="col-md-12">
     

            <!-- profile details start -->
            <div id="message"></div>
            <?php echo form_open_multipart('user/basic_info');?>
            <div class="details" id="basic-info">
              <h1 class="title" value="<?php echo $get_candidate_info['first_name']; ?>"></h1>
             
              <div class="row">
              	 <div class="col-md-4">
	                <div class="col-xs-12">
	                  <!-- First Name -->
	                  <label class="col-md-12">Name </label><div class="col-md-12"> <input name="first_name" readonly class="form-control"  placeholder="First Name*" type="text" value="<?php echo $get_candidate_info['first_name']; ?>" required></div>
	                </div>
	                
	                <div class="col-xs-12 mTop-5">
	                  <!-- Email -->
	                  <label class="col-md-12">Email </label><div class="col-md-12"> <input name="email" readonly class="form-control"  placeholder="Email*" type="email" value="<?php echo $get_candidate_info['email']; ?>" required></div>
	                </div>
	                
	                <div class="col-xs-12 mTop-5">
	                  <!-- Pancard -->
	                  <label class="col-md-12">PAN </label><div class="col-md-12"> <input type="text" name="pancard" readonly class="form-control"  placeholder="Pancard" value="<?php echo $get_candidate_info['pan_card']; ?>" required/></div>
	                </div>
	                <div class="col-xs-12 mTop-5">
	                  <!-- Mobile number -->
	                  <label class="col-md-12">Mobile number</label><div class="col-md-12"> <input type="text" name="mobile_number" class="form-control" placeholder="Mobile_number*"  onkeydown='return (event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105) || event.which == 8 || event.which == 46' value="<?php echo $get_candidate_info['mobile_number']; ?>" required/></div>
	                </div>
	                 <div class="col-xs-12 mTop-5">
	                  <!-- birth day -->
	                  <label class="col-md-12">Date of Birth</label><div class="col-md-12"> <input type="date" name="bday" class="form-control" id="datepicker" value="<?php echo $get_candidate_info['dob']; ?>" required> </div>
	                </div>
	                   <div class="col-xs-12 mTop-5">
	                  <label class="col-md-12">Gender</label><div class="col-md-12" id="gender"> 
					  <?php $gen  = $get_candidate_info['gender']; ?>

	                   <select id="gen-der" name="gender"   class="demo-default" placeholder="Select gender...">
						 <option value=''>select gender</option>
	                   <optgroup label="select gender">

						<?php foreach($get_gender as $genderlist => $genderval) { ?>
						<option value ='<?php echo $genderval['gender_id']; ?>' <?php if ($genderval['gender_id']==$gen) { echo"selected"; } ?>>
						<?php echo $genderval['gender'] ?></option>
						<?php }	 ?>
							</optgroup>
	                  </select>

	                </div>
	                </div>
	               </div>
	                <div class="col-md-4">
	              
	                 <!--<div class="col-xs-12">
	                  <label class="col-md-12">Functional Area</label><div class="col-md-12"> 
	                    <select class="form-control" name="functional_area" required>
	                      <option value=''>--select--</option>
	                      <option value ='1' <?php if($get_candidate_info['functional_area'] == '1') echo"selected"; ?>>Accounts / Finance / Tax / CS / Audit</option>
	                      <option value ='2' <?php if($get_candidate_info['functional_area'] == '2') echo"selected"; ?>>IT Software - Client Server</option>
	                      <option value ='3' <?php if($get_candidate_info['functional_area'] == '3') echo"selected"; ?>>IT Software - Mainframe</option>
	                      <option value ='4' <?php if($get_candidate_info['functional_area'] == '4') echo"selected"; ?>>IT Software - Middleware</option>
	                      <option value ='5' <?php if($get_candidate_info['functional_area'] == '5') echo"selected"; ?>>IT Software - Mobile</option>
	                    </select>
	                </div>
	                </div>-->

	
			<div class="col-xs-12 mTop-5">
	                  <label class="col-md-12">Industry</label><div class="col-md-12"> 
	                   <input type="text" name="industry" value="IT-Software/Software Services" readonly class="form-control" placeholder="IT-Software/Software Services" value="<?php echo $get_candidate_info['industry']; ?>">
	                  
	                </div>
	                </div>
	              
	              	 
					<div class="col-xs-12 mTop-5" >
	                  <label class="col-md-12">Total IT experience</label><div class="col-md-12" id="total_experience"> 
	                    <?php $experience  = $get_candidate_info['total_experience']; ?>
	<select id="total-experience" name="total_experience" class="demo-default"  placeholder="Select Total experience...">	
	<option value="">Select Total experience...</option>
	<optgroup label="select  Total experience">

<?php foreach($get_total_it_experience as $experiencelist => $experienceval) { ?>
<option value ='<?php echo $experienceval['total_it_experience_id']; ?>' <?php if ($experienceval['total_it_experience_id']==$experience) { echo"selected"; } ?>>
<?php echo $experienceval['total_experience'] ?></option>
<?php }	 ?>
	</optgroup>
	</select>
	                </div>
	    </div>
	              
	                <div class="col-xs-12 mTop-5" id="pre-role">
	                  	<label class="col-md-12">Previous Role</label>
	                 	<div class="col-md-12"> 
	                  		<input type="text" name="role" class="form-control" placeholder="Previous Role" value="<?php echo $get_candidate_info['previous_role']; ?>">
	                 	</div>
	                </div>
 					<div class="col-xs-12 mTop-5" id="year_completion">
	                  	<label class="col-md-12">Year of completion</label>
	                 	<div class="col-md-12"> 
	                  		<input type="text" name="year_completion" id="year_completion_input" class="form-control" placeholder="Year of completion" value="<?php echo $get_candidate_info['year_completion']; ?>">
	                 	</div>
	                </div>
					<div class="col-xs-12 mTop-5" id="institute">
							<label class="col-md-12">Institute</label>
							<div class="col-md-12"> 
							    <input type="text" name="institute" id="institute_input" class="form-control" placeholder="Institute" value="<?php echo $get_candidate_info['institute']; ?>">
						</div>
					</div>
					<div class="col-xs-12 mTop-5" id="score">
							<label class="col-md-12">Score</label>
							<div class="col-md-12"> 
							    <input type="text" name="score" class="form-control" id="score_input" placeholder="Score" value="<?php echo $get_candidate_info['score']; ?>">
						</div>
					</div>
					<div class="col-xs-12 mTop-5" id="degree">
							<label class="col-md-12">Degree</label>
							<div class="col-md-12"> 
							    <input type="text" name="degree" id="degree_input" class="form-control" placeholder="Degree" value="<?php echo $get_candidate_info['degree']; ?>">
						</div>
					</div>
					<div class="col-xs-12 mTop-5" id="branch">
							<label class="col-md-12">Branch</label>
							<div class="col-md-12"> 
							    <input type="text" name="branch" id="branch_input" class="form-control" placeholder="Branch" value="<?php echo $get_candidate_info['branch']; ?>">
						</div>
					</div>
	                 <div class="col-xs-12 mTop-5">
	                  <label class="col-md-12">Job Type</label><div class="col-md-12" id="job_type"> 
					  <?php $jobt  = json_decode($get_candidate_info['job_type']); 
					  	//echo '<pre>';
					  	//var_dump($jobt);
					  ?>
	                   <select id="job-type" name="job_type"   class="demo-default" placeholder="Select job type...">
						 <option value=''>select job type</option>
	                   <optgroup label="select job type">

						<?php foreach($get_job_type as $jobtypelist => $jobtypeval) { ?>
						<option value ='<?php echo $jobtypeval['job_type_id']; ?>' <?php if($jobtypeval['job_type_id']==$jobt) { echo"selected"; } ?>>
						<?php echo $jobtypeval['job_type'] ?></option>
						<?php }	 ?>
	</optgroup>
	                  </select>
	                </div>
	                </div>

	
			<div class="col-xs-12 mTop-5">
		                  <label class="col-md-12">Preferred Roles</label><div class="col-md-12"> 
		                <input type="text" name="preferred_roles" class="form-control" placeholder="Preferred Roles" value="<?php echo $get_candidate_info['preferred_roles']; ?>" required>
		        </div>
		        </div>
		 </div>
	 	<div class="col-md-4">
	 	<div class="col-xs-12">
		                  <label class="col-md-12">Annual CTC (Lakhs)</label>
		                  <div class="col-md-12"> 
		                <input type="text" name="salary_lakhs" class="form-control" onkeyup="if(this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'));"  required placeholder="Expected salary" value="<?php echo $get_candidate_info['salary_lakhs']; ?>" required  maxlength="10">
		        </div>
	                </div>
					<div class="col-xs-12 mTop-5" >
	                  <label class="col-md-12">Current Location</label>
										
						
	                  <div class="col-md-12" id="current_location">
	                    <?php $clocat=json_decode($get_candidate_info['current_location']); ?>




	                  <select id="current-location" name="current_location[]" class="demo-default" placeholder="Select locations...">
							<option value="">Select location...</option>
					<optgroup label="select location">
					<?php foreach($get_cities as $citylist => $citylistval) { ?>

					<option value ='<?php echo $citylistval['city_name']; ?>' <?php if (in_array($citylistval['city_name'], $clocat)) { echo"selected"; } ?>>

					<?php echo $citylistval['city_name'] ?></option>
					<?php }	 ?>
					  </optgroup>
					</select>
	                </div>
	    </div>
 	 <div class="col-xs-12 mTop-5">
	 	 			<div class="col-xs-12">
	                  <label class="col-md-6">Preferred location</label>
	                  <div class="col-md-6 pull-right">
                            <div class="checkbox">
                                <input type="checkbox" <?php if ($get_candidate_info['preferred_location']=='on'){ echo"checked"; } ?> name="anylocation" id="any-location">
                                <label for="any-location" >Any locaton</label>
                            </div>
                        </div>
					</div>
						
	                  <div class="col-md-12" id="preferred_location"> 
	                    <?php $locations  = json_decode($get_candidate_info['preferred_location']);?>

					<select id="select-gear" name="preferred_location[]" class="demo-default" multiple placeholder="Select locations...">
							<option value="">Select location...</option>
					<optgroup label="select location">
					<?php foreach($get_cities as $citylist => $citylistval) { ?>
					<option value ='<?php echo $citylistval['city_name']; ?>' <?php if (in_array($citylistval['city_name'], $locations)) { echo"selected"; } ?>>
					<?php echo $citylistval['city_name'] ?></option>
					<?php }	 ?>
   				    </optgroup>
					</select>
					 </div>
				

	    </div>
	     <div class="col-xs-12 mTop-5" >
	                  <label class="col-md-12">Add Domain</label><div class="col-md-12" id="add_domain"> 
	                    <?php $locat  = json_decode($get_candidate_info['add_domain']); ?>
	<select id="add-domain" name="add_domain[]" class="demo-default" multiple placeholder="Select domain...">	
	<option value="">Select domain...</option>
	<optgroup label="select domain">

<?php foreach($get_domains as $domainlist => $domainlistval) { ?>
<option value ='<?php echo $domainlistval['domains']; ?>' <?php if (in_array($domainlistval['domains'], $locat)) { echo"selected"; } ?>><?php echo $domainlistval['domains'] ?></option>
<?php }	 ?>
	</optgroup>
	</select>
	                </div>
	    </div>
		 
	 </div>
	 
	 	
            </div>
         
            </form>
            <!-- profile details end -->
            
      <div class="row mTop-30">      
	    <!-- Upload photo -->
	    <div class="col-md-3">
	    
	            <div id="upload_photo-view" class="upload-photo-wrap">
	                 
	            	<div class="details col-md-12" id="basic-info">
	             	 
	              	<label class="col-md-12 paddingL-0 line2">Upload Photo and Resume</label>
	                  <!-- photo view -->
	                  <div class="row">
	                  <!-- <div class="col-md-4">
	                  
	                  <div id="photo-view"></div>
	                  	<div id="photo-show">
	                   		<img src="<?php echo base_url();?>upload/photos/<?php echo $get_candidate_info['photos']; ?>" width="100" height="125" class="img-thumbnail" />
						</div>
					</div> -->
	       			<div class="col-md-12">
	       			<div class="row">
					     <!-- <label class="col-md-12">Upload your Latest Photo </label> -->
					     <div class="col-md-4">
					    	<i class="fa fa-edit" aria-hidden="true"></i>
					      <input type="file" name="image_file" size="20" class="photo"   />
					       
					       <?php if($get_candidate_info['photos']!=''){ $photo = $get_candidate_info['photos']; } else { $photo = 'dummy-profile-pic.jpg'; } ?>

					       <img src="<?php echo base_url();?>upload/photos/<?php echo $photo; ?>" width="100" height="125" class="img-thumbnail" />
					       
					      <input type="hidden" value="<?php echo $get_candidate_info['photos']; ?>" name="old_image">
						</div>
						<div class="col-md-8 border-left">
							<!-- <label>Upload your Latest Resume </label> -->
							<div id="resume-show">
			                   	<div><a target="_blank" href="<?php echo base_url();?>upload/resumes/<?php echo $get_candidate_info['resume']; ?>" /><?php echo $get_candidate_info['resume']; ?></a>
			                   	</div>
			                </div>
							<div><input type="file" name="resume_file" id="image_file" size="20" value="<?php echo $get_candidate_info['resume']; ?>" />
		                   		<input type="hidden" value="<?php echo $get_candidate_info['resume']; ?>" name="old_resume">
							</div>
						</div>
					</div>
			</div>
			</div>
	               <!--  <div class="btn-form text-right  mTop-5 col-xs-12">
	                  <button class="btn btn-fill mBot-10">Update Photo</button>
	                </div> -->
	            </div>
	            </form>
	            </div>
	            <!-- Resume hidden -->
	            <!-- <div id="upload_resume-view" class=" mTop-20">
	              <div id="resume-view-smsg"></div>
	                  
	            <div class="details col-md-12" id="basic-info">
	              
	              <label class="col-md-12 paddingL-0 line2">Upload Resume</label>
	                <div class="row"> -->
	                  <!-- First Name -->
	                  <!-- <div class="col-md-12">
	                  <div id="resume-view"></div>
	
	                  <div id="resume-show">
	                   <div><a target="_blank" href="<?php echo base_url();?>upload/resumes/<?php echo $get_candidate_info['resume']; ?>" /><?php echo $get_candidate_info['resume']; ?></a></div>
	                  </div>
	                  </div>
	                <div class="col-md-12">
	                  <label>Upload your Latest Resume </label>
	                  	<div><input type="file" name="resume_file" id="image_file" size="20"  />
	                   		<input type="hidden" value="<?php echo $get_candidate_info['resume']; ?>" name="old_resume">
						</div>
					</div>
	                </div> -->
	                <!--  <div class="btn-form text-right mTop-5 col-xs-12">
	                  <button class="btn btn-fill mBot-10">Upload Resume</button>
	                </div> -->
	            <!-- </div>
	            </form>
	            </div> -->
	            <!-- end Resume -->
	            
	       </div>
            <!--End Upload Photo -->
	 <!-- Primary skill -->
	 <div class="col-md-4">
	       <div id="skills-view" class="skills">
                  
            <div class="details col-md-12" id="basic-info">
              
              <div class="col-md-12 paddingL-0 line2 mBot-5"><label>Primary Skill</label><label class="pull-right mRight-20">Proficiency</label></div>
                <div class="row">
                <div class="col-md-12">
                
        <div class="form-group">

        	<?php $primary_skill  = json_decode($get_candidate_info['primary_skill'],true); 
        		foreach($primary_skill as $pkey => $pval)        	
        	?>
        	<div id="sections">       	 
                  <select id="primary-skill" class="demo-default" name="primaryskill[]" placeholder="Select Primary Skill..." required>
						<option value="">Select Primary Skill...</option>
						<optgroup label="primary skiils">

						<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
							<option value="<?php echo $skillslistval['skill_id']; ?>" <?php if($pkey==$skillslistval['skill_id']) { echo 'selected'; } ?>><?php echo $skillslistval['skills']; ?></option>
						<?php } ?>

						</optgroup>						
					</select>

                  <?php ?>
                  <select name="primarypro[]" id="ttyty" required>
                    <option <?php if($pval=='Fresher') { echo 'selected'; } ?>>Fresher</option>
                    <option <?php if ($pval=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($pval=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($pval=='Advanced') { echo"selected"; } ?>>Advanced</option>
                  </select>
      		</div>      		
		</div>
      </div>
                </div>
                </div>
                <!--  <div class="btn-form text-right col-xs-12">
                  <button class="btn btn-fill mBot-10">Update Skills</button>
                </div> -->
            </div>
          
            
               
            </div>
            <!--End Primary skill -->
            <!-- Skills -->
			<div class="col-md-5">
			<div id="skills-view" class="skills">
				<div class="details col-md-12" id="basic-info">
				<div class="col-md-12 paddingL-0 line2"><label>Skills</label><label class="pull-right mRight-20">Proficiency</label></div>
				<div class="row">
				<div class="col-md-12">
				<div id="sections">

				<fieldset>
				<div class="container paddingL-0 paddingR-0" >
				<div class='element' id='div_1'>
				
				<!--skill1-->
				<?php $skill1  = json_decode($get_candidate_info['skill1'],true); 				
        		foreach($skill1 as $key => $val)
        		if($key=='') {$val = 'Fresher';}
        	    ?>			 

				  <select id="skill1" name="skill1[]" placeholder="Select Skill...">
						<option value="">Select Skill...</option>
						<optgroup label="Skiils">
						<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
							<option value="<?php echo $skillslistval['skill_id']; ?>" <?php if($key==$skillslistval['skill_id']) { echo 'selected'; } ?>><?php echo $skillslistval['skills']; ?></option>
						<?php } ?>
						</optgroup>						
					</select>

                  <select name="skillpro1[]" required>
                    <option <?php if($val=='Fresher') { echo 'selected'; } ?>>Fresher</option>
                    <option <?php if ($val=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val=='Advanced') { echo"selected"; } ?>>Advanced</option>
                  </select> <input type="button" class="btn btn-success" name="plus" id="plus" value="+">                 
                  <!--skill1 END-->
                  <!--skill2-->
                  <?php $skill2  = json_decode($get_candidate_info['skill2'],true); 					
	        		foreach($skill2 as $key2 => $val2)
	        		if($key2=='') {$val2 = 'Fresher';}
	        	    ?>
				 
				 <select id="skill2" name="skill2[]" placeholder="Select Skill...">
						<option value="">Select Skill...</option>
						<optgroup label="Skiils">
						<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
							<option value="<?php echo $skillslistval['skill_id']; ?>" <?php if($key2==$skillslistval['skill_id']) { echo 'selected'; } ?>><?php echo $skillslistval['skills']; ?></option>
						<?php } ?>
						</optgroup>						
					</select>

                  <select name="skillpro2[]" required>
                    <option <?php if($val2=='Fresher') { echo 'selected'; } ?>>Fresher</option>
                    <option <?php if ($val2=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val2=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val2=='Advanced') { echo"selected"; } ?>>Advanced</option>
                  </select>  <input type="button" class="btn btn-success" name="plus" id="plus" value="+">                
                  <!--skill2 END-->
                  <!--skill3-->
                  <?php $skill3  = json_decode($get_candidate_info['skill3'],true); 					
	        		foreach($skill3 as $key3 => $val3)
	        		if($key3=='') {$val3 = 'Fresher';}
	        	    ?>
				 <select id="skill3" name="skill3[]" placeholder="Select Skill...">
						<option value="">Select Skill...</option>
						<optgroup label="Skiils">
						<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
							<option value="<?php echo $skillslistval['skill_id']; ?>" <?php if($key3==$skillslistval['skill_id']) { echo 'selected'; } ?>><?php echo $skillslistval['skills']; ?></option>
						<?php } ?>
						</optgroup>						
					</select>

                  <select name="skillpro3[]" required>
                     <option <?php if($val3=='Fresher') { echo 'selected'; } ?>>Fresher</option>
                    <option <?php if ($val3=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val3=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val3=='Advanced') { echo"selected"; } ?>>Advanced</option>
                  </select><input type="button" class="btn btn-success" name="plus" id="plus" value="+">
                  <!--skill3 END-->
                  <!--skill4-->
                   <?php $skill4  = json_decode($get_candidate_info['skill4'],true); 					
	        		foreach($skill4 as $key4 => $val4)
	        		if($key4=='') {$val4 = 'Fresher';}
	        	    ?>
				  <select id="skill4" name="skill4[]" placeholder="Select Skill...">
						<option value="">Select Skill...</option>
						<optgroup label="Skiils">
						<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
							<option value="<?php echo $skillslistval['skill_id']; ?>" <?php if($key4==$skillslistval['skill_id']) { echo 'selected'; } ?>><?php echo $skillslistval['skills']; ?></option>
						<?php } ?>
						</optgroup>						
					</select>

                  <select name="skillpro4[]" required>
                     <option <?php if($val4=='Fresher') { echo 'selected'; } ?>>Fresher</option>
                    <option <?php if ($val4=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val4=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val4=='Advanced') { echo"selected"; } ?>>Advanced</option>
                  </select><input type="button" class="btn btn-success" name="plus" id="plus" value="+">
                  <!--skill4 END-->
                  <!--skill5-->
                  <?php $skill5  = json_decode($get_candidate_info['skill5'],true); 					
	        		foreach($skill5 as $key5 => $val5)
	        		if($key5=='') {$val5 = 'Fresher';}
	        	    ?>
				 <select id="skill5" name="skill5[]" placeholder="Select Skill...">
						<option value="">Select Skill...</option>
						<optgroup label="Skiils">
						<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
							<option value="<?php echo $skillslistval['skill_id']; ?>" <?php if($key5==$skillslistval['skill_id']) { echo 'selected'; } ?>><?php echo $skillslistval['skills']; ?></option>
						<?php } ?>
						</optgroup>						
					</select>
                  <select name="skillpro5[]" required>
                     <option <?php if($val5=='Fresher') { echo 'selected'; } ?>>Fresher</option>
                    <option <?php if ($val5=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val5=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val5=='Advanced') { echo"selected"; } ?>>Advanced</option>
                  </select><input type="button" class="btn btn-success" name="plus" id="plus" value="+">
                  <!--skill5 END-->

				</div>
				</div>
				</fieldset>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
		<!--End Skills -->
            <!--END Skills -->
       </div>     
       
   
          
           
          
            <div class="row">
	          <div class="btn-form text-right mTop-5 col-md-12">
	                  <button class="btn btn-fill mBot-10 mRight-10">Update Profile</button>
	          </div>     
	            
	            
         </div>
         
           </form>
           
   </div>         
         </div>
        </div>
       </div>
      </div>
    </section>


<script>
$('#any-location').change(function(){
    if($(this).is(":checked"))
    $('#preferred_location').fadeOut('slow');
    else
    $('#preferred_location').fadeIn('slow');

    });
</script>

<script>

  // Use className or Id instead of direct tag name
  var select = $('#total-experience').selectize({
	onChange: function(value) {
    var val =value;
    if(val==1) {
    $('#pre-role').fadeOut('slow');
    $('#year_completion, #institute, #score, #degree, #branch').fadeIn('slow');
    $("#year_completion_input, #institute_input, #score_input, #degree_input, #branch_input").prop('required',true);
    } else {
    $('#pre-role').fadeIn('slow');
    $('#year_completion, #institute, #score, #degree, #branch').fadeOut('slow');
    $("#year_completion_input, #institute_input, #score_input, #degree_input, #branch_input").prop('required',false);
    }
     }
  });

   var valload = $("#total-experience").val();
   if(valload==1) {
    $('#pre-role').fadeOut('slow');
    $('#year_completion, #institute, #score, #degree, #branch').fadeIn('slow');
    $("#year_completion_input, #institute_input, #score_input, #degree_input, #branch_input").prop('required',true);
    }
    else {
    $('#pre-role').fadeIn('slow');
    $('#year_completion, #institute, #score, #degree, #branch').fadeOut('slow');
    $("#year_completion_input, #institute_input, #score_input, #degree_input, #branch_input").prop('required',false);
    }



</script>

<script>
$('#select-gear').selectize({
sortField: 'text',
maxItems:3
});
$('#add-domain').selectize({
sortField: 'text'
});
$('#job-type').selectize({
sortField: 'text'
});
$('#gen-der').selectize({
sortField: 'text'
});
$('#total-experience').selectize({
sortField: 'text'
});
$('#primary-skill').selectize({
sortField: 'text',
allowEmptyOption: true
});
$('#current-location').selectize({
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
</script> 
<script>
$(document).ready(function () {
    var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();

    $('#datepicker').datepicker({
        minDate: new Date(currentYear, currentMonth, currentDate),
        dateFormat: 'yy-mm-dd'
    });
});
</script>

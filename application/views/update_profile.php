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
            <form method="post" name="basic-info" action="basic_info" id="basic-info-view" enctype="multipart/form-data"> 
            <div class="details" id="basic-info">
              <h1 class="title"></h1>
             
              <div class="row">
              	 <div class="col-md-4">
	                <div class="col-xs-12">
	                  <!-- First Name -->
	                  <label class="col-md-12">Name </label><div class="col-md-12"> <input name="first_name" class="form-control" placeholder="First Name*" type="text" value="<?php echo $get_candidate_info['first_name']; ?>" required></div>
	                </div>
	                
	                <div class="col-xs-12 mTop-10">
	                  <!-- Email -->
	                  <label class="col-md-12">Email </label><div class="col-md-12"> <input name="email" class="form-control" placeholder="Email*" type="email" value="<?php echo $get_candidate_info['email']; ?>" required></div>
	                </div>
	                
	                <div class="col-xs-12 mTop-10">
	                  <!-- Pancard -->
	                  <label class="col-md-12">PAN </label><div class="col-md-12"> <input type="text" name="pancard" class="form-control" placeholder="Pancard" value="<?php echo $get_candidate_info['pancard']; ?>" required/></div>
	                </div>
	                <div class="col-xs-12 mTop-10">
	                  <!-- Mobile number -->
	                  <label class="col-md-12">Mobile number</label><div class="col-md-12"> <input type="text" name="mobile_number" class="form-control" placeholder="Mobile_number*" value="<?php echo $get_candidate_info['mobile_number']; ?>" required/></div>
	                </div>
	                 <div class="col-xs-12 mTop-10">
	                  <!-- birth day -->
	                  <label class="col-md-12">Date of Birth</label><div class="col-md-12"> <input type="date" name="bday" class="form-control"  value="<?php echo $get_candidate_info['dob']; ?>" required> </div>
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
	                <div class="col-xs-12">
	                  	<label class="col-md-12">Gender</label><div class="col-md-12"> 
	                  	<select name="gender" required class="form-control">
	        			<option value=''>--select--</option>
	        			<option value ='m' <?php if($get_candidate_info['gender'] == 'm') echo"selected"; ?>>Male</option>
	        			<option value ='f' <?php if($get_candidate_info['gender'] == 'f') echo"selected"; ?>>Female</option>
	        		</select> 
			</div>
	                </div>
	
			<div class="col-xs-12 mTop-10">
	                  <label class="col-md-12">Industry</label><div class="col-md-12"> 
	                  <select name="industry"  class="form-control" required>
	                    <option value=''>--select--</option>
	                    
	                    <option value ='1' <?php if($get_candidate_info['industry'] == '1') echo"selected"; ?> >IT-Software/Software Services</option>
	                   
	                  </select>
	                </div>
	                </div>
	                  <div class="col-xs-12 mTop-10">
	                  <label class="col-md-12">Previous Role</label><div class="col-md-12"> 
	                  
	                   <input type="text" name="role" class="form-control" placeholder="role" value="<?php echo $get_candidate_info['role']; ?>" required>
	                </div>
	                </div>
	
	                  <div class="col-xs-12 mTop-10">
	                  <label class="col-md-12">Total IT experience</label><div class="col-md-12"> 
	                    <select name="total_experience" required class="form-control">
	                    <option value=''>--YEAR--</option>
	                    <option value ='1' <?php if($get_candidate_info['total_experience'] == '1') echo"selected"; ?>>Fresher</option>
	                    <option value ='2' <?php if($get_candidate_info['total_experience'] == '2') echo"selected"; ?>>1</option>
	                    <option value ='3' <?php if($get_candidate_info['total_experience'] == '3') echo"selected"; ?>>2</option>
	                    <option value ='4' <?php if($get_candidate_info['total_experience'] == '4') echo"selected"; ?>>3</option>
	                    <option value ='5' <?php if($get_candidate_info['total_experience'] == '5') echo"selected"; ?>>4</option>
	                  </select>
	                </div>
	                </div>
	
			<div class="col-xs-12 mTop-10">
		                  <label class="col-md-12">Preferred Roles</label><div class="col-md-12"> 
		                <input type="text" name="preferred_roles" class="form-control" placeholder="Preferred Roles" value="<?php echo $get_candidate_info['preferred_roles']; ?>" required>
		        </div>
		        </div>
		 </div>
	 	<div class="col-md-4">
	 	<div class="col-xs-12">
		                  <label class="col-md-12">Expected CTC</label>
		                  
		                  <div class="row">
		                  	<b class="col-md-5 small mLeft-20">Lakhs</b><b class="col-md-5 small mRight-20">Thousands</b>
		                  </div>
		                  <div class="row">
			                  <div class="col-md-5 mLeft-20"> 
			                    <select name="lakhs" required class="form-control">
			                      <option value=''>--Lakhs--</option>
			                      <option value ='0' <?php if($get_candidate_info['salary_lakhs'] == '0') echo"selected"; ?>>0</option>
			                      <option value ='1' <?php if($get_candidate_info['salary_lakhs'] == '1') echo"selected"; ?>>1</option>
			                      <option value ='2' <?php if($get_candidate_info['salary_lakhs'] == '2') echo"selected"; ?>>2</option>
			                      <option value ='3' <?php if($get_candidate_info['salary_lakhs'] == '3') echo"selected"; ?>>3</option>
			                      <option value ='4' <?php if($get_candidate_info['salary_lakhs'] == '4') echo"selected"; ?>>4</option>
			                    </select>
			                </div>
			                <div class="col-md-6"> 
			                    <select name="thousands" required class="form-control">
			                    <option value=''>--Thousands--</option>
			                    <option value ='0' <?php if($get_candidate_info['salary_thousands'] == '0') echo"selected"; ?>>0</option>
			                    <option value ='5' <?php if($get_candidate_info['salary_thousands'] == '5') echo"selected"; ?>>5</option>
			                    <option value ='10' <?php if($get_candidate_info['salary_thousands'] == '10') echo"selected"; ?>>10</option>
			                    <option value ='15' <?php if($get_candidate_info['salary_thousands'] == '15') echo"selected"; ?>>15</option>
			                    <option value ='20' <?php if($get_candidate_info['salary_thousands'] == '20') echo"selected"; ?>>20</option>
			                  </select>
			                </div>
		               	</div>
	                </div>
	 	 <div class="col-xs-12 mTop-10">
	                  <label class="col-md-12">Preferred location</label><div class="col-md-12"> 
	                    <?php $locations  = json_decode($get_candidate_info['preferred_location']); ?>
	                  <select name="preferred_location[]" required class="form-control" multiple>
	                    <option value=''>--select--</option>
	                    <option value ='1' <?php if (in_array('1', $locations)) { echo"selected"; } ?>>Trivandrum</option>
	                    <option value ='2' <?php if (in_array('2', $locations)) { echo"selected"; } ?>>Chennai</option>
	                    <option value ='3' <?php if (in_array('3', $locations)) { echo"selected"; } ?>>Madurai</option>
	                    <option value ='4' <?php if (in_array('4', $locations)) { echo"selected"; } ?>>Kochi</option>
	                    <option value ='5' <?php if (in_array('5', $locations)) { echo"selected"; } ?>>Bengalore</option>
	                  </select>
	                </div>
	 </div>
	 
	 </div>
	 
	 	
            </div>
         
            </form>
            <!-- profile details end -->
            
      <div class="row mTop-30">      
	    <!-- Upload photo -->
	    <div class="col-md-4">
	    
	            <div id="upload_photo-view">
	                  
	            	<div class="details col-md-12" id="basic-info">
	             	 <h1 class="title line2">Upload Photo</h1>
	              
	                  <!-- photo view -->
	                  <div class="row">
	                  <div class="col-md-4">
	                  
	                  <div id="photo-view"></div>
	                  <div id="photo-show">
	                   <img src="<?php echo base_url();?>upload/photos/<?php echo $get_candidate_info['photos']; ?>" width="100" height="125" class="img-thumbnail" />
			</div>
			</div>
	       		<div class="col-md-8">
				     <label class="col-md-12">Upload your Latest Photo </label><div class="col-md-12"><input value='<?php echo $get_candidate_info['photos']; ?>' type="file" name="image_file" id="image_file" size="20"  />
				</div>
			</div>
			</div>
	               <!--  <div class="btn-form text-right  mTop-10 col-xs-12">
	                  <button class="btn btn-fill mBot-10">Update Photo</button>
	                </div> -->
	            </div>
	           
	            </div>
	       </div>
            <!--End Upload Photo -->
	 <!-- Resume -->
	 <div class="col-md-4">
	              <div id="upload_resume-view">
	              <div id="resume-view-smsg"></div>
	                 
	            <div class="details col-md-12" id="basic-info">
	              <h1 class="title line2">Upload Resume</h1>
	                <div class="row">
	                  <!-- First Name -->
	                  <div class="col-md-12">
	                  <div id="resume-view"></div>
	
	                  <div id="resume-show">
	                   <div><a target="_blank" href="<?php echo base_url();?>upload/resumes/<?php echo $get_candidate_info['resume']; ?>" /><?php echo $get_candidate_info['resume']; ?></a></div>
	                  </div>
	                  </div>
	                    <div class="col-md-12">
	                  <label>Upload your Latest Resume </label>
	                  <div><input type="file" name="resume_file" id="image_file" size="20"  />
	</div>
			</div>
	                </div>
	                <!--  <div class="btn-form text-right mTop-10 col-xs-12">
	                  <button class="btn btn-fill mBot-10">Upload Resume</button>
	                </div> -->
	            </div>
	          
	            </div>
         </div>
            <!--End Resume -->

            <!-- Skills -->
             <div class="col-md-4">
            <div id="skills-view">
                 
            <div class="details col-md-12" id="basic-info">
              <h1 class="title line2">Skills</h1>
                <div class="row">
                <div class="col-md-12">
                <?php $skills = json_decode($get_candidate_info['skills']); ?>
                  <div class="form-group">
          
        <div id="sections">
        <?php foreach($skills as $keys => $values) { ?>
                  <input name="skill[]" id="skill" value='<?php echo $keys; ?>' placeholder="Skill" type="text" required />
                  <select name="proficiency[]" id="proficiency" >
                    <option <?php if($values=='Basic') { echo 'selected'; } ?> >Basic</option>
                    <option <?php if($values=='Intermediate') { echo 'selected'; } ?> >Intermediate</option>
                    <option <?php if($values=='Advanced') { echo 'selected'; } ?> >Advanced</option>
                  </select>
                  </br></br>
                <?php } ?>
        <div class="section">
      
          
                
              <fieldset>
                <input name="skill[]" id="skill" value="" placeholder="Skill" type="text"  />
                  <select name="proficiency[]" id="proficiency" required>
                    <option>Basic</option>
                    <option>Intermediate</option>
                    <option>Advanced</option>
                  </select>

              <a href="#" class='remove'><i class="fa fa-times" aria-hidden="true"></i></a>

          </fieldset>
        </div>
      </div>
	</div>
      <div class="col-md-12 paddingL-0">
      		<button class="btn btn-fill mBot-10" href="#" class='addsection'><i class="fa fa-plus" aria-hidden="true"></i></button>
      </div>
      </div>
                </div>
                </div>
                <!--  <div class="btn-form text-right col-xs-12">
                  <button class="btn btn-fill mBot-10">Update Skills</button>
                </div> -->
            </div>
         
            </form>
               
            </div>
       </div>     
            <div class="row">
	          <div class="btn-form text-right mTop-10 col-md-12">
	                  <button class="btn btn-fill mBot-10 mRight-10">Update Profile</button>
	          </div>
            </div>
   <!--End Skills -->
   </div>         
         </div>
        </div>
       </div>
      </div>
    </section>

 <script src="assets/jquery/jquery.min.js"></script>
<script>
 var i = 0;
 var original = document.getElementById('duplicater');

  function duplicate(){ 
    var clone = original.cloneNode(true); // "deep" clone
    i = ++i;
    clone.id = "duplicetor"+ i; // there can only be one element with  an ID
    original.parentNode.appendChild(clone);
    clearCloneForm(clone.id);
  }

  function clearCloneForm(id){ 
    var divId = '#'+id;
    $(divId).find("input[type^='text'], input[type^='date']").each(function() {
        $(this).val('');
    }); 
  }


</script>





       
 
     


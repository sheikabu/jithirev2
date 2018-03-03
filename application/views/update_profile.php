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
              <h1 class="title"></h1>
             
              <div class="row">
              	 <div class="col-md-4">
	                <div class="col-xs-12">
	                  <!-- First Name -->
	                  <label class="col-md-12">Name </label><div class="col-md-12"> <input name="first_name" class="form-control" placeholder="First Name*" type="text" value="<?php echo $get_candidate_info['first_name']; ?>" required></div>
	                </div>
	                
	                <div class="col-xs-12 mTop-5">
	                  <!-- Email -->
	                  <label class="col-md-12">Email </label><div class="col-md-12"> <input name="email" class="form-control" placeholder="Email*" type="email" value="<?php echo $get_candidate_info['email']; ?>" required></div>
	                </div>
	                
	                <div class="col-xs-12 mTop-5">
	                  <!-- Pancard -->
	                  <label class="col-md-12">PAN </label><div class="col-md-12"> <input type="text" name="pancard" class="form-control" placeholder="Pancard" value="<?php echo $get_candidate_info['pancard']; ?>" required/></div>
	                </div>
	                <div class="col-xs-12 mTop-5">
	                  <!-- Mobile number -->
	                  <label class="col-md-12">Mobile number</label><div class="col-md-12"> <input type="text" name="mobile_number" class="form-control" placeholder="Mobile_number*" value="<?php echo $get_candidate_info['mobile_number']; ?>" required/></div>
	                </div>
	                 <div class="col-xs-12 mTop-5">
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
	
			<div class="col-xs-12 mTop-5">
	                  <label class="col-md-12">Industry</label><div class="col-md-12"> 
	                   <input type="text" name="" class="form-control" placeholder="IT-Software/Software Services" >
	                  <!-- <select name="industry"  class="form-control" required>
	                    <option value=''>--select--</option>
	                    <option value ='1' <?php if($get_candidate_info['industry'] == '1') echo"selected"; ?> >Accounting/Finance</option>
	                    <option value ='2' <?php if($get_candidate_info['industry'] == '2') echo"selected"; ?> >Advertising/PR/MR/Events</option>
	                    <option value ='3' <?php if($get_candidate_info['industry'] == '3') echo"selected"; ?> >Animation</option>
	                    <option value ='4' <?php if($get_candidate_info['industry'] == '4') echo"selected"; ?> >IT-Software/Software Services</option>
	                    <option value ='5' <?php if($get_candidate_info['industry'] == '5') echo"selected"; ?> >KPO / Research /Analytics</option>
	                  </select> -->
	                </div>
	                </div>
	              
	              	 <div class="col-xs-12 mTop-5">
	                   <label class="col-md-12">Total IT experience</label><div class="col-md-12"> 
	                    <select name="total_experience" id="total_experience" class="form-control" placeholder="total_experience" required onchange="showDiv(this)">
	                    <option value=''>--YEAR--</option>
	                    <option value ='0-1' <?php if($get_candidate_info['total_experience'] == '0-1') echo"selected"; ?>>Fresher</option>
	                    <option value ='1-2' <?php if($get_candidate_info['total_experience'] == '1-2') echo"selected"; ?>>1-2</option>
	                    <option value ='2-3' <?php if($get_candidate_info['total_experience'] == '2-3') echo"selected"; ?>>2-3</option>
	                    <option value ='3-4' <?php if($get_candidate_info['total_experience'] == '3-4') echo"selected"; ?>>3-4</option>
	                    <option value ='4-5' <?php if($get_candidate_info['total_experience'] == '4-5') echo"selected"; ?>>4-5</option>
						<option value ='5-6' <?php if($get_candidate_info['total_experience'] == '5-6') echo"selected"; ?>>5-6</option>
	                    <option value ='6-7' <?php if($get_candidate_info['total_experience'] == '6-7') echo"selected"; ?>>6-7</option>
	                    <option value ='7-8' <?php if($get_candidate_info['total_experience'] == '7-8') echo"selected"; ?>>7-8</option>
	                    <option value ='8-9' <?php if($get_candidate_info['total_experience'] == '8-9') echo"selected"; ?>>8-9</option>
						<option value ='9-10' <?php if($get_candidate_info['total_experience'] == '9-10') echo"selected"; ?>>9-10</option>
						<option value ='10-12' <?php if($get_candidate_info['total_experience'] == '10-12') echo"selected"; ?>>10-12</option>
	                    <option value ='12-14' <?php if($get_candidate_info['total_experience'] == '12-14') echo"selected"; ?>>12-14</option>
	                    <option value ='14-16' <?php if($get_candidate_info['total_experience'] == '14-16') echo"selected"; ?>>14-16</option>
	                    <option value ='16-18' <?php if($get_candidate_info['total_experience'] == '16-18') echo"selected"; ?>>16-18</option>
						<option value ='18-20' <?php if($get_candidate_info['total_experience'] == '18-20') echo"selected"; ?>>18-20</option>
	                    <option value ='20-25' <?php if($get_candidate_info['total_experience'] == '20-25') echo"selected"; ?>>20-25</option>
	                    <option value ='25-30' <?php if($get_candidate_info['total_experience'] == '25-30') echo"selected"; ?>>25-30</option>
	                   
	                  </select>
	                </div>
	                </div>
	              
	                  <div class="col-xs-12 mTop-5" id="pre-role">
	                  <label class="col-md-12">Previous Role</label><div class="col-md-12"> 
	                  <input type="text" name="role" class="form-control" placeholder="Role" value="<?php echo $get_candidate_info['role']; ?>" required>
	                  
	                </div>
	                </div>
 					
	                <div class="col-xs-12 mTop-5">
	                  <label class="col-md-12">Job Type</label><div class="col-md-12"> 
	                    <select name="" required class="form-control">
	                   
	                    
	                    <option value ='2' <?php if($get_candidate_info[''] == '2') echo"selected"; ?>>Permanent</option>
	                    <option value ='3' <?php if($get_candidate_info[''] == '3') echo"selected"; ?>>Short Term</option>
	                    <option value ='4' <?php if($get_candidate_info[''] == '4') echo"selected"; ?>>Both</option>
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
		                  <label class="col-md-12">Expected CTC</label>
		                  <div class="col-md-12"> 
		                <input type="text" name="salary_lakhs" class="form-control" placeholder="salary_lakhs" value="<?php echo $get_candidate_info['salary_lakhs']; ?>" required>
		        </div>
	                </div>
	 	 <div class="col-xs-12 mTop-5">
	 	 		

	 	 			<div class="col-xs-12">
	                  <label class="col-md-6">Preferred location</label>
	                  <div class="col-md-6 pull-right">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="anylocation" id="any-location">
                                                    <label for="any-location" >Any locaton</label>
                                                </div>
                        </div>
					</div>
				
	                  <div class="col-md-12" id="preferred_location"> 
	                    <?php $locations  = json_decode($get_candidate_info['preferred_location']); ?>
	                  <select name="preferred_location[]" class="form-control"  placeholder="preferred_location[]" value="<?php echo $get_candidate_info['preferred_location']; ?>"required multiple>
	                    <option value=''>--select--</option>
	                    <option value ='1' <?php if (in_array('Trivandrum', $locations)) { echo"selected"; } ?>>Trivandrum</option>
	                    <option value ='2' <?php if (in_array('Chennai', $locations)) { echo"selected"; } ?>>Chennai</option>
	                    <option value ='3' <?php if (in_array('Madurai', $locations)) { echo"selected"; } ?>>Madurai</option>
	                    <option value ='4' <?php if (in_array('Kochi', $locations)) { echo"selected"; } ?>>Kochi</option>
	                    <option value ='5' <?php if (in_array('Bengalore', $locations)) { echo"selected"; } ?>>Bengalore</option>
	                  </select>
	                </div>
	    </div>
	     <div class="col-xs-12 mTop-5">
	                  <label class="col-md-12">Add Domain</label><div class="col-md-12"> 
	                    <?php $locations  = json_decode($get_candidate_info['']); ?>
	                  <select name="preferred_location1[]" required class="form-control" multiple>
	                <option value=''>--select--</option>
	                <option value ='1' <?php if (in_array('1$', $locat)) { echo"selected"; } ?>>Finance</option>
	  				<option value ='2' <?php if (in_array('2', $locat)) { echo"selected"; } ?>>Operations Management</option>
	                <option value ='5' <?php if (in_array('5', $locat)) { echo"selected"; } ?>>Supply Chain & Logistics</option>
					<option value ='6' <?php if (in_array('6', $locat)) { echo"selected"; } ?>>Banking & Insurance</option>
					<option value ='7' <?php if (in_array('7', $locat)) { echo"selected"; } ?>>Manufacturing & Product Design</option>
					<option value ='8' <?php if (in_array('8', $locat)) { echo"selected"; } ?>>Health</option>
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
	             	 
	              	<label class="col-md-12 paddingL-0 line2">Upload Photo</label>
	                  <!-- photo view -->
	                  <div class="row">
	                  <div class="col-md-4">
	                  
	                  <div id="photo-view"></div>
	                  <div id="photo-show">
	                   <img src="<?php echo base_url();?>upload/photos/<?php echo $get_candidate_info['photos']; ?>" width="100" height="125" class="img-thumbnail" />
			</div>
			</div>
	       		<div class="col-md-8">
				     <label class="col-md-12">Upload your Latest Photo </label><div class="col-md-12">
				      <input type="file" name="image_file" size="20"  />
				      <input type="hidden" value="<?php echo $get_candidate_info['photos']; ?>" name="old_image">
				</div>
			</div>
			</div>
	               <!--  <div class="btn-form text-right  mTop-5 col-xs-12">
	                  <button class="btn btn-fill mBot-10">Update Photo</button>
	                </div> -->
	            </div>
	            </form>
	            </div>
	            <!-- Resume -->
	            	  <div id="upload_resume-view" class=" mTop-20">
	              <div id="resume-view-smsg"></div>
	                  
	            <div class="details col-md-12" id="basic-info">
	              
	              <label class="col-md-12 paddingL-0 line2">Upload Resume</label>
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
	                   <input type="hidden" value="<?php echo $get_candidate_info['resume']; ?>" name="old_resume">
	</div>
			</div>
	                </div>
	                <!--  <div class="btn-form text-right mTop-5 col-xs-12">
	                  <button class="btn btn-fill mBot-10">Upload Resume</button>
	                </div> -->
	            </div>
	            </form>
	            </div>
	            <!-- end Resume -->
	            
	       </div>
            <!--End Upload Photo -->
	 <!-- Primary skill -->
	 <div class="col-md-4">
	       <div id="skills-view">
                  
            <div class="details col-md-12" id="basic-info">
              
              <label class="col-md-12 paddingL-0 line2">Primary Skill</label>
                <div class="row">
                <div class="col-md-12">
                
        <div class="form-group">
          
        	<div id="sections">
        
                  <input name="primaryskill" placeholder="Skill" type="text" required />
                  <select name="primaryproficiency" id="proficiency" required>

                    <option>Basic</option>
                    <option>Intermediate</option>
                    <option>Advanced</option>
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
			<div class="col-md-4">
			<div id="skills-view">
			<div class="details col-md-12" id="basic-info">
			<label class="col-md-12 paddingL-0 line2">Skills</label>
			<div class="row">
			<div class="col-md-12">
			<div id="sections">

				<fieldset>
				<div class="container paddingL-0" >
				<div class='element' id='div_1'>
				<?php $skills = json_decode($get_candidate_info['skills']);
				if($skills!='') {
				$index = 1; foreach($skills as $keys => $values) { ?>
				<input type='text' name="skill[]" value='<?php echo $keys; ?>' placeholder='Enter your skill' id='txt_<?php echo $index ;?>' >
				<select name="proficiency[]" id="proficiency_1" required>
				<option <?php if($values=='Fresher') { echo 'selected'; } ?>>Fresher</option>
				<option <?php if($values=='Basic') { echo 'selected'; } ?>>Basic</option>
				<option <?php if($values=='Intermediate') { echo 'selected'; } ?>>Intermediate</option>
				<option <?php if($values=='Advanced') { echo 'selected'; } ?>>Advanced</option>
				</select>
<!-- <<<<<<< HEAD -->
				<span id='remove_<?php echo $index ;?>' class='remove hidden'></span>
<!-- ======= -->
				<!-- <span id='remove_<?php echo $index ;?>' class='remove'>Remove</span> -->
<!-- >>>>>>> e1f7714a34f28684ecd402e6b6018077700dc567 -->
				<?php $index++; } } else { ?>
				<input type='text' name="skill" placeholder='Enter your skill' id='txt_1'>
				<select name="proficiency" id="proficiency_1" required>
				<option>Fresher</option>
				<option>Basic</option>
				<option>Intermediate</option>
				<option>Advanced</option>
				</select>
				<span id='remove_<?php echo $index ;?>' class='remove'>Remove</span>
				<?php } ?>

				<span class='add'><span class="btn btn-fill mBot-10" class='addsection'><i class="fa fa-plus" aria-hidden="true"></i></span></span>
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

<script type="text/javascript">
	$(document).ready(function(){

 // Add new element
 $(".add").click(function(){

  // Finding total number of elements added
  var total_element = $(".element").length;
 
  // last <div> with element class id
  var lastid = $(".element:last").attr("id");
  var split_id = lastid.split("_");
  var nextindex = Number(split_id[1]) + 1;

  var max = 5;
  // Check total number elements
  if(total_element < max ){
   // Adding new div container after last occurance of element class
   $(".element:last").after("<div class='element' id='div_"+ nextindex +"'></div>");
 
   // Adding element to <div>
   $("#div_" + nextindex).append("<input type='text' placeholder='Enter your skill' id='txt_"+ nextindex +"' name='skill1[]'> <select id='proficiency_"+ nextindex +"' name='proficiency1[]'><option>Fresher</option><option>Basic</option><option>Intermediate</option><option>Advanced</option></select><span id='remove_" + nextindex + "' class='remove'><i class='fa fa-times' aria-hidden='true'></span>");
 
  }
 
 });

 // Remove element
 $('.container').on('click','.remove',function(){
 
  var id = this.id;
  var split_id = id.split("_");
  var deleteindex = split_id[1];

  // Remove <div> with id
  $("#div_" + deleteindex).remove();
 
 }); 
});
</script>


<script>
$('#any-location').change(function(){
    if($(this).is(":checked"))
    $('#preferred_location').fadeOut('slow');
    else
    $('#preferred_location').fadeIn('slow');

    });
</script>

<script>
$(document).ready(function(){
  // Use className or Id instead of direct tag name
  $('#total_experience').on('change', function() {
    var val = $(this).val();
    if(val=='0-1')
    $('#pre-role').fadeOut('slow');
    else
    $('#pre-role').fadeIn('slow');
  })
});

</script>
       
 
     


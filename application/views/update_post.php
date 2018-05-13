<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>
<section id="post_info">
	<div class="container">
		<div class="alert-success text-center"><?php if(!empty($message)) { echo $message; } ?></div>
			<div class="col-md-12">
				<div id="message"></div>
			</div>
				<?php echo form_open('user/update_post_info');?>
				 <?php foreach($job_list as $key=>$values) { ?>
	<div class="row">
		<div class="col-md-4">
		 <div class="form-group">
	               <label>Jobcode </label>
	                <input name="Job_code"  class="form-control" placeholder="Jobcode*" type="text" value="<?php echo $values['Job_code'];?>" readonly required>
	            </div>
				 
				 <div class="form-group ">
					<label>Experience</label>
					<div class="row">
						<div class="salary col-md-6">
							<select name="min_exp" required class="form-control">
							<option value=''>Min exp</option>
							<option value ='0'<?php if($values['min_exp'] == '0') echo"selected"; ?>>0</option>
							<option value ='1'<?php if($values['min_exp'] == '1') echo"selected"; ?>>1</option>
							<option value ='2'<?php if($values['min_exp'] == '2') echo"selected"; ?>>2</option>
							<option value ='3'<?php if($values['min_exp'] == '3') echo"selected"; ?>>3</option>
							<option value ='4'<?php if($values['min_exp'] == '4') echo"selected"; ?>>4</option>
							<option value ='5'<?php if($values['min_exp'] == '5') echo"selected"; ?>>5</option>
							<option value ='6'<?php if($values['min_exp'] == '6') echo"selected"; ?>>6</option>
							<option value ='7'<?php if($values['min_exp'] == '7') echo"selected"; ?>>7</option>
							<option value ='8'<?php if($values['min_exp'] == '8') echo"selected"; ?>>8</option>
							<option value ='9'<?php if($values['min_exp'] == '9') echo"selected"; ?>>9</option>
							<option value ='10'<?php if($values['min_exp'] == '10') echo"selected"; ?>>10</option>
						</select>
						</div>
						<div class="thousands col-md-6">
							<select name="max_exp" required class="form-control">
							<option value=''>Max exp</option>
							<option value ='0'<?php if($values['max_exp'] == '0') echo"selected"; ?>>0</option>
							<option value ='1'<?php if($values['max_exp'] == '1') echo"selected"; ?>>1</option>
							<option value ='2'<?php if($values['max_exp'] == '2') echo"selected"; ?>>2</option>
							<option value ='3'<?php if($values['max_exp'] == '3') echo"selected"; ?>>3</option>
							<option value ='4'<?php if($values['max_exp'] == '4') echo"selected"; ?>>4</option>
							<option value ='5'<?php if($values['max_exp'] == '5') echo"selected"; ?>>5</option>
							<option value ='6'<?php if($values['max_exp'] == '6') echo"selected"; ?>>6</option>
							<option value ='7'<?php if($values['max_exp'] == '7') echo"selected"; ?>>7</option>
							<option value ='8'<?php if($values['max_exp'] == '8') echo"selected"; ?>>8</option>
							<option value ='9'<?php if($values['max_exp'] == '9') echo"selected"; ?>>9</option>
							<option value ='10'<?php if($values['max_exp'] == '10') echo"selected"; ?>>10</option>
							<option value ='15'<?php if($values['max_exp'] == '15') echo"selected"; ?>>15</option>
							<option value ='20'<?php if($values['max_exp'] == '20') echo"selected"; ?>>20</option>
						</select>
						</div>
					</div>
				</div>
				<div class="form-group ">
					<label>Job Type</label>
					 <div class="job_type"  id="job_type">
					  <?php $jobt  = json_decode($values['job_type']); ?>
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
				 
			 	 <div class="form-group">
					<label>Preferred Joining Date:</label>
					  <input type="data"  name="close_date_time" class="form-control" id="datepicker" value="<?php echo $values['close_date_time'];?>" placeholder="Preferred Joining"  required>
				</div>
				<div class="form-group">
	                <!-- First Name --><label>Job Description</label><br>

	                <textarea  name="job_description" rows="4" class="form-control" placeholder="Job Description*" type="text" ><?php echo $values['job_description'];?>"</textarea>
	            </div>
	        </div>

	        <div class="col-md-4"> 
	        	<div class="form-group">
	               <label>Role</label>
	                <input name="job_role" class="form-control" placeholder="Role*" type="text" value="<?php echo $values['job_role'];?>" required>
	            </div>   
	            
				<div class="form-group">
	               <label>No: of positions</label>
	                <input name="no_positions" class="form-control" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="No: of positions*" type="text" value="<?php echo $values['no_positions'];?>" required>
	            </div>
	            
	            <div class="form-group salary-form-group">
					<label>Annual CTC (Lakhs)</label>
					  <input name="salary_lakhs" class="form-control" onkeyup="if(this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'));"  placeholder="salary*" type="text" value="<?php echo $values['salary_lakhs'];?>" required>
				</div>
				<div class="form-group">
					<div class="col-md-12 paddingL-0 line2 mBot-5">
		            	<label>Primary Skill :</label>
		            	<label class="pull-right mRight-20">Proficiency</label>
		            </div>
					<?php $primary_skill  = json_decode($values['primary_skill'],true); 
        		foreach($primary_skill as $pkey => $pval)
        	?>
					  <div id="sections" class="skills">
					  <div class="section">
					
					    <fieldset >
						 
					         
								<select id="primary-skill" class="demo-default" name="primary[]" placeholder="Select Primary Skill...">
								<option value="">Select Primary Skill...</option>
								<optgroup label="primary skiils">
								<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
								<option value="<?php echo $skillslistval['skill_id']; ?>" <?php if($pkey==$skillslistval['skill_id']) { echo 'selected'; } ?>><?php echo $skillslistval['skills']; ?></option>
								<?php } ?>
								</optgroup>						
								</select>
					            <select name="proprimary[]" id="proprimary"  >
					               <option <?php if ($pval=='fresher') { echo"selected"; } ?>>Fresher</option>
					            	<option <?php if($pval==' Basic') { echo 'selected'; } ?>> Basic</option>
					            	<option <?php if ($pval=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
					            	<option <?php if ($pval=='Advanced') { echo"selected"; } ?>>Advanced</option>
					            </select>
								</fieldset>
						
					  </div>
					</div>
				</div>
			 	  <div class="form-group ">
					<label>Status</label>
					<div class="row">
						<div class="col-md-12">
							<select name="status" required class="form-control">
							<option value=''>--select--</option>
							<option value ='Draft' <?php if($values['status'] == 'Draft') echo"selected"; ?>>Draft</option>
							<option value ='Open' <?php if($values['status'] == 'Open') echo"selected"; ?>>Open</option>
							<option value ='Closed' <?php if($values['status'] == 'Closed') echo"selected"; ?>>Closed</option>
							<option value ='Cancelled' <?php if($values['status'] == 'Cancelled') echo"selected"; ?>>Cancelled</option>
						</select>
						</div>
					</div>
				</div>

				<div class="form-group">
					<input type="hidden" name="company_id" class="form-control" value='<?php echo($this->session->userdata("id")) ;  ?>' />
				</div>
				
				
				
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Preferred Location</label>
					<?php $locations  = json_decode($values['preferred_location']); ?>					

					<select id="preferred_location" name="preferred_location[]" class="demo-default" multiple placeholder="Select locations...">
					<option value="">Select location...</option>
					<optgroup label="select location">
					<?php foreach($get_cities as $citylist => $citylistval) { ?>
					<option value ='<?php echo $citylistval['city_name']; ?>' <?php if (in_array($citylistval['city_name'], $locations)) { echo"selected"; } ?>>
					<?php echo $citylistval['city_name'] ?></option>
					<?php }	 ?>
					</optgroup>
					</select>

				</div>
				<div class="form-group">
	               <label>Duration</label>
	                <input name="duration" class="form-control" placeholder="Duration*" type="text" value="<?php echo $values['duration'];?>"  required>
	            </div>

	            <div class="form-group">
	            	<div class="col-md-12 paddingL-0 line2">
			            <label>Skills</label>
			            <label class="pull-right mRight-30">Proficiency</label>
			        </div>
					  <div id="sections" class="skills">
					  <div class="section">
					 		<fieldset class="mTop-5">
							<div class="container paddingL-0" >
				<div class='element' id='div_1'>
				<div id="agreement1div">
					  <div class="button">
					  <div for="agreement1">
				
							<?php $skill1  = json_decode($values['skill1'],true); 				
        		foreach($skill1 as $key => $val)
        		if($key=='') {$val = 'Basic';}
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
					            <option <?php if ($val=='fresher') { echo"selected"; } ?>>Fresher</option>
					            	 <option <?php if ($val=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val=='Advanced') { echo"selected"; } ?>>Advanced</option>
					            </select><input name="agreement1" id="agreement1" type="button" value="+"/> 
								 </div>
				  </div>
				  </div>
								 <div id="agreement2div">
					  <div class="button">
					  <div for="agreement2">
								<?php $skill1  = json_decode($values['skill2'],true); 				
        		foreach($skill1 as $key1 => $val1)
        		if($key1=='') {$val1 = 'Basic';}
        	    ?>
					             <select id="skill2" name="skill2[]" placeholder="Select Skill...">
						<option value="">Select Skill...</option>
						<optgroup label="Skiils">
						<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
							<option value="<?php echo $skillslistval['skill_id']; ?>" <?php if($key1==$skillslistval['skill_id']) { echo 'selected'; } ?>><?php echo $skillslistval['skills']; ?></option>
						<?php } ?>
						</optgroup>						
					</select>
					            <select name="skillpro2[]"  required>
					            <option <?php if ($val1=='fresher') { echo"selected"; } ?>>Fresher</option>
					            	<option <?php if ($val1=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val1=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val1=='Advanced') { echo"selected"; } ?>>Advanced</option>
					            </select><input name="agreement2" id="agreement2" type="button" value="+"/> 
								 </div>
				  </div>
				  </div>
								  <div id="agreement3div">
					  <div class="button">
					  <div for="agreement3">
								<?php $skill2  = json_decode($values['skill3'],true); 				
        		foreach($skill2 as $key2 => $val2)
        		if($key2=='') {$val2 = 'Basic';}
        	    ?>
					            	 <select id="skill3" name="skill3[]" placeholder="Select Skill...">
						<option value="">Select Skill...</option>
						<optgroup label="Skiils">
						<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
							<option value="<?php echo $skillslistval['skill_id']; ?>" <?php if($key2==$skillslistval['skill_id']) { echo 'selected'; } ?>><?php echo $skillslistval['skills']; ?></option>
						<?php } ?>
						</optgroup>						
					</select>
					            <select name="skillpro3[]" required>
<option <?php if ($val2=='fresher') { echo"selected"; } ?>>Fresher</option>
					            	 <option <?php if ($val2=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val2=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val2=='Advanced') { echo"selected"; } ?>>Advanced</option>
					            </select><input name="agreement3" id="agreement3" type="button" value="+"/> 
								 </div>
				  </div>
				  </div>
								 <div id="agreement4div">
					  <div class="button">
					  <div for="agreement4">
								<?php $skill3  = json_decode($values['skill4'],true); 				
        		foreach($skill3 as $key3 => $val3)
        		if($key3=='') {$val3 = 'Basic';}
        	    ?>
					             <select id="skill4" name="skill4[]" placeholder="Select Skill...">
						<option value="">Select Skill...</option>
						<optgroup label="Skiils">
						<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
							<option value="<?php echo $skillslistval['skill_id']; ?>" <?php if($key3==$skillslistval['skill_id']) { echo 'selected'; } ?>><?php echo $skillslistval['skills']; ?></option>
						<?php } ?>
						</optgroup>						
					</select>
					            <select name="skillpro4[]"  required>
					            <option <?php if ($val3=='fresher') { echo"selected"; } ?>>Fresher</option>
					            	<option <?php if ($val3=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val3=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val3=='Advanced') { echo"selected"; } ?>>Advanced</option>
					            </select><input name="agreement4" id="agreement4" type="button" value="+"/> 
								 </div>
				  </div>
				  </div>
								  <div id="agreement5div">
					  <div class="button">
					  <div for="agreement5">
								<?php $skill4  = json_decode($values['skill5'],true); 				
        		foreach($skill4 as $key4 => $val4)
        		
        	    ?>
					             <select id="skill5" name="skill5[]" placeholder="Select Skill...">
						<option value="">Select Skill...</option>
						<optgroup label="Skiils">
						<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
							<option value="<?php echo $skillslistval['skill_id']; ?>" <?php if($key4==$skillslistval['skill_id']) { echo 'selected'; } ?>><?php echo $skillslistval['skills']; ?></option>
						<?php } ?>
						</optgroup>						
					</select>
					            <select name="skillpro5[]" required>
					            <option <?php if ($val4=='fresher') { echo"selected"; } ?>>Fresher</option>
					            	<option <?php if ($val4=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val4=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val4=='Advanced') { echo"selected"; } ?>>Advanced</option>
					            </select><input name="agreement5" id="agreement5" type="button" value="+"/> 
								 </div>
				  </div>
				  </div>
								</div>
								</div>
								</fieldset>
						
					</div>
				</div>
			</div>
			</div>
		</div>
		</div>
		<input type="hidden" name="job_id" value="<?php echo $values['job_id'];?>">
		<?php echo '<br><hr>'; } ?> 
		<div class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-fill pull-right mBot-10">update</button>
			</div>
		</div>
		
	</div>
</section>
<script src="assets/jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){

  $("#agreement1").click(function () {
      if ($(this).is(":button")) {
          $("#agreement2div").show();
      }
  });
  $("#agreement2").click(function () {
      if ($(this).is(":button")) {
          $("#agreement3div").show();
      }
  });
  $("#agreement3").click(function () {
      if ($(this).is(":button")) {
          $("#agreement4div").show();
      }
  });
   $("#agreement4").click(function () {
      if ($(this).is(":button")) {
          $("#agreement5div").show();
      }
  });
  $("#agreement5").click(function () {
      if ($(this).is(":button")) {
          $("#agreement5div").show();
      }
  });

  $("#agreement2div").hide();
  $("#agreement3div").hide();
  $("#agreement4div").hide();
   $("#agreement5div").hide();
    $("#agreement5div").hide();


});

</script>
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
  ("#div_" + nextindex).append("<input type='text' placeholder='Enter your skill' id='txt_"+ nextindex +"' name='skill1[]'> <select id='proficiency_"+ nextindex +"' name='proficiency1[]'><option>Basic</option><option>Intermediate</option><option>Advanced</option></select><span id='remove_" + nextindex + "' class='remove'><i class='fa fa-times' aria-hidden='true'></span>");
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
$(document.body).addClass('update_post');

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

       
 
     


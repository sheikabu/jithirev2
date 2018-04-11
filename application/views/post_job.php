<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>

<section id="post_job">
	<div class="container">
		<div class="alert-success text-center"><?php if(!empty($message)) { echo $message; } ?></div>
			<div class="col-md-12">
				<div id="message"></div>
			</div>
				<?php echo form_open('user/insert_job_post');?>
	<div class="row">
		<div class="col-md-4">
		 <div class="form-group">
	               <label>Jobcode </label>
	                <input name="Job_code" class="form-control" placeholder="Jobcode*" type="text" value="" required>
	            </div>
				 
				 <div class="form-group ">
					<label>Experience</label>
					<div class="row">
						<div class="salary col-md-6">
							<select name="min_exp" required class="form-control">
							<option value=''>Min exp</option>
							<option value ='0'>0</option>
							<option value ='1'>1</option>
							<option value ='2'>2</option>
							<option value ='3'>3</option>
							<option value ='4'>4</option>
							<option value ='5'>5</option>
							<option value ='6'>6</option>
							<option value ='7'>7</option>
							<option value ='8'>8</option>
							<option value ='9'>9</option>
							<option value ='10'>10</option>
						</select>
						</div>
						<div class="thousands col-md-6">
							<select name="max_exp" required class="form-control">
							<option value=''>Max exp</option>
							<option value ='0'>0</option>
							<option value ='1'>1</option>
							<option value ='2'>2</option>
							<option value ='3'>3</option>
							<option value ='4'>4</option>
							<option value ='5'>5</option>
							<option value ='6'>6</option>
							<option value ='7'>7</option>
							<option value ='8'>8</option>
							<option value ='9'>9</option>
							<option value ='10'>10</option>
							<option value ='15'>15</option>
							<option value ='20'>20</option>
						</select>
						</div>
					</div>
				</div>
				<div class="form-group ">
					<label>Job Type</label>
					 <div class="job_type">
						<select name="job_type" required class="form-control">
						<option value=''>--select--</option>
		                    <option value ='Permanent'>Permanent</option>
		                    <option value ='Short Term' >Short Term</option>
		                    <option value ='Both' >Both</option>
						
					</select>
					</div>
				</div>
			 	 <div class="form-group salary-form-group">
					<label>Preferred Joining Date:</label>
					  <input name="close_date_time" class="form-control" id="joining_date" placeholder="Preferred Joining" type="text"  required>
				</div>
				<div class="form-group">
	                <!-- First Name --><label>Job Description</label><br>

	                <textarea rows="4" class="width-fluid" name="job_description" required></textarea>
	            </div>
	        </div>

	        <div class="col-md-4"> 
	        	<div class="form-group">
	               <label>Role</label>
	                <input name="role" class="form-control" placeholder="Role*" type="text" value="" required>
	            </div>   
	            
				<div class="form-group">
	               <label>No: of positions</label>
	                <input name="no_positions" class="form-control" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="No: of positions*" type="text" value="" required>
	            </div>
	            
	            <div class="form-group salary-form-group">
					<label>Annual CTC (Lakhs)</label>
					  <input name="salary_lakhs" class="form-control" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" placeholder="salary*" type="text" value="" required>
				</div>
				<div class="form-group skills">
	            	<label>Primary Skill :</label>
					  <div id="sections">
					  <div class="section">
					
					    <fieldset>
							<select id="primary-skill" class="demo-default" name="primary[]" placeholder="Select Primary Skill...">
							<option value="">Select Primary Skill...</option>
							<optgroup label="primary skiils">
							<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
							<option value="<?php echo $skillslistval['skills']; ?>"><?php echo $skillslistval['skills']; ?></option>
							<?php } ?>
							</optgroup>						
							</select>

							<select name="proprimary[]" id="proprimary" required>
							<option value = 'fresher'>Fresher</option>
							<option value = 'basic'>Basic</option>
							<option value = 'Intermediate'>Intermediate</option>
							<option value = 'Advanced'>Advanced</option>
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
							<option value ='Draft'>Draft</option>
							<option value ='Open'>Open</option>
							<option value ='Closed'>Closed</option>
							<option value ='Cancelled'>Cancelled</option>
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
					
					 <select id="preferred_location" name="preferred_location[]" multiple="" placeholder="Select Locations...">
						<option value="">Select Locations...</option>
						<optgroup label="Locations">
						<?php foreach($get_cities as $citylist => $citylistval) { ?>
							<option value="<?php echo $citylistval['city_name']; ?>"><?php echo $citylistval['city_name']; ?></option>
						<?php } ?>
						</optgroup>						
					</select>

				</div>
				<div class="form-group">
	               <label>Duration</label>
	                <input name="duration" class="form-control" placeholder="Duration*" type="text" value="" required>
	            </div>

	            <div class="form-group skills">
		            <label>Skills</label>
					  <div id="sections">
					  <div class="section">
					 		<fieldset class="mTop-5">					            
								<select id="skill1" name="skill1[]" placeholder="Select Skill...">
								<option value="">Select Skill...</option>
								<optgroup label="Skiils">
								<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
								<option value="<?php echo $skillslistval['skills']; ?>"><?php echo $skillslistval['skills']; ?></option>
								<?php } ?>
								</optgroup>						
								</select>
					            <select name="skillpro1[]" id="skillpro1" required>
					                <option value = 'fresher'>Fresher</option>
					            	<option value = 'basic'> Basic</option>
					            	<option value = 'Intermediate'>Intermediate</option>
					            	<option value = 'Advanced'>Advanced</option>
					            </select>
								</fieldset>
								<fieldset class="mTop-5">					           
					            <select id="skill2" name="skill2[]" placeholder="Select Skill...">
								<option value="">Select Skill...</option>
								<optgroup label="Skiils">
								<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
								<option value="<?php echo $skillslistval['skills']; ?>"><?php echo $skillslistval['skills']; ?></option>
								<?php } ?>
								</optgroup>						
								</select>
					            <select name="skillpro2[]" id="skillpro2" required>
					            <option value = 'fresher'>Fresher</option>
					            	<option value = 'basic'> Basic</option>
					            	<option value = 'Intermediate'>Intermediate</option>
					            	<option value = 'Advanced'>Advanced</option>
					            </select>
								</fieldset class="mTop-5">
								<fieldset class="mTop-5">
					            <select id="skill3" name="skill3[]" placeholder="Select Skill...">
								<option value="">Select Skill...</option>
								<optgroup label="Skiils">
								<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
								<option value="<?php echo $skillslistval['skills']; ?>"><?php echo $skillslistval['skills']; ?></option>
								<?php } ?>
								</optgroup>						
								</select>
					            <select name="skillpro3[]" id="skillpro3" required>
					            <option value = 'fresher'>Fresher</option>
					            	<option value = 'basic'> Basic</option>
					            	<option value = 'Intermediate'>Intermediate</option>
					            	<option value = 'Advanced'>Advanced</option>
					            </select>
								</fieldset>
								<fieldset class="mTop-5">
					            <select id="skill4" name="skill4[]" placeholder="Select Skill...">
								<option value="">Select Skill...</option>
								<optgroup label="Skiils">
								<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
								<option value="<?php echo $skillslistval['skills']; ?>"><?php echo $skillslistval['skills']; ?></option>
								<?php } ?>
								</optgroup>						
								</select>
					            <select name="skillpro4[]" id="skillpro4" required>
					            <option value = 'fresher'>Fresher</option>
					            	<option value = 'basic'> Basic</option>
					            	<option value = 'Intermediate'>Intermediate</option>
					            	<option value = 'Advanced'>Advanced</option>
					            </select>
								</fieldset>
								<fieldset class="mTop-5">
					            <select id="skill5" name="skill5[]" placeholder="Select Skill...">
								<option value="">Select Skill...</option>
								<optgroup label="Skiils">
								<?php foreach($get_skills as $skiilslist => $skillslistval) { ?>
								<option value="<?php echo $skillslistval['skills']; ?>"><?php echo $skillslistval['skills']; ?></option>
								<?php } ?>
								</optgroup>						
								</select>
					            <select name="skillpro5[]" id="skillpro5" required>
					            <option value = 'fresher'>Fresher</option>
					            	<option value = 'basic'> Basic</option>
					            	<option value = 'Intermediate'>Intermediate</option>
					            	<option value = 'Advanced'>Advanced</option>
					            </select>
								</fieldset>
						
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-fill pull-right mBot-10">submit</button>
			</div>
		</div>
	</div>
</section>
<script>
$(function(){
   
    $('#city').autocomplete('data.php?mode=sql', {
        width: 200,
        max: 5
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

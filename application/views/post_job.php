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
					<label>Closing Date :</label>
					  <input name="closing_date" class="form-control" placeholder="" type="date" value="" required>
				</div>
				<div class="form-group">
	                <!-- First Name --><label>Job Description</label><br>

	                <textarea rows="4" cols="54" name="job_description" required></textarea>
	            </div>
	        </div>

	        <div class="col-md-4"> 
	        	<div class="form-group">
	               <label>Role</label>
	                <input name="role" class="form-control" placeholder="Role*" type="text" value="" required>
	            </div>   
	            
				<div class="form-group">
	               <label>No: of positions</label>
	                <input name="no_positions" class="form-control" placeholder="No: of positions*" type="text" value="" required>
	            </div>
	            
	            <div class="form-group salary-form-group">
					<label>Salary</label>
					  <input name="salary_lakhs" class="form-control" placeholder="salary*" type="text" value="" required>
				</div>
				<div class="form-group">
	            	<label>Primary Skill :</label>
					  <div id="sections">
					  <div class="section">
					
					    <fieldset>
						 
					            <input name="primary[]" id="primary" value="<?php echo $key; ?>" placeholder="Skill" type="text" required />
					            <select name="proprimary[]" id="proprimary" required>
					            	<option value = 'basic'> Basic</option>
					            	<option value = 'Intermediate'>Intermediate</option>
					            	<option value = 'Advanced'>Advanced</option>
					            </select>
								</fieldset>
						
					  </div>
					</div>
				</div>
			 
				<div class="form-group">
					<input type="hidden" name="company_id" class="form-control" value='<?php echo($this->session->userdata("id")) ;  ?>' />
				</div>
				<div class="form-group">
					<input type="hidden" name="status" value="active" />
				</div>
				
				
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Preferred Location</label>
					<select name="preferred_location[]" required class="form-control" multiple>
						<option value ='Trivandrum'>Trivandrum</option>
						<option value ='Chennai'>Chennai</option>
						<option value ='Madurai'>Madurai</option>
						<option value ='Kochi'>Kochi</option>
						<option value ='Bengalore'>Bengalore</option>
					</select>
				</div>
				<div class="form-group">
	               <label>Duration</label>
	                <input name="duration" class="form-control" placeholder="Duration*" type="text" value="" required>
	            </div>

	            <div class="form-group">
		            <label>Skills</label>
					  <div id="sections">
					  <div class="section">
					 <fieldset>
					            <input name="skill[]" id="skill" value="<?php echo $key1; ?>" placeholder="Skill" type="text" required />
					            <select name="proficiency[]" id="proficiency" required>
					            	<option value = 'basic'> Basic</option>
					            	<option value = 'Intermediate'>Intermediate</option>
					            	<option value = 'Advanced'>Advanced</option>
					            </select>
								</fieldset>
								<fieldset>
					            <input name="skill1[]" id="skill1" value="<?php echo $key2; ?>" placeholder="Skill" type="text" required />
					            <select name="skillpro1[]" id="skillpro1" required>
					            	<option value = 'basic'> Basic</option>
					            	<option value = 'Intermediate'>Intermediate</option>
					            	<option value = 'Advanced'>Advanced</option>
					            </select>
								</fieldset>
								<fieldset>
					            <input name="skill2[]" id="skill2" value="<?php echo $key3; ?>" placeholder="Skill" type="text" required />
					            <select name="skillpro2[]" id="skillpro2" required>
					            	<option value = 'basic'> Basic</option>
					            	<option value = 'Intermediate'>Intermediate</option>
					            	<option value = 'Advanced'>Advanced</option>
					            </select>
								</fieldset>
								<fieldset>
					            <input name="skill3[]" id="skill3" value="<?php echo $key4; ?>" placeholder="Skill" type="text" required />
					            <select name="skillpro3[]" id="skillpro3" required>
					            	<option value = 'basic'> Basic</option>
					            	<option value = 'Intermediate'>Intermediate</option>
					            	<option value = 'Advanced'>Advanced</option>
					            </select>
								</fieldset>
								<fieldset>
					            <input name="skill4[]" id="skill4" value="<?php echo $key5; ?>" placeholder="Skill" type="text" required />
					            <select name="skillpro4[]" id="skillpro4" required>
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



       
 
     


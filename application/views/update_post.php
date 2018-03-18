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
				<?php echo form_open('user/post_info');?>
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
					 <div class="job_type">
						<select name="job_type" required class="form-control" >
						<option value='' >--select--</option>
		                    <option value ='Permanent' <?php if($values['job_type'] == 'Permanent') echo"selected"; ?>>Permanent</option>
		                    <option value ='Short Term' <?php if($values['job_type'] == 'Short Term') echo"selected"; ?>>Short Term</option>
		                    <option value ='Both' <?php if($values['job_type'] == 'Both') echo"selected"; ?>>Both</option>
						
					</select>
					</div>
				</div>
			 	 <div class="form-group salary-form-group">
					<label>Closing Date :</label>
					  <input name="close_date_time" class="form-control" placeholder="" type="date" value="<?php echo $values['close_date_time'];?>"  required>
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
	                <input name="no_positions" class="form-control" placeholder="No: of positions*" type="text" value="<?php echo $values['no_positions'];?>" required>
	            </div>
	            
	            <div class="form-group salary-form-group">
					<label>Salary</label>
					  <input name="salary_lakhs" class="form-control" placeholder="salary*" type="text" value="<?php echo $values['salary_lakhs'];?>" required>
				</div>
				<div class="form-group">
	            	<label>Primary Skill :</label>
					<?php $primary_skill  = json_decode($values['primary_skill'],true); 
        		foreach($primary_skill as $pkey => $pval)
        	?>
					  <div id="sections">
					  <div class="section">
					
					    <fieldset >
						 
					            <input class="width-60per" name="primary[]" id="primary" value="<?php echo $pkey; ?>" placeholder="Skill" type="text"  required />
					            <select name="proprimary[]" id="proprimary"  >
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
							<select name="status" required class="form-control" value="<?php echo $values['status'];?>">
							<option value=''>--select--</option>
							<option value ='0'<?php if($values['status'] == 'Draft') echo"selected"; ?>>Draft</option>
							<option value ='1'<?php if($values['status'] == 'Open') echo"selected"; ?>>Open</option>
							<option value ='2'<?php if($values['status'] == 'Closed') echo"selected"; ?>>Closed</option>
							<option value ='3'<?php if($values['status'] == 'Cancelled') echo"selected"; ?>>Cancelled</option>
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
					<select name="preferred_location[]" required class="form-control" placeholder="preferred_location[]" value="<?php echo $values['preferred_location']; ?>"required multiple>
						<option value ='Trivandrum'<?php if (in_array('Trivandrum', $locations)) { echo"selected"; } ?>>Trivandrum</option>
						<option value ='Chennai'<?php if (in_array('Chennai', $locations)) { echo"selected"; } ?>>Chennai</option>
						<option value ='Madurai'<?php if (in_array('Madurai', $locations)) { echo"selected"; } ?>>Madurai</option>
						<option value ='Kochi'<?php if (in_array('Kochi', $locations)) { echo"selected"; } ?>>Kochi</option>
						<option value ='Bengalore'<?php if (in_array('Bengalore', $locations)) { echo"selected"; } ?>>Bengalore</option>
					</select>
				</div>
				<div class="form-group">
	               <label>Duration</label>
	                <input name="duration" class="form-control" placeholder="Duration*" type="text" value="<?php echo $values['duration'];?>"  required>
	            </div>

	            <div class="form-group">
		            <label>Skills</label>
					  <div id="sections">
					  <div class="section">
					 		<fieldset class="mTop-5">
							<?php $skills  = json_decode($values['skills'],true); 				
        		foreach($skills as $key => $val)
        		if($key=='') {$val = 'Basic';}
        	    ?>
					            <input name="skills[]" id="skill" class="width-60per"  value="<?php echo $key; ?>" placeholder="Skill" type="text" required />
					            <select name="proficiency[]" required>
					            	 <option <?php if ($val=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val=='Advanced') { echo"selected"; } ?>>Advanced</option>
					            </select>
								</fieldset>
								<fieldset class="mTop-5">
								<?php $skill1  = json_decode($values['skill1'],true); 				
        		foreach($skill1 as $key1 => $val1)
        		if($key1=='') {$val1 = 'Basic';}
        	    ?>
					            <input name="skill1[]" id="skill" class="width-60per" value="<?php echo $key1; ?>" placeholder="Skill" type="text" required />
					            <select name="skillpro1[]"  required>
					            	<option <?php if ($val1=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val1=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val1=='Advanced') { echo"selected"; } ?>>Advanced</option>
					            </select>
								</fieldset >
								<fieldset class="mTop-5">
								<?php $skill2  = json_decode($values['skill2'],true); 				
        		foreach($skill2 as $key2 => $val2)
        		if($key2=='') {$val2 = 'Basic';}
        	    ?>
					            <input name="skill2[]" id="skill" class="width-60per" value="<?php echo $key2; ?>" placeholder="Skill" type="text" required />
					            <select name="skillpro2[]" required>
					            	 <option <?php if ($val2=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val2=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val2=='Advanced') { echo"selected"; } ?>>Advanced</option>
					            </select>
								</fieldset>
								<fieldset class="mTop-5">
								<?php $skill3  = json_decode($values['skill3'],true); 				
        		foreach($skill3 as $key3 => $val3)
        		if($key3=='') {$val3 = 'Basic';}
        	    ?>
					            <input name="skill3[]" id="skill" class="width-60per" value="<?php echo $key3; ?>" placeholder="Skill" type="text" required />
					            <select name="skillpro3[]"  required>
					            	<option <?php if ($val3=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val3=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val3=='Advanced') { echo"selected"; } ?>>Advanced</option>
					            </select>
								</fieldset>
								<fieldset class="mTop-5">
								<?php $skill4  = json_decode($values['skill4'],true); 				
        		foreach($skill4 as $key4 => $val4)
        		if($key4=='') {$val4 = 'Basic';}
        	    ?>
					            <input name="skill4[]" id="skill" class="width-60per" value="<?php echo $key4; ?>" placeholder="Skill" type="text" required />
					            <select name="skillpro4[]" required>
					            	<option <?php if ($val4=='Basic') { echo"selected"; } ?>>Basic</option>
                    <option <?php if ($val4=='Intermediate') { echo"selected"; } ?>>Intermediate</option>
                    <option <?php if ($val4=='Advanced') { echo"selected"; } ?>>Advanced</option>
					            </select>
								</fieldset>
						
					</div>
				</div>
			</div>
			</div>
		</div>
		</div>
		
		<?php echo '<br><hr>'; } ?> 
		<div class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-fill pull-right mBot-10">update</button>
			</div>
		</div>
		
	</div>
</section>



       
 
     


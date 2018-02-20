<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>
<br><br><br><br>

<div class="row">
	<div class="container">
	<h2 class="section-heading text-uppercase">Post New Job</h2>
	
	<div class="alert-success text-center"><?php if(!empty($message)) { echo $message; } ?></div>
		<div class="col-md-12">
		<div id="message"></div>
			<?php echo form_open('user/insert_job_post');?>
<div class="row">
	<div class="col-md-6">
			 <div class="form-group">
               <label>Role</label>
                <input name="role" class="form-control" placeholder="Role*" type="text" value="" required>
            </div>
          <div class="form-group">
                <label>Min Experience</label><br>
              <input name="min_exp" class="form-control" placeholder="Min Experience*" type="text" value="" required>
            </div> 

            <div class="form-group">
            <label>Skills</label>
			  <div id="sections">
			  <div class="section">
			
			    <fieldset>
			            <input name="skill[]" id="skill" value="" placeholder="Skill" type="text" required />
			            <select name="proficiency[]" id="proficiency" required>
			            	<option>Basic</option>
			            	<option>Intermediate</option>
			            	<option>Advanced</option>
			            </select>
			        <a href="#" class='remove'><i class="fa fa-times" aria-hidden="true"></i></a>

			    </fieldset>
			    <br>
			  </div>
			</div>

			<p><a href="#" class='addsection'><i class="fa fa-plus" aria-hidden="true"></i>Add More</a></p>
			</div>
		
		     <div class="form-group">
                <!-- First Name --><label>Job Description</label><br>

                <textarea rows="4" cols="50" name="job_description" required></textarea>
            </div> 
        </div>
        <div class="col-md-6">    
            <div class="form-group">
				<label>Preferred Location</label>
				
				<select name="preferred_location[]" required class="form-control" multiple>
					<option value=''>--select--</option>
					<option value ='Trivandrum'>Trivandrum</option>
					<option value ='Chennai'>Chennai</option>
					<option value ='Madurai'>Madurai</option>
					<option value ='Kochi'>Kochi</option>
					<option value ='Bengalore'>Bengalore</option>
				</select>
			</div>
			<div class="form-group">
               <label>No: of positions</label>
                <input name="no_positions" class="form-control" placeholder="No: of positions*" type="text" value="" required>
            </div>
            <div class="form-group">
               <label>Duration</label>
                <input name="duration" class="form-control" placeholder="Duration*" type="text" value="" required>
            </div>
            <div class="form-group salary-form-group">
				<label>Salary</label>
				 <div class="lakhs">Lakhs
					<select name="lakhs" required class="form-control">
					<option value=''>--Lakhs--</option>
					<option value ='0'>0</option>
					<option value ='1'>1</option>
					<option value ='2'>2</option>
					<option value ='3'>3</option>
					<option value ='4'>4</option>
				</select>
				</div>
				<div class="thousands">Thousands
					<select name="thousands" required class="form-control">
					<option value=''>--Thousands--</option>
					<option value ='0'>0</option>
					<option value ='5'>5</option>
					<option value ='10'>10</option>
					<option value ='15'>15</option>
					<option value ='20'>20</option>
				</select>
				</div>
			</div>
			<div class="form-group">
				<input type="hidden" name="company_id" class="form-control" value='<?php echo($this->session->userdata("id")) ;  ?>' />
			</div>
			<div class="form-group">
				<input type="hidden" name="status" value="active" />
			</div>
			
			<button type="submit" class="btn btn-fill pull-right mBot-10">submit</button>
			</div>
		</div>
	</div>
	</div>
</div>




       
 
     


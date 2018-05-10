<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>
<section id="posted_jobs">
	<div class="row">
		<div class="container matching_job_container">
		   <div class="shortlisted_candidates">
		      <h2>Shortlisted Candidates</h2>
		   	<table class="table" id="shortlisted_candidates-table">
				<thead>
			    	<tr>
			    	    <th></th>
			    	    <th>Name</th>
				      	<th>Email</th>
				      	<th>Phone</th>
					  	<th>View</th>					  	
			    	</tr>
			  	</thead>
			  	<tbody>

			  	<?php foreach($shortlisted_candidates as $key=>$values) { ?>

			  		<tr>
			  		    <td></td>
			  		    <td><?php echo $values['name']; ?></td>
			      		<td><?php echo $values['email']; ?></td>
			      		<td><?php echo $values['mobile_number']; ?></td>
			      		<td><a href="<?php echo site_url() ?>user/view_profile/<?php echo $values['user_id']; ?>/<?php echo $this->uri->segment(3); ?>/job" class="link">View Profile</a></td>
			      	</tr>

			    	<?php } ?>
			   </tbody>
			</table>
		   </div>
			<div class="col-md-12">
			<div id="message"><?php  $msg = $this->uri->segment(4); if($msg == 'success'){ echo 'Job Updated Successfully';  }  ?></div>
				<?php //echo form_open('post_job/insert_job_post');?>
				<?php foreach($job_list as $key=>$values) { ?>
					<div class="row">
						<div class="col-md-12">
							<a class="pull-right nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/update_post/<?php echo $values['job_id']; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="col-xs-12"><label class="col-md-4">Job code:</label> <span class="col-md-8"><?php echo $values['Job_code'];?></span>
							</div>
							
							<div class="col-xs-12"><label class="col-md-4">Experience:</label><span class="col-md-8"><?php echo $values['min_exp'];?> - <?php echo $values['max_exp'];?> Years</span>
							</div>
							<div class="col-xs-12"><label class="col-md-4">Duration:</label><span class="col-md-8"> <?php echo $values['duration'];?></span></div>
							<div class="col-xs-12"><label class="col-md-4">No of Positions:</label><span class="col-md-8"> <?php echo $values['no_positions'];?></span></div>
							<div class="col-xs-12"><label class="col-md-4">Primary skills: </label><span class="col-md-8">
								<?php  $primary_skill = json_decode($values['primary_skill'], true);
					                  foreach($primary_skill as $key => $value) {
						                  		foreach ($get_skills as $skey => $svalue) {
													if($svalue['skill_id']==$key) {
														echo $svalue['skills'] .' - '.$value;
												}
											}			                  		
					                  	}

							    ?></span>
					    	</div>
					    	<div class="col-xs-12"><label class="col-md-4">Skills: </label>
							 <span class="col-md-8 pull-right skills-wrap">
			                  <?php 
			                  $skill1 = json_decode($values['skill1']);
			                  $skill2 = json_decode($values['skill2']);
			                  $skill3 = json_decode($values['skill3']);
			                  $skill4 = json_decode($values['skill4']);
			                  $skill5 = json_decode($values['skill5']);
			                  foreach ($skill1 as $key1 => $value1)

		                  	foreach ($get_skills as $skillskey => $skillsvalue) {
		                  		
		                  		if($skillsvalue['skill_id']==$key1) {
		                  if($key1!='_empty_'){
		                  echo $skill1 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value1.'</span><br>'; } }
		                  
			              foreach ($skill2 as $key2 => $value2)
			              		if($skillsvalue['skill_id']==$key2) {
			              	 if($key2!='_empty_'){
			                  echo $skill2 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value2.'</span><br>';} }
			              
			              foreach ($skill3 as $key3 => $value3)
			              	if($skillsvalue['skill_id']==$key3) {
			              	 if($key3!='_empty_'){
			                  echo $skill3 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value3.'</span><br>';} }
			             
			              foreach ($skill4 as $key4 => $value4)
			              	 if($skillsvalue['skill_id']==$key4) {
			              	  if($key4!='_empty_'){
			                  echo $skill4 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value4.'</span><br>';} }
			               
			              foreach ($skill5 as $key5 => $value5)
			              	if($skillsvalue['skill_id']==$key5) {
			              	if($key5!='_empty_'){
			                  echo $skill5 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value5.'</span><br>';} }
			             }
				                  ?>
			                  </span>
							</div> 
						</div>
						<div class="col-md-6">
								 <div class="col-xs-12">
						 			 <label class="col-md-4">Status:</label><span class="col-md-8"> <?php echo $values['status'];?></span>
			           			 </div>
								<div class="col-xs-12"><label class="col-md-4">Job Type:</label><span class="col-md-8">

								<?php
									foreach ($get_job_type as $key => $value) {
										if($value['job_type_id']==$values['job_type']) {
											echo $value['job_type'];
										}
									} 
								?></span>

								</div>
								<div class="col-xs-12"><label class="col-md-4">Role:</label> <span class="col-md-8"><?php echo $values['job_role'];?></span>
								</div>
								<div class="col-xs-12"><label class="col-md-4">Annual CTC (Lakhs):</label><span class="col-md-8"><?php echo $values['salary_lakhs'];?> Lakhs  </span></div>
								
								<div class="col-xs-12"><label class="col-md-4">Location:</label><span class="col-md-8 inline-flex">
						<?php $locations= json_decode($values['preferred_location'], true);
								foreach($locations as $lkey => $lvalues) {
									$ploca .= $lvalues.', ';
								} echo rtrim($ploca,', '); unset($ploca);
								?>
								</span>
								</div>
						</div>
					</div>
					<div class="row">

						<div class="col-md-12">
								<label class="col-md-4">Job Description:</label><div class="col-md-8 mLeft-5"> <?php echo $values['job_description'];?></div>
							</div>

					</div>
					<div class="row">
						<div class="col-md-6 mTop-10">
							<div class="col-xs-12">
			                <label class="col-md-4">Opening:</label><span class="col-md-8"><?php
			              echo $values['open_date_time']; 
			                ?></span>
			            </div>
						</div>
						<div class="col-md-6 text-right">
							<div class="col-xs-12">
			                	<label class="col-md-4">Preferred Joining:</label><span class="col-md-8"> <?php echo $values['close_date_time'];?></span>
			            	</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-right">
			                <a href="<?php echo site_url() ?>user/candidates_apply/<?php echo $values['job_id']; ?>" class="link">Applied Candidates (<?php echo $applied_count; ?>)</a>
			            </div>
            		</div>
		   
				<?php echo '<br><hr>'; } ?> 
			
				<div class="form-group">
					
					<input type="hidden" name="company_id" class="form-control" value='<?php echo($this->session->userdata("id")) ;  ?>' />
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
$(document).ready(function() {
    var table =  $('#shortlisted_candidates-table').DataTable();

    table
    .order( [ 0, 'desc' ] )
    .column( 0 ).visible( false )
    .draw();

   

});
</script>
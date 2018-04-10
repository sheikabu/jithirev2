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
						<div class="col-md-4"><label class="col-md-5">Job code:</label> <span class="col-md-7"><?php echo $values['Job_code'];?></span></div>
						<div class="col-md-4"><label class="col-md-5">Role:</label> <span class="col-md-7"><?php echo $values['job_role'];?></span></div>
						<div class="col-md-4"><label class="col-md-5">Location:</label><span class="col-md-7 inline-flex">
						<?php $locations= json_decode($values['preferred_location'], true);
								foreach($locations as $lkey => $lvalues) {
									$ploca .= $lvalues.', ';
								} echo rtrim($ploca,', '); unset($ploca);
								?>
								</span>
						</div>
					</div>
					<!-- <div class="row">
						<div class="col-md-6"><label class="col-md-4">Job Description:</label><div class="col-md-8"> <?php echo $values['job_description'];?></div>
						</div>
					</div> -->
					<div class="row">
						<div class="col-md-4"><label class="col-md-5">Experience:</label><span class="col-md-7"><?php echo $values['min_exp'];?> - <?php echo $values['max_exp'];?> Years</span>
						</div>

						<div class="col-md-4"><label class="col-md-5">No of Positions:</label><span class="col-md-7"> <?php echo $values['no_positions'];?></span></div>
						<div class="col-md-4"><label class="col-md-5">Duration:</label><span class="col-md-7"> <?php echo $values['duration'];?></span></div>
					</div>
					<div class="row">
						<div class="col-md-4"><label class="col-md-5">Max Salary:</label><span class="col-md-7"><?php echo $values['salary_lakhs'];?> Lakhs  </span></div>
						<div class="col-md-4"><label class="col-md-5">Job Type:</label><span class="col-md-7"><?php echo $values['job_type'];?></span></div>
						<div class="col-md-4"><label class="col-md-5">Primary skills: </label><span class="col-md-7">
						<?php $primary_skill =  json_decode($values['primary_skill']);
						foreach ($primary_skill as $pkey => $pvalue) {
							echo $pkey.' - '.$pvalue;
						}
					    ?></span></div>
					</div>
					<div class="row">
						<div class="col-md-4"><label class="col-md-5">Skills: </label>
						 <span class="col-md-8 pull-right skills-wrap">
		                  <?php 
		                  $skill1 = json_decode($values['skill1']);
		                  $skill2 = json_decode($values['skill2']);
		                  $skill3 = json_decode($values['skill3']);
		                  $skill4 = json_decode($values['skill4']);
		                  $skill5 = json_decode($values['skill5']);
		                  foreach ($skill1 as $key1 => $value1)
		                  if($key1!='_empty_'){
		                  echo $skill1 .= $key1.'<span class="skill-level">- '.$value1.'</span><br>'; }
		                  
			              foreach ($skill2 as $key2 => $value2)
			              	 if($key2!='_empty_'){
			                  echo $skill2 .= $key2.'<span class="skill-level">- '.$value2.'</span><br>';}
			              
			              foreach ($skill3 as $key3 => $value3)
			              	 if($key3!='_empty_'){
			                  echo $skill3 .= $key3.'<span class="skill-level">- '.$value3.'</span><br>';}
			             
			              foreach ($skill4 as $key4 => $value4)
			              	  if($key4!='_empty_'){
			                  echo $skill4 .= $key4.'<span class="skill-level">- '.$value4.'</span><br>';}
			               
			              foreach ($skill5 as $key5 => $value5)
			              	if($key5!='_empty_'){
			                  echo $skill5 .= $key5.'<span class="skill-level">- '.$value5.'</span><br>';}
			                  ?>
		                  </span>
						
						
									 
						</div> 
						<div class="col-md-8">
							
							<label class="col-md-4">Job Description:</label><div class="col-md-10 mLeft-5"> <?php echo $values['job_description'];?></div>
						
						</div>
						 <div class="col-md-4">
						  <label class="col-md-5">Status:</label><span class="col-md-7"> <?php echo $values['status'];?></span>
			            </div>
					</div>
				    <div class="row">
					
			            <div class="col-md-4">
			                <label class="col-md-5">Opening:</label><span class="col-md-7"><?php
			              echo $values['open_date_time']; 
			                ?></span>
			            </div>
			           
			            <div class="col-md-4">
			                <label class="col-md-5">Preferred Joining:</label><span class="col-md-7"> <?php echo $values['close_date_time'];?></span>
			            </div>
			            <div class="col-md-4 text-right">
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

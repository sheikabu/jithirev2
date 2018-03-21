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
	<div class="row">
		<div class="container">
			<div class="row">
					
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
			</div>
		</div>
	</div>
</section>



       
 
     


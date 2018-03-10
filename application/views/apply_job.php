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
				<?php echo form_open('');?>
	<div class="row">
		<div class="col-md-4">
		
		<div class="form-group"><label class="col-md-5">Job code:</label> <span class="col-md-7"><?php echo ($this->input->post("Job_code"));?></span></div>
		<div class="form-group">
				<label class="col-md-5">candidate id:</label>  <span class="col-md-7"><?php echo($this->session->userdata("id")) ;  ?></span></div>
				</div>
		 <div class="form-group">
	               <!-- <label> </label>
	                <input name="Job_code" class="form-control" placeholder="Jobcode*" type="text" value="" required> -->
	            </div>
		
			</div>
			<div class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-fill pull-right mBot-10">submit</button>
			</div>
		</div>
		</div>
		
	</div>
</section>



       
 
     


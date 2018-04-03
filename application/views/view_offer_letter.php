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
          			 $link = $_SERVER['PHP_SELF'];
    				$link_array = explode('/',$link);
    				$message = end($link_array); 
    				if($message==1) {
    					echo '<div id="message">Infomraion Successfully updated</div>';
    				}
          		 ?>
<section id="view_offer_letter">
	<div class="row">
		<div class="container matching_job_container">
			<div class="col-md-12">
			<div id="message"></div>
				
				
				
					
					<div class="row">
						<div class="col-md-4"><label class="col-md-5">Company Name:</label> <span class="col-md-7"><?php echo $view_letter['company_name'];?></span></div><br>
						<div class="col-md-4"><label class="col-md-5">Joining Location:</label> <span class="col-md-7"><?php echo ['joining_location'];?></span></div><br>
						
					</div>
					
					<div class="row">
						<div class="col-md-4"><label class="col-md-5">Start Date:</label><span class="col-md-7"><?php echo ['start_date'];?></span><br>
						</div>

						<div class="col-md-4"><label class="col-md-5">Duration:</label><span class="col-md-7"> <?php echo ['duration'];?></span></div><br>
					</div>
					<div class="row">
						<div class="col-md-4"><label class="col-md-5">Role:</label><span class="col-md-7"><?php echo ['role'];?></span></div><br>
						<div class="col-md-4"><label class="col-md-5">Annual CTC:</label><span class="col-md-7"><?php echo ['job_type'];?></span></div>
					
			            
            		</div>
		  <embed id="samplePDF" type="application/pdf" src="/pdfs/2010/dash_fdm350.pdf" width="100%" height="100%" onLoad="printIt('samplePDF');" />
<button onClick="printIt('')">Print</button>
		
			
			<div class="form-group">
				
				<input type="hidden" name="company_id" class="form-control" value='<?php echo($this->session->userdata("id")) ;  ?>' />
			</div>

			

				</div>
		</div>

	</div>
</section>
<script>
function printIt(id){
var pdf = document.getElementById("samplePDF");
pdf.click();
pdf.setActive();
pdf.focus();
pdf.print();
}
</script>

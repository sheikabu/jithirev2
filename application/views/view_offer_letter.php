<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>
 <section id="offer_letter">
	<div class="container">
		<div class="col-md-12 job-history">
    		<table class="table" id="offer-letter-table">
				<thead>
			    	<tr>
				      	<th>Job Code</th>
				      	<th>Job Role</th>
				      	<th>Candidate Name</th>
				      	<th>Candidate Email</th>
				      	<th>Candidate Phone</th>
				      	<th>Joining Date</th>					  	
					  	<th>Joining Location</th>
					  	<th>Status</th>
					  	<th>Download</th>
			    	</tr>
			  	</thead>
			  	<?php //print_r($view_letter); ?>
			  	<tbody>
			  	<?php foreach ($view_letter as $offerkey => $offervalue) { ?>
			  		<tr>
			      		<td><?php echo $offervalue['Job_code'] ;?></td>
			      		<td><?php echo $offervalue['job_role'] ;?></td>
			      		<td><?php echo $offervalue['name'] ;?></td>
			      		<td><?php echo $offervalue['email'] ;?></td>
			      		<td><?php echo $offervalue['mobile_number'] ;?></td>
			      		<td><?php echo $offervalue['start_date'] ;?></td>
			    		<td><?php echo $offervalue['joining_location'] ;?></td>
			    		<td>Status</td>
			    		<td><a href="<?php echo site_url() ?>user/mypdf/<?php echo $values['user_id']; ?>" class="link"><i class="fa fa-file-pdf-o"  aria-hidden="true"></i></a></td>
			    	</tr>
			    <?php } ?>
			   </tbody>
			</table>
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

<script type="text/javascript">
$(document).ready(function() {
    $('#offer-letter-table').DataTable();
});
</script>
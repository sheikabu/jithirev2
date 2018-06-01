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
	<div class="container border">
		<div class="col-md-12 mBot-30 line2  padding-10">
			<div class="row">
				<div class="col-md-12">
					<h2 class="line2 padding-5">UI/UX Designer</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-xs-12">
					
						<label class="col-xs-12 col-md-5">Company Name:</label>
						<span class="col-xs-12 col-md-7">Jithire</span>
					
				</div>
				
				<div class="col-md-6 col-xs-12">
					
						<label class="col-xs-12 col-md-5">start date:</label>
						<span class="col-xs-12 col-md-7">01/06/2018</span>
					
				</div>
				
			</div>	
			<div class="row">
				<div class="col-md-6 col-xs-12">
					
						<label class="col-xs-12 col-md-5">Joining Location:</label>
						<span class="col-xs-12 col-md-7">Technopark, Trivandrum</span>
					
				</div>
				<div class="col-md-6 col-xs-12">
					
						<label class="col-xs-12 col-md-5">Duration:</label>
						<span class="col-xs-12 col-md-7">6 Months</span>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-xs-12">
					
						<label class="col-xs-12 col-md-5">Role:</label>
						<span class="col-xs-12 col-md-7">UI/UX Designer</span>
					
				</div>
				
				<div class="col-md-6 col-xs-12">
					
						<label class="col-xs-12 col-md-5">Annual CTC:</label>
						<span class="col-xs-12 col-md-7"><i class="fa fa-inr"></i>10,00,000</span>
					
				</div>
			</div>	
		</div>

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
			    		<td><a target="_blank" href="<?php echo site_url() ?>user/offer/<?php echo $offervalue['user_id']; ?>/<?php echo $offervalue['offer_id']; ?>" class="link"><i class="fa fa-file-pdf-o"  aria-hidden="true"></i></a></td>
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
    $('#offer-letter-table').DataTable( {
    responsive: true
});
 table
	
    .order( [ 0, 'desc' ] )
    .column( 0 ).visible( false )
    .draw();

});
</script>
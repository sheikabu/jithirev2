<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>
 <section id="canditate_list">
	<div class="container">
		<div class="col-md-12 job-history">
    		<table class="table" id="canditate-list-table">
				<thead>
			    	<tr>
				      	 
				      	<th>Candidate Name</th>
				      	<th>Candidate Email</th>
				      	<th>Candidate Phone</th>
				      	<th>Primary Skills</th>					  	
					  	<th>Prefered Location</th>
					  	<th>Expected Salary</th>
					  	<th>View ProFile</th>
			    	</tr>
			  	</thead>
			  	<?php //print_r($view_letter); ?>
			  	<tbody>
			  	<?php foreach ($candidate_list as $key=>$values) { ?>
			  		<tr>
			      		
			      		
			      		<td><?php echo $values['name'] ;?></td>
			      		<td><?php echo $values['email'] ;?></td>
			      		<td><?php echo $values['mobile_number'] ;?></td>
			      		<td><?php echo $values['primary_skill'] ;?></td>
			    		<td><?php echo $values['current_location'] ;?></td>
						<td><?php echo $values['total_experience'] ;?></td>
			    		<td><a href="<?php echo site_url() ?>user/view_profile/<?php echo $values['user_id']; ?>?>" class="link">View Profile</a></td>
						
			    		
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
    $('#canditate-list-table').DataTable();
});
</script>
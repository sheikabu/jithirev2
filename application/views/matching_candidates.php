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
			 <?php $job_role = $job[0]['job_role']; ?>
			 <div class="title">Matching Candidates for <?php echo $job_role; ?></div>
			 </br>
    		<table class="table" id="matching_candidates-table">
				<thead>
			    	<tr>
			    	     <th></th>
			    	    <th>Name</th>
				      	<th>Email</th>
				      	<th>Phone</th>
				      	<th>Status</th>
					  	<th>View Profile</th>
					  	<th>Action</th>					  	
			    	</tr> 
			  	</thead>
			  	<tbody>
			  	<?php foreach($shortlisted_candidates as $key=>$values) { ?>
			  		<tr>
			  			<td></td>
			  		    <td><?php echo $values['name']; ?></td>
			      		<td><?php echo $values['email']; ?></td>
			      		<td><?php echo $values['mobile_number']; ?></td>
			      		<th>Status</th>
			      		<td><a href="<?php echo site_url() ?>user/view_profile/<?php echo $values['user_id']; ?>/<?php echo $this->uri->segment(3); ?>/job" class="link">View Profile</a></td>	
			      		<td>
			      			<input type="submit"  class="btn btn-fill mRight-10 mBot-10" name="apply" value="Apply">
                			<input type="submit"  class="btn mBot-10" name="reject" value="Reject">
			      		</td>	      		
			    	</tr>
			    	<?php } ?>
			   </tbody>
			</table>
	    </div>
	</div>
</section>


<script type="text/javascript">
$(document).ready(function() {
    var table =  $('#matching_candidates-table').DataTable();

    table
    .order( [ 0, 'desc' ] )
    .column( 0 ).visible( false )
    .draw();

   

});
</script>
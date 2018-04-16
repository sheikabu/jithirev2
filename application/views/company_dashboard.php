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

    		<table class="table" id="company-dashboard-table">
				<thead>
			    	<tr>
			    	    <th>Job id</th>
				      	<th>Job Code</th>
				      	<th>Job Role</th>
				      	<th>primary Skill</th>
					  	<th>Posted Date</th>
					  	<th>Close Date</th>
					  	<th>Status</th>
					  	<th>View</th>					  	
			    	</tr>
			  	</thead>
			  	<tbody>

			  	<?php foreach($job_list as $key=>$values) { ?>
			  		<tr>
			  		    <td><?php echo $values['job_id']; ?></td>
			      		<td><?php echo $values['Job_code']; ?></td>
			      		<td><?php echo $values['job_role']; ?></td>
			      		<td><?php
			      		$primary_skill =  json_decode($values['primary_skill']);
			      		 foreach($primary_skill as $key => $value) {
			                  		foreach ($get_skills as $skey => $svalue) {
										if($svalue['skill_id']==$key) {
											echo $svalue['skills'] .' - '.$value;
									}
								}			                  		
		                  	}
					    ?></td>
			      		<td><?php echo $values['open_date_time']; ?></td> 	
			      		<td><?php echo $values['close_date_time']; ?></td>
			    		<td><?php echo $values['status']; ?></td>
			      		<td><a href="<?php echo site_url() ?>user/posted_jobs/<?php echo $values['job_id']; ?>">View</a></td>			      		
			    	</tr>
			    	<?php } ?>
			   </tbody>
			</table>
	    </div>
	</div>
</section>


<script type="text/javascript">
$(document).ready(function() {
    var table =  $('#company-dashboard-table').DataTable();

    table
    .order( [ 0, 'desc' ] )
    .column( 0 ).visible( false )
    .draw();

   

});
</script>
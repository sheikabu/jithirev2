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
    		<table class="table">
				<thead>
			    	<tr>
				      	<th>Job Code</th>
				      	<th>Job Role</th>
				      	<th>primary Skill</th>
					  	<th>Posted Date</th>
					  	<th>Recruter</th>
					  	<th>Hiring Manager</th>
					  	<th>Status</th>
			    	</tr>
			  	</thead>
			  	<tbody>
			  		<tr>
			      		<td>12233456677</td>
			      		<td>.Net developer</td>
			      		<td>yanbytesINC</td>
			      		<td>2018-03-21 09:55:19</td>
			    		<td>John Smith</td>
			      		<td>Anitha</td>
			      		<td>Active</td>
			    	</tr>
			   </tbody>
			</table>
	    </div>
	</div>
</section>

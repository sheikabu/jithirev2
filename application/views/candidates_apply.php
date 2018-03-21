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
		Candidate applied page
		
	</div>
</section>



       
 
     


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
	Company Dashboard
	</div>
</section>

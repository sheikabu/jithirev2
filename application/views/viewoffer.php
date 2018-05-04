<section id="offer_letter">
	<div class="container">

     <div style="max-width: 1200px;overflow-x: hidden; font-family: 'Roboto Slab', 'Helvetica Neue',Helvetica, Arial, sans-serif; color: #3a5270; font-size: 13px;">
     <div style="width: 100%; height: 50px; background: #1B66B3;"></div>
	<div style="margin-top: 20px;">
	<div class="col-md-12">
          		
            <!-- Full profile view -->
              <div id="full-profile-view">
              
              	 <div class="row">
              		
					<div class="col-md-10">
				<?php foreach ($view_letter as $offerkey => $offervalue) { ?>
	              		
		                <div class="col-xs-12">
		                  <label class="col-md-4">Company Name: </label>
		                  <span class="col-md-8"><?php echo $offervalue['company_name']; ?></span>
		                </div><br>
		                <div class="col-xs-12">
		                  <label class="col-md-4">Company Address: </label>
		                  <span class="col-md-8"><?php echo $offervalue['company_address']; ?></span>
		                </div><br>
		                 <div class="col-xs-12">
		                  <label class="col-md-4">Hiring Manager Name: </label>
		                  <span class="col-md-8"><?php echo $offervalue['hiring_manager_name']; ?></span>
		                </div><br>
		               <div class="col-xs-12">
		                  <label class="col-md-4">Hiring Manager Number:</label>
		                  <span class="col-md-8"><?php echo $offervalue['hiring_manager_number']; ?>
							
		                  </span>
		                </div><br>
						<div class="col-xs-12">
		                  <label class="col-md-4">Joining Location:</label>
		                  <span class="col-md-8"><?php echo $offervalue['joining_location']; ?></span>
		                </div><br>
		                 <div class="col-xs-12">
		                  <label class="col-md-4">Start Date: </label>
		                  <span class="col-md-8"><?php echo $offervalue['start_date']; ?></span>
		                </div><br>
						<div class="col-xs-12">
		                  <label class="col-md-4">Duration:</label>
		                  <span class="col-md-8"><?php echo $offervalue['duration']; ?></span>
		                </div><br>
		                 <div class="col-xs-12">
		                  <label class="col-md-4">Role: </label>
		                  <span class="col-md-8"><?php echo $offervalue['role']; ?></span>
		                </div><br>
						
		                 <div class="col-xs-12">
		                  <label class="col-md-4">Annual CTC (Lakhs): </label>
		                  <span class="col-md-8"><?php echo $offervalue['annual_ctc']; ?></span>
		                </div><br><br>
		              <?php } ?> 
					</div>
				
		    </div>

		 
            <!-- End Full profile -->

          
         </div>
		
        </div>
		
			    
			  
	</div>

	<div style="width: 100%; height: 5px; background: #1B66B3;"></div>	
</div>

</div>
</section>

<?php
/*tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "PDF Report";
$content = 'Generate PDF sameple';
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData('tcpdf_logo.jpg', '30', $title, 'header string');
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
ob_start();
    // we can have any view part here like HTML, PHP etc
    //$content = $title;
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output(PDFUPLOAD.'/upload/offers/offer_letter_'.$user_id.'.pdf', 'FI');*/
?>
<section id="offer_letter">
	<div class="container">
<table style="border:1px solid red;width:100%;">
	<tr>
		<th style="border:1px solid red">Id</th>
		<th style="border:1px solid red">Name</th>
		<th style="border:1px solid red">Email</th>
	</tr>
	<tr>
		<td style="border:1px solid red">1</td>
		<td style="border:1px solid red">Hardik</td>
		<td style="border:1px solid red">hardik@gmail.com</td>
	</tr>
	<tr>
		<td style="border:1px solid red">2</td>
		<td style="border:1px solid red">Paresh</td>
		<td style="border:1px solid red">paresh@gmail.com</td>
	</tr>
</table>
</div>
</section>

<?php
/*tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "PDF Report";
$obj_pdf->SetTitle($title);
//$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
//$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
//$obj_pdf->SetDefaultMonospacedFont('helvetica');
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
$obj_pdf->Output(PDFUPLOAD.'/upload/offers/output.pdf', 'FI');*/
?>
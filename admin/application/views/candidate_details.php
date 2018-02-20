
	<div class="main-container ace-save-state" id="main-container">
			
		
			<div class="main-content">
				<div class="main-content-inner">
					
					<div class="page-content">
						
						

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								

								<div class="hr hr-18 dotted hr-double"></div>

								<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">Candidate List</h3>
										<div id="message">																				
										</div>
										
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>First Name</th>
														<th>Last Name</th>
														<th class="hidden-480">Email</th>

														<th>
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
															Created
														</th>
														<th class="hidden-480">Status</th>

														<th></th>
													</tr>
												</thead>

												<tbody>
												<?php 
													//print_r($company_details);
													foreach($candidate_details as $candidate) {
													?>
													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#"><?php echo $candidate->first_name; ?></a>
														</td>
														<td><?php echo $candidate->last_name; ?></td>
														<td class="hidden-480"><?php echo $candidate->email; ?></td>
														<td><?php echo $candidate->date_time; ?></td>
															
														<?php if(($candidate->status)=='active') {
																		$status = "blocked";
																		$color = "green";
																		}	else {
																		$status = "active";
																		$color = "red";
																		}

																	?>

														<td class="hidden-480">
															<span class="label label-sm label-warning" style="background-color: <?php echo $color; ?>"><?php echo ucfirst($candidate->status); ?></span>
														</td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>
																
																
																<a class="red" href="#" onclick="makeAjaxCall(<?php echo $candidate->id; ?>,'<?php echo $status; ?>');">
																	<i class="ace-icon fa fa-flag bigger-130" id="status" style="color: <?php echo $color; ?>"></i>
																</a>
																
															</div>

															
														</td>
													</tr>
													<?php } ?>
													

													
												</tbody>
											</table>
										</div>
									</div>
								</div>

							
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
		</div><!-- /.main-container -->

		<script>
function makeAjaxCall($cid,$block){
 $.ajax({
  type: "post",
  url: "<?php echo site_url('jithireAdmin/candidate_block'); ?>",
  cache: false,    
  data: {cid: $cid, block: $block},
    success: function(message) {   	
       $('#message').html(message);
       	if(message='active') {
       $("#status").css("color", "green"); } if(message='blocked') {
       $("#status").css("color", "red"); }
   }
 });
}
</script>
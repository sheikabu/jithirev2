
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
										<h3 class="header smaller lighter blue">City List</h3>
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
																<span class="lbl">#</span>
															</label>
														</th>
														<th>City</th>													
														<th></th>
														<th class="hidden-480"></th>

														<th>
															
														</th>
														<th class="hidden-480">Edit</th>

														<th>Delete</th>
													</tr>
												</thead>

												<tbody>
												<?php 
													//print_r($get_skills);
													$sno = 1;
													foreach($get_cities as $cityist) {
													?>
													<tr>
														<td class="center">
															<label class="pos-rel">
																<span class="lbl"><?php echo $sno; ?></span>
															</label>
														</td>

														<td>
															<a href="#"><?php echo $cityist['city_name']; ?></a>
														</td>
														<td></td>
														<td class="hidden-480"></td>
														<td></td>
														
														<td class="hidden-480">
																<a href="#" class="btnedit"><i class="glyphicon glyphicon-pencil" title="edit"></i></a>
														</td>

														<td>		
																<a href="#" class="btndelete"><i class="glyphicon glyphicon-remove"></i></a>
											
															
														</td>
													</tr>
													
													<?php $sno++; } ?>
													

													
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
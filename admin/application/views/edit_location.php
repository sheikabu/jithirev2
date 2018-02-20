<!-- Author Suganya -->



	<div class="main-container ace-save-state" id="main-container">
			
		
			<div class="main-content">
				<div class="main-content-inner">
					
					<div class="page-content">
						
						

						<div class="row">
						
						
 

							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								

								<div class="hr hr-18 dotted hr-double"></div>

								<div class="row">
								<form action="<?php echo site_url() ?>/jithireAdmin/edit_location_success" method="post">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">Locations List</h3>
										
										<div id="message">																				
										</div>
										<!-- <div class="container">
<a href="" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
</div> -->
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<tbody>
													<td>
														Location Name
													</td>
													<td>
															<input type="text" name="location" value="<?php echo $location->location; ?>">
													</td>
													<td>
														
													</td>
													<td>
													
													<input type="hidden" name="id" value="<?php echo $location->id;?>"/>
															<input type="submit" name="submit" value="update">
													</td>
												</tbody>

											</table>
										</div>
									</div>
									</form>
								</div>

							
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
							
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
		</div><!-- /.main-container -->


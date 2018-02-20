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
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">Locations List</h3>
										
										

									<?php echo $message?>
	<?php echo $message1?>
	<?php echo $message2?>
								
										<div class="container">

<form action="<?php echo site_url() ?>/jithireAdmin/insert_location_success" method="post">
									<div class="col-xs-12">
										
										<div id="message">																				
										</div>
										
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
											
												<tbody>
													<td>
														Location Name
													</td>
													<td>
															<input type="text" name="location" value="<?php echo $location->location; ?>"style="width:300px;">
													</td>
													
													<td>
													
													<input type="hidden" name="id" value="<?php echo $location->id;?>"/>
															<input type="submit" name="submit" value="Add Records">
													</td>
												</tbody>

											</table>
										</div>
									</div>
									</form>
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
														<th>Location Name</th>
														
												

														<th>
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
															Created
														</th>
														

														<th>Action</th>
													</tr>
												</thead>

												<tbody>
												<?php 
													//print_r($location);
													foreach($location as $location) {
													?>
													<thead>
													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#"><?php echo $location->location; ?></a>
														</td>
														
														<td><?php echo $location->date_time; ?></td>
														
														
														<td><a href="<?php echo site_url() ?>/jithireAdmin/edit_location/?id=<?php echo $location->id;?>" class='btnedit' title='edit'><i class='glyphicon glyphicon-pencil' title='edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
														<a href="<?php echo site_url() ?>/jithireAdmin/delete/?id=<?php echo $location->id; ?>" class='btndelete' title='delete'><i class='glyphicon glyphicon-remove'></i></a></td>    

														
														
													</tr>
													</thead>
													<?php } ?>
													
												</tbody>
											
											</table>
											
			
</div>




</div>
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




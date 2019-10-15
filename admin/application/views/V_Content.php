<div class="dashboard-contents">
	<div class="contents-inner">
		<div class="row">
			<div class="col-12">
				<div class="section-content">
					<div class="content-head">
						<h4 class="content-title">Data Table</h4><!-- /.content-title -->
						<div class="corner-content float-right">
							<button class="content-refresh" data-toggle="tooltip" data-placement="top" title="Reload"><i class="fa fa-refresh"></i></button>
							<button class="content-collapse" data-toggle="tooltip" data-placement="top" title="Collapse"><i class="fa fa-angle-down"></i></button>
						</div><!-- /.corner-content -->
					</div><!-- /.content-head -->

					<div class="content-details show">
						<table id="data-table" class="table data-table table-striped table-bordered">
							<thead>
								<tr>
									<th>No.</th>
									<th>Page Name</th>
									<th>Page Position</th>
									<th style="width: 300px;">Page Content Text</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody>
								<?php
								if(isset($tableContext) && $tableContext){
									$iterator = 1;
									foreach ($tableContext as $content) {
										?>
										<tr>
											<td><?php echo $iterator;?></td>
											<td><?php echo $content['page_name'];?></td>
											<td><?php echo $content['page_info_div'];?></td>
											<td style="width: 300px;"><?php echo $content['page_text'];?></td>
											<td class="text-center"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#<?php echo $iterator;?>"><i class="fa fa-pencil-square-o"></i></button></td>
											<div class="modal inmodal" id="<?php echo $iterator;?>" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content animated bounceInRight">
														<div class="modal-header">
															<h4 class="modal-title">Edit Data</h4>
														</div>
														<div class="modal-body">
															<form role="form" action="<?php echo base_url();?>editContent" method="POST">
																<div class="form-group row"><label class="col-lg-3 col-form-label">Page Name</label>
																	<div class="col-lg-9">
																		<input type="text" placeholder='<?php echo $content['page_name'];?>' class="form-control" disabled> 
																	</div>
																</div>
																<div class="form-group row"><label class="col-lg-3 col-form-label">Page Position</label>
																	<div class="col-lg-9">
																		<input type="text" placeholder='<?php echo $content['page_info_div'];?>' class="form-control" disabled> 
																	</div>
																</div>
																<div class="form-group row"><label class="col-lg-3 col-form-label">Page Content Text</label>
																	<div class="col-lg-9">
																		<textarea name="text" class="form-control" style="height: 100px"><?php echo $content['page_text'];?></textarea> 
																	</div>
																</div>
																<input type="hidden" name="ID" class="form-control" value="<?php echo $content['page_content_id'];?>" >
																<div class="text-right">
																	<button type="button" style="margin-right: 5px" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
																	<button class="btn btn-sm btn-success float-right" type="submit"><strong>Edit Data</strong></button>
																</div>
															</form>

														</div>

													</div>
												</div>
											</div>
										</tr> 
										<?php
										$iterator++;
									}
								} 
								?>
							</tbody>

						</table>
					</div><!-- /.content-details -->
				</div>
			</div>

		</div>
	  </div><!-- /.contents-inner -->
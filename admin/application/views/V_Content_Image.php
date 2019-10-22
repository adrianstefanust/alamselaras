<div class="dashboard-contents">
	<div class="contents-inner">
		<div class="row">
			<div class="col-12">
				<div class="section-content">
					<div class="content-head">
						<h4 class="content-title">Data Image</h4><!-- /.content-title -->
						<div class="corner-content float-right">
							<button class="content-refresh" data-toggle="tooltip" data-placement="top" title="Reload"><i class="fa fa-refresh"></i></button>
							<button class="content-collapse" data-toggle="tooltip" data-placement="top" title="Collapse"><i class="fa fa-angle-down"></i></button>
						</div><!-- /.corner-content -->
					</div><!-- /.content-head -->
					<?php if ($this->session->flashdata('success')): ?>
						<div class="alert alert-success">
							<?php echo $this->session->flashdata('success'); ?>
						</div>
					<?php endif ?>
					<?php if ($this->session->flashdata('error')): ?>
							
						<div class="alert alert-danger">
							<?php echo $this->session->flashdata('error'); ?>
						</div>
					<?php endif ?>
					<div class="content-details show">
						<table id="data-table" class="table data-table table-striped table-bordered">
							<thead>
								<tr>
									<th>No.</th>
									<th>Page Name</th>
									<th >Page Content IMage</th>
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
											<td style="width: 300px;"><?php echo $content['page_image_path'];?></td>
											<td class="text-center"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#<?php echo $iterator;?>"><i class="fa fa-pencil-square-o"></i></button></td>
											<div class="modal inmodal" id="<?php echo $iterator;?>" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content animated bounceInRight">
														<div class="modal-header">
															<h4 class="modal-title">Edit Data</h4>
														</div>
														<div class="modal-body">
															<?php echo form_open_multipart(base_url().'content-image/edit'); ?>
																<div class="form-group row"><label class="col-lg-3 col-form-label">Page Name</label>
																	<div class="col-lg-9">
																		<input type="text" placeholder='<?php echo $content['page_name'];?>' class="form-control" disabled> 
																	</div>
																</div>
																
																<div class="form-group row"><label class="col-lg-3 col-form-label">Page Content Text</label>
																	<div class="col-lg-9">
																		<input type="file" class="form-control input_image" target="show_img_<?php echo $iterator;  ?>" id="page_image_path" name="page_image_path">
																		<br>
																		<img src="<?php echo base_url().'../assets/images/'.$content['page_image_path'];?>"  alt=""  id="show_img_<?php echo $iterator;  ?>" class="img-fluid" >
																		
																	</div>
																</div>
																<input type="hidden" name="ID" class="form-control" value="<?php echo $content['page_image_id'];?>" >
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
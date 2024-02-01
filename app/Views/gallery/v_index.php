<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Kelola Gallery</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Gallery</h4>
										<button class="btn btn-primary btn-round ml-auto">
                                 <a href="<?= base_url('Gallery/Input') ?>" type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Tambah</a>
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Tambah Gallery</span> 
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
                                            </div>
                                        </div>
                                    </div>
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
                                                    <th>No</th>
                                                    <th>Keterangan</th>
                                                    <th>Foto</th>
                                                    <th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
                                    <?php $no = 1;
                                    foreach ($gallery as $key => $p) {?>
                                    <tr>
                                       <td><?= $no++ ?></td>
                                       <td><?= $p->keterangan ?></td>
                                       <td><img src="<?= base_url('gallery/'. $p->foto) ?>" width="250px"></td>
                                       <td>
                                          <div class="form-button-action" >
                                          <button type="button" class="btn btn-link btn-primary btn-sm">
                                             <a href="">E</a>
                                          </button>
                                          <button type="button" class="btn btn-link btn-primary btn-sm">
                                             <a href="">X</a>
                                          </button>
                                          </div> 
                                       </td>
                                    </tr>
                                    <?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>

   
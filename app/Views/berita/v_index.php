<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Kelola Berita</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Berita</h4>
										<button class="btn btn-primary btn-round ml-auto">
                                 <a href="<?= base_url('Berita/Input') ?>" type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Tambah</a>
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
														Tambah Berita</span> 
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
                                    <?php 
                                    echo form_open('Berita/InsertData')
                                    ?>
									<div class="modal-body">
                                       <div class="form-group">
                                          <label>Judul</label>
                                          <input name="judul_berita" type="text" class="form-control" placeholder="" required>
                                       </div>
                                       <div class="form-group">
                                          <label>Isi Berita</label>
                                          <textarea name="isi_berita" class="form-control" aria-label="With textarea" required></textarea>
                                       </div>
                                       <div class="form-group">
                                          <label>Tanggal</label>
                                          <input name="tgl_berita" type="text" class="form-control" placeholder="" required>
                                       </div>
                                       <div class="form-group">
                                          <label>Jam</label>
                                          <input name="jam" type="text" class="form-control" placeholder="" required>
                                       </div>
                                       <div class="form-group form-group-defaul">
                                          <label for="exampleFormControlFile1">Gambar</label>
                                          <input type="file" name="gambar_berita" class="form-control-file" id="exampleFormControlFile1">
                                       </div>
												</div>
												<div class="modal-footer">
													<button type="submit" class="btn btn-primary">Simpan</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
												</div>
											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Judul</th>
													<th>Artikel</th>
													<th>Gambar</th>
													<th>Tanggal</th>
													<th>Jam</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
                                    <?php $no = 1;
                                    foreach ($berita as $key => $p) {?>
                                    <tr>
                                       <td><?= $no++ ?></td>
                                       <td><?= $p->judul_berita ?></td>
                                       <td><?= $p->isi_berita ?></td>
                                       <td><img src="<?= base_url('gambar/'. $p->gambar_berita) ?>" width="250px"></td>
                                       <td><?= $p->tgl_berita ?></td>
                                       <td><?= $p->jam ?></td>
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

   
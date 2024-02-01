<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Tambah Gallery</h4>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">Gallery</h4>
							</div>
						</div>
						<div class="card-body" action="<?php echo base_url ('gallery/simpan') ?>" method="post">
							<div class="form-group" >
                                <label>Keterangan</label>
                                <input name="judul_berita" class="form-control" placeholder="Judul Berita" required>
							</div>
							<div class="form-group">
								<label for="exampleFormControlFile1">Foto</label>
								<input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
							</div>
							</div>
							<div class="form-group">
								<a href="<?= base_url('gallery/simpan')?>"type="submit" class="btn btn-primary">Simpan</a>
								<a href="<?= base_url('gallery')?>" class="btn btn-danger">Batal</a>
							</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <script>
	$('#summernote').summernote({
        placeholder: 'Isi Berita',
        height: 300
      });
 </script>
   
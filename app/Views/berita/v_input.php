<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Tambah Berita</h4>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">Berita</h4>
							</div>
						</div>
						<div class="card-body" action="<?php echo base_url ('berita/simpan') ?>" method="post">
							<div class="form-group" >
							<label>Judul</label>
							<input name="judul_berita" class="form-control" placeholder="Judul Berita" required>
							</div>
							<div class="form-group">
								<label>Isi Berita</label>
								<textarea id="summernote" class="form-control" aria-label="With textarea" placeholder="Isi Berita" required></textarea>
							</div>
							<div class="form-group">
								<label>Tanggal</label>
								<input name="tgl_berita" class="form-control" placeholder="Tanggal" required>
							</div>
							<div class="form-group">
								<label>Jam</label>
								<input name="jam" class="form-control" placeholder="Jam" required>
							</div>
							<div class="form-group">
								<label for="exampleFormControlFile1">Gambar</label>
								<input type="file" name="gambar_berita" class="form-control-file" id="exampleFormControlFile1">
							</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<a href="<?= base_url('berita')?>" class="btn btn-danger">Batal</a>
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
   
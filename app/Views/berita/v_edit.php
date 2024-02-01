<?php $this->extend('v_template_back_end'); ?>
<?php $this->section('isi'); ?>
<div class="container"><br><br>
    <div class="card mt-3">
    <div class="card-header">
        <b><?= $title ?></b>
    </div>
        <div class="card-body">
            <form class="row g-3" action="<?php echo base_url('matakuliah/update_data')?>"method="POST">
            <div class="col-6">
                <input type="hidden" name="id" value="<?=$matakuliah['id_mk'];?>">
                <label class="form-label">Kode MK</label>
                <input type="text" name="kode_mk" class="form-control" value="<?= $matakuliah['kode_mk'];?>">
            </div>
            <div class="col-6">
                <label class="form-label">Nama MK</label>
                <input type="text" name="nama_mk" class="form-control" value="<?= $matakuliah['nama_mk'];?>">
            </div>
            <div class="col-6">
                <label class="form-label">SKS</label>
                <input type="text" name="sks" class="form-control" value="<?= $matakuliah['sks'];?>">
            </div>
            <div class="col-6">
                <label class="form-label">Ruangan</label>
                <input type="text" name="ruangan" class="form-control" value="<?= $matakuliah['ruangan'];?>">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-danger" onclick="alert('Data berhasil diupdate')">Update</button>
                <button type="submit" class="btn btn-primary">Back</button>
                </head>
            </div>
            </form>
        </div>
    </div>
</div>
<?php $this->endSection();?>